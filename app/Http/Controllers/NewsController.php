<?php

namespace App\Http\Controllers;

use App\News;
use App\PhotoGallery;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $news = new News();

            $request->validate([
                'news_title' => 'required',
                'url' => 'required | unique:news',
                'description' => 'required',

                //'news_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);

            $news->headline = $data['news_title'];
            $news->url = $data['url'];
            $news->article = $data['description'];

            //Image
            $image_temp = $request->file('news_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/news/'.$filename);
                Image::make($image_temp)->save($large_image_path);
                $news->image = $filename;
            }
            //return response()->json($news);
            $news->save();
            return redirect()->back()->with('flash_message_success', 'News added successfully');
        }
        return view('admin.news.add_news');
    }

    public function news()
    {
        $vnews = News::get();
        return view('admin.news.view_news')->with(compact('vnews'));
    }

    public function editNews(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $request->validate([
                'news_title' => 'required',
                'description' => 'required',
                'url' => 'required',

                //'news_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);
            //Update Image
            $image_temp = $request->file('news_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/news/'.$filename);

                Image::make($image_temp)->save($large_image_path);
            }else{
                $filename = $data['current_image'];
            }
            News::where(['id'=>$id])->update(['headline'=>$data['news_title'], 'url'=>$data['url'], 'article'=>$data['description'],
                'image'=>$filename]);
            return redirect('/admin/view-news')->with('flash_message_success', 'News Updated successfully');

        }
        //get news details
        $newsdetails = News::where(['id'=>$id])->first();
        return view('admin.news.edit_news')->with(compact('newsdetails'));
    }

    public function deleteImage($id=null)
    {
        $news = News::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/news/'.$image));
        News::where(['id'=>$id])->update(['image'=>'']);
        //return response()->json($image);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }

    public function deleteNews($id=null)
    {
        $news = News::where(['id'=>$id])->first();
        $image = $news->image;
        if (!empty($image)){
            unlink(public_path('image/news/'.$image));
        }
        News::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error', 'News has been Deleted');
    }



    //photo gallery
    public function photoIndex()
    {
        $images = PhotoGallery::get();
        return view('admin.gallery.photo_gallery',compact('images'));
    }

    public function photoUpload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('image/photo_gallery'), $input['image']);

        $input['title'] = $request->title;
        PhotoGallery::create($input);

        return back()->with('success','Image Uploaded successfully.');
    }


    public function photoDestroy($id)
    {
        $pho = PhotoGallery::find($id)->first();
        $image = $pho->image;
        unlink(public_path('image/photo_gallery/'.$image));
        PhotoGallery::where(['id'=>$id])->delete();
        return back()->with('success','Image removed successfully.');
    }
}
