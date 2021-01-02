<?php

namespace App\Http\Controllers;

use App\Showroom;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ShowroomController extends Controller
{
    public function addShowroom(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $news = new Showroom();

            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'image' => 'required | mimes:jpeg,jpg,png, PNG'
            ]);

            $news->name = $data['name'];
            $news->details = $data['description'];

            //Image
            $image_temp = $request->file('image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/show/'.$filename);
                Image::make($image_temp)->resize(467, 341)->save($large_image_path);
                $news->image = $filename;
            }
            //return response()->json($news);
            $news->save();
            return redirect(route('manage.showroom'))->with('flash_message_success', 'Info added successfully');
        }
        return view('admin.showroom.add_showroom');
    }

    public function manageShowroom()
    {
        $data = Showroom::get();
        return view('admin.showroom.manage_showroom')->with(compact('data'));
    }

    public function editShowroom(Request $request, $id)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $request->validate([
                'name' => 'required',
                'description' => 'required',
                //'news_image' => 'mimes:jpeg,jpg,png, PNG'
            ]);

            //Update Image
            $image_temp = $request->file('image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/show/'.$filename);

                Image::make($image_temp)->resize(467, 341)->save($large_image_path);
            }else{
                $filename = $data['current_image'];
            }
            Showroom::where(['id'=>$id])->update(['name'=>$data['name'], 'details'=>$data['description'],
                'image'=>$filename]);
            return back()->with('flash_message_success', 'Info Updated successfully');

        }
        //get details
        $details = Showroom::where(['id'=>$id])->first();
        return view('admin.showroom.edit_showroom')->with(compact('details'));
    }

    public function deleteShowroomImage($id)
    {
        $news = Showroom::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/show/'.$image));
        Showroom::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');

    }

    public function deleteShowroom($id)
    {
        Showroom::where(['id'=>$id])->delete();
        return back()->with('flash_message_success', 'Info Deleted');
    }
}
