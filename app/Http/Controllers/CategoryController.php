<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\AccessoriesCategory;
use App\AdminReview;
use App\Bike;
use App\Category;
use App\ReviewsCategory;
use App\SubCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $category = new Category();

            $request->validate([
                'category_name' => 'required',
                'description' => 'required',

                //'cat_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);


            $category->ct_name = $data['category_name'];
            //$category->parent_id = $data['parent_id'];
            $category->description = $data['description'];


            $image_temp = $request->file('cat_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/cat_image/'.$filename);
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

            $request->validate([
                'category_name' => 'required',
                'description' => 'required',

                //'cat_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);

            //Update Image
            $image_temp = $request->file('cat_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;
                $large_image_path = public_path('image/cat_image/'.$filename);
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
            if (!empty($image)){
                unlink(public_path('image/cat_image/'.$image));
            }

            SubCategory::where(['category_id'=>$id])->delete();
            Bike::where(['category_id'=>$id])->delete();
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error', 'Category Deleted Successfully!!');
        }
    }

    public function deleteImage($id=null)
    {
        $news = Category::where(['id'=>$id])->first();
        $image = $news->cat_image;
        unlink(public_path('image/cat_image/'.$image));
        //unlink('image/images/image1/medium_image/'.$image);
        //unlink('image/images/image1/small_image/'.$image);
        Category::where(['id'=>$id])->update(['cat_image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }


    //===========================================================================================
    //===========================================================================================
    //==================================ACCESSORIES CATEGORIES===================================
    //===========================================================================================
    //===========================================================================================

    public function addAccCategory(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $acc_cate = new AccessoriesCategory();

            $request->validate([
                'acc_cate' => 'required',
                //'cat_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);

            $acc_cate->name = $data['acc_cate'];

            $acc_cate->save();
            return redirect(route('manage.acc.cate'))->with('flash_message_success', 'Category Added Successfully!!');
        }

        return view('admin.acc cate.add_cate');
    }

    public function manageAccCategory()
    {
        $data = AccessoriesCategory::get();
        return view('admin.acc cate.manage_cate')->with(compact('data'));
    }

    public function editAccCategory(Request $request, $id)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            AccessoriesCategory::where(['id'=>$id])->update(['name'=>$data['acc_cate']]);
            return redirect(route('manage.acc.cate'))->with('flash_message_success', 'Category Updated Successfully!!');
        }

        $data = AccessoriesCategory::where(['id'=>$id])->first();
        return view('admin.acc cate.edit_cate')->with(compact('data'));
    }

    public function deleteAccCategory($id)
    {
        AccessoriesCategory::where(['id'=>$id])->delete();
        Accessories::where(['category_id'=>$id])->delete();
        return back()->with('flash_message_error', 'Category Deleted Successfully!!');
    }

    //===========================================================================================
    //===========================================================================================
    //==================================REVIEWS CATEGORIES===================================
    //===========================================================================================
    //===========================================================================================

    public function addReviewCategory(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $review_cate = new ReviewsCategory();

            $request->validate([
                'acc_cate' => 'required',
                //'cat_image' => 'required | mimes:jpeg,jpg,png, PNG',
            ]);

            $review_cate->name = $data['acc_cate'];

            $review_cate->save();
            return redirect(route('manage.review.cate'))->with('flash_message_success', 'Category Added Successfully!!');
        }

        return view('admin.review cate.add_cate');
    }

    public function manageReviewCategory()
    {
        $data = ReviewsCategory::get();
        return view('admin.review cate.manage_cate')->with(compact('data'));
    }

    public function editReviewCategory(Request $request, $id)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            ReviewsCategory::where(['id'=>$id])->update(['name'=>$data['acc_cate']]);
            return redirect(route('manage.review.cate'))->with('flash_message_success', 'Category Updated Successfully!!');
        }

        $data = ReviewsCategory::where(['id'=>$id])->first();
        return view('admin.review cate.edit_cate')->with(compact('data'));
    }

    public function deleteReviewCategory($id)
    {
        ReviewsCategory::where(['id'=>$id])->delete();
        $news = AdminReview::where(['category_id'=>$id])->first();
        $image1 = $news->image1;
        $image2 = $news->image2;
        $image3 = $news->image3;
        if (!empty($image1)){
            unlink(public_path('image/admin_review/image1/'.$image1));
        }
        if (!empty($image2)){
            unlink(public_path('image/admin_review/image2/'.$image2));
        }
        if (!empty($image3)){
            unlink(public_path('image/admin_review/image3/'.$image3));
        }
        AdminReview::where(['category_id'=>$id])->delete();
        return back()->with('flash_message_error', 'Category Deleted Successfully!!');
    }
}
