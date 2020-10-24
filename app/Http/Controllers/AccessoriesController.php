<?php

namespace App\Http\Controllers;

use App\Accessories;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AccessoriesController extends Controller
{
    public function addAccessories(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $acc = new Accessories();

            $acc->name = $data['name'];
            $acc->url = $data['url'];
            $acc->price = $data['price'];
            $acc->description = $data['description'];

            //Upload Image
            $image_temp = $request->file('image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/accessories/image/'.$filename);
                Image::make($image_temp)->save($large_image_path);
                $acc->image = $filename;
            }

            // Image1
            $image_temp1 = $request->file('image1');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;
                $large_image_path1 = public_path('image/accessories/image1/'.$filename1);
                Image::make($image_temp1)->save($large_image_path1);
                $acc->image1 = $filename1;
            }

            //Image 2
            $image_temp2 = $request->file('image2');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename2 = rand(111, 999999).'.'.$extension2;
                $large_image_path2 = public_path('image/accessories/image2/'.$filename2);
                Image::make($image_temp2)->save($large_image_path2);
                $acc->image2 = $filename2;
            }
            $acc->save();
            return redirect()->back()->with('flash_message_success', 'Accessories added successfully');
           // return redirect('/admin/view-accessories')->with('flash_message_success', 'Bike added successfully');
        }
        return view('admin.accessories.add');
    }

    public function viewAccessories()
    {
        $details = Accessories::get();
        return view('admin.accessories.manage')->with(compact('details'));
    }

    public function editAccessories(Request $request, $id)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            //Update Image
            $image_temp = $request->file('image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/accessories/image/'.$filename);

                Image::make($image_temp)->save($large_image_path);
            }else{
                $filename = $data['current_image'];
            }

            //Update Image1
            $image_temp1 = $request->file('bike_image1');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;

                $large_image_path1 = public_path('image/accessories/image1/'.$filename1);

                Image::make($image_temp1)->save($large_image_path1);
            }else{
                $filename1 = $data['current_image1'];
            }

            //Update Image2
            $image_temp2 = $request->file('bike_image2');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename2 = rand(111, 999999).'.'.$extension2;

                $large_image_path2 = public_path('image/accessories/image2/'.$filename2);
                Image::make($image_temp2)->save($large_image_path2);
            }else{
                $filename2 = $data['current_image2'];
            }

            Accessories::where(['id'=>$id])->update(['name'=>$data['name'], 'url'=>$data['url'],
                'description'=>$data['description'], 'image'=>$filename, 'image1'=>$filename1, 'image2'=>$filename2]);

            return redirect('/admin/view-accessories')->with('flash_message_success', 'Information Updated successfully');

        }
        $details = Accessories::where(['id'=>$id])->first();

        return view('admin.accessories.edit')->with(compact('details'));
    }

    public function deleteAccessories($id=null)
    {
        $news = Accessories::where(['id'=>$id])->first();

        $image = $news->image;
        unlink(public_path('image/accessories/image/'.$image));

        $image1 = $news->image1;
        unlink(public_path('image/accessories/image1/'.$image1));

        $image2 = $news->image2;
        unlink(public_path('image/accessories/image2/'.$image2));

        Accessories::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error', 'Item has been Deleted');
    }

    public function deleteAImage($id=null)
    {
        $news = Accessories::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/accessories/image/'.$image));
        Accessories::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }

    public function deleteAImage1($id=null)
    {
        $news = Accessories::where(['id'=>$id])->first();
        $image1 = $news->image1;
        unlink(public_path('image/accessories/image1/'.$image1));

        Accessories::where(['id'=>$id])->update(['image1'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
    public function deleteAImage2($id=null)
    {
        $news = Accessories::where(['id'=>$id])->first();
        $image2 = $news->image2;
        unlink(public_path('image/accessories/image2/'.$image2));

        Accessories::where(['id'=>$id])->update(['image2'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
}
