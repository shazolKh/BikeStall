<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class LogoController extends Controller
{
    public function addLogo(Request $request)
    {
        if ($request->isMethod('post')){
            //$data = $request->all();
            $logo = new Logo();
            $image_temp = $request->file('image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/logo/'.$filename);
                Image::make($image_temp)->save($large_image_path);
                $logo->image = $filename;
            }
            $logo->save();
            return response()->json($logo);

            //return back();
        }
        return view('admin.logo.add_logo');
    }

    public function manageLogo()
    {
        $logo = Logo::get();
        return view('admin.logo.manage_logo')->with(compact('logo'));
    }

    public function editLogo(Request $request, $id)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $image_temp2 = $request->file('image');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension2;

                $large_image_path2 = public_path('image/logo/'.$filename);
                Image::make($image_temp2)->save($large_image_path2);
            }
            else{
                $filename = $data['current_image'];
            }
            Logo::where(['id'=>$id])->update(['image'=>$filename]);
            return redirect(route('manage.logo'))->with('flash_message_success', 'Information Updated successfully');
        }

        $details = Logo::where(['id'=>$id])->first();
        return view('admin.logo.edit_logo')->with(compact('details'));
    }

    public function deleteLogo($id)
    {
        $news = Logo::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/logo/'.$image));
        Logo::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');

    }

}
