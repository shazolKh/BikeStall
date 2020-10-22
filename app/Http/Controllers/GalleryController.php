<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::get();
        return view('admin.gallery.image-gallery',compact('images'));
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('image/gallery'), $input['image']);

        $input['title'] = $request->title;
        Gallery::create($input);

        return back()->with('success','Image Uploaded successfully.');
    }


    public function destroy($id)
    {
        $news = Gallery::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/gallery/'.$image));
        Gallery::where(['id'=>$id])->delete();
        return back()->with('success','Image removed successfully.');
    }
}
