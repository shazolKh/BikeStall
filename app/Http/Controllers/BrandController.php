<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function addBrand(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $brand = new Brand();
            $brand->br_name = $data['brand_name'];
            $brand->description = $data['description'];

            $image_temp = $request->file('br_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = 'image/brand_image/'.$filename;
                Image::make($image_temp)->save($large_image_path);

                $brand->image = $filename;
            }
            $brand->save();
            return redirect()->back()->with('flash_message_success', 'Brand Added Successfully!!');
        }
        return view('admin.brands.add_brand');
    }

    public function viewBrand()
    {
        $brand = Brand::get();
        return view('admin.brands.view_brand')->with(compact('brand'));
    }

    public function editBrand(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $image_temp = $request->file('br_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = 'image/brand_image/'.$filename;
                Image::make($image_temp)->save($large_image_path);
            }else{
                $filename = $data['current_image'];
            }

            Brand::where(['id'=>$id])->update(['br_name'=>$data['brand_name'], 'description'=>$data['description'],
                'image'=>$filename]);

            return redirect('/admin/view-brand')->with('flash_message_success', 'Brand Updated Successfully!!');
        }
        $details = Brand::where(['id'=>$id])->first();
        return view('admin.brands.edit_brand')->with(compact('details'));
    }

    public function deleteBrand($id=null)
    {
        if (!empty($id)){
            $news = Brand::where(['id'=>$id])->first();
            $image = $news->image;
            unlink('image/brand_image/'.$image);
            Brand::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error', 'Brand Deleted Successfully!!');
        }
    }

    public function deleteImage($id=null)
    {
        $news = Brand::where(['id'=>$id])->first();
        $image = $news->image;
        unlink('image/brand_image/'.$image);
        //unlink('image/images/image1/medium_image/'.$image);
        //unlink('image/images/image1/small_image/'.$image);
        Brand::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
}
