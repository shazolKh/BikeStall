<?php

namespace App\Http\Controllers;

use App\Bike;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SubCategoryController extends Controller
{
    public function addsubCategory(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $subcategory = new SubCategory();

            $request->validate([
                'category_name' => 'required',
                'parent_id' => 'required',
                'description' => 'required',

                'scat_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);


            $subcategory->sub_ct_name = $data['category_name'];
            $subcategory->category_id = $data['parent_id'];
            $subcategory->description = $data['description'];


            $image_temp = $request->file('scat_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/scat_image/'.$filename);
                Image::make($image_temp)->save($large_image_path);

                $subcategory->image = $filename;
            }
            $subcategory->save();
            return redirect()->back()->with('flash_message_success', 'Sub-Category Added Successfully!!');
        }

        $levels = Category::get();
        return view('admin.sub categories.add_sub_category')->with(compact('levels'));
    }

    public function viewsubCategory()
    {
        $subcategories = SubCategory::get();

        foreach ($subcategories as $sub_ct=>$val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $subcategories[$sub_ct]->ct_name = $category_name->ct_name;
        }

        return view('admin.sub categories.view_sub_categories')->with(compact('subcategories'));
    }

    public function editsubCategory(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $request->validate([
                'category_name' => 'required',
                'parent_id' => 'required',
                'description' => 'required',

                //'scat_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);

            //Update Image
            $image_temp = $request->file('scat_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/scat_image/'.$filename);
                Image::make($image_temp)->save($large_image_path);

            }else{
                $filename = $data['current_image'];
            }


            SubCategory::where(['id'=>$id])->update(['sub_ct_name'=>$data['category_name'], 'category_id'=>$data['parent_id'],
                'description'=>$data['description'],'image'=>$filename]);

            return redirect('/admin/view-sub-category')->with('flash_message_success', 'Sub-Category Updated Successfully!!');
        }
        $details = SubCategory::where(['id'=>$id])->first();
        $levels = Category::get();
        return view('admin.sub categories.edit_sub_category')->with(compact('details', 'levels'));
    }

    public function deletesubCategory($id=null)
    {
        if (!empty($id)){
            $news = SubCategory::where(['id'=>$id])->first();
            $image = $news->image;
            if (!empty($image)){
                unlink(public_path('image/scat_image/'.$image));
            }
            SubCategory::where(['id'=>$id])->delete();
            Bike::where(['sub_category_id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error', 'Information Deleted Successfully!!');
        }
    }

    public function deleteImage($id=null)
    {
        $news = SubCategory::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/scat_image/'.$image));
        SubCategory::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
}
