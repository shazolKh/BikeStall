<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $category = new Category();
            $category->ct_name = $data['category_name'];
            //$category->parent_id = $data['parent_id'];
            $category->description = $data['description'];


            $image_temp = $request->file('cat_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = 'image/cat_image/'.$filename;
                Image::make($image_temp)->save($large_image_path);

                $category->cat_image = $filename;
            }
            $category->save();
            return redirect()->back()->with('flash_message_success', 'Category Added Successfully!!');
        }

        //$levels = Category::where(['parent_id'=>'0'])->get();
        return view('admin.categories.add_category');
    }

    public function viewCategory()
    {
        $categories = Category::get();
        return view('admin.categories.view_categories')->with(compact('categories'));
    }

    public function editCategory(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            //Update Image
            $image_temp = $request->file('cat_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = 'image/cat_image/'.$filename;
                Image::make($image_temp)->save($large_image_path);
            }else{
                $filename = $data['current_image'];
            }


            Category::where(['id'=>$id])->update(['ct_name'=>$data['category_name'], 'description'=>$data['description'],
                'cat_image'=>$filename]);
            return redirect('/admin/view-category')->with('flash_message_success', 'Category Updated Successfully!!');
        }
        $details = Category::where(['id'=>$id])->first();
        //$levels = Category::where(['parent_id'=>'0'])->get();
        return view('admin.categories.edit_category')->with(compact('details'/*, 'levels'*/));
    }

    public function deleteCategory($id=null)
    {
        if (!empty($id)){
            $news = Category::where(['id'=>$id])->first();
            $image = $news->cat_image;
            unlink('image/cat_image/'.$image);
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error', 'Category Deleted Successfully!!');
        }
    }

    public function deleteImage($id=null)
    {
        $news = Category::where(['id'=>$id])->first();
        $image = $news->cat_image;
        unlink('image/cat_image/'.$image);
        //unlink('image/images/image1/medium_image/'.$image);
        //unlink('image/images/image1/small_image/'.$image);
        Category::where(['id'=>$id])->update(['cat_image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
}
