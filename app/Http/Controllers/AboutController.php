<?php

namespace App\Http\Controllers;

use App\About;
use App\Logo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function addAbout(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $news = new About();

            $request->validate([
                'news_title' => 'required',
                'description' => 'required',
                /*'news_image' => 'required | mimes:jpeg,jpg,png, PNG'*/
            ]);

            $news->title = $data['news_title'];
            $news->details = $data['description'];

            //Image
            $image_temp = $request->file('news_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/about/'.$filename);
                Image::make($image_temp)->save($large_image_path);
                $news->image = $filename;
            }
            //return response()->json($news);
            $news->save();
            return redirect()->back()->with('flash_message_success', 'About added successfully');
        }
        return view('admin.about.add_about');
    }

    public function about()
    {
        $vnews = About::get();
        return view('admin.about.view_about')->with(compact('vnews'));
    }

    public function editAbout(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $request->validate([
                'news_title' => 'required',
                'description' => 'required',
                //'news_image' => 'mimes:jpeg,jpg,png, PNG'
            ]);

            //Update Image
            $image_temp = $request->file('news_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/about/'.$filename);

                Image::make($image_temp)->save($large_image_path);
            }else{
                $filename = $data['current_image'];
            }

            //Update Image
            $image_temp1 = $request->file('sc_image');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;

                $large_image_path1 = public_path('image/about/'.$filename1);

                Image::make($image_temp1)->save($large_image_path1);
            }else{
                $filename1 = $data['current_image1'];
            }
            About::where(['id'=>$id])->update(['title'=>$data['news_title'], 'details'=>$data['description'],
                 'search_title'=>$data['image_title'], 'search_image'=>$filename1, 'fb'=>$data['fb'],'image'=>$filename,
                'yt'=>$data['yt'], 'twitter'=>$data['twitter'], 'linkedin'=>$data['linkedin']]);
            return redirect('/admin/view-about')->with('flash_message_success', 'Information Updated successfully');

        }
        //get news details
        $newsdetails = About::where(['id'=>$id])->first();
        return view('admin.about.edit_about')->with(compact('newsdetails'));
    }

    public function deleteImage($id=null)
    {
        $news = About::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/about/'.$image));
        About::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }

    public function deleteSearchImage($id)
    {
        $news = About::where(['id'=>$id])->first();
        $image = $news->search_image;
        unlink(public_path('image/about/'.$image));
        About::where(['id'=>$id])->update(['search_image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
}
