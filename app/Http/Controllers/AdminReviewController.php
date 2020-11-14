<?php

namespace App\Http\Controllers;

use App\AdminReview;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminReviewController extends Controller
{
    public function writeReview(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $review = new AdminReview();

            $request->validate([
                'rvw_title' => 'required',
                'description' => 'required',
                'writer' => 'required',
                'url' => 'required | unique:admin_reviews',
                //'description' => 'required',
                /*'rvw_image1' => 'required | mimes:jpeg,jpg,png, PNG',
                'rvw_image2' => 'required | mimes:jpeg,jpg,png, PNG',
                'rvw_image3' => 'required | mimes:jpeg,jpg,png, PNG',*/
            ]);

            $review->title = $data['rvw_title'];
            $review->url = $data['url'];
            $review->details = $data['description'];
            $review->written_by = $data['writer'];

            //Image
            $image_temp1 = $request->file('rvw_image1');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;
                $large_image_path1 = public_path('image/admin_review/image1/'.$filename1);
                Image::make($image_temp1)->save($large_image_path1);
                $review->image1 = $filename1;
            }
            //Image2
            $image_temp2 = $request->file('rvw_image2');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename2 = rand(111, 999999).'.'.$extension2;
                $large_image_path2 = public_path('image/admin_review/image2/'.$filename2);
                Image::make($image_temp2)->save($large_image_path2);
                $review->image2 = $filename2;
            }
            //Image3
            $image_temp3 = $request->file('rvw_image3');
            if ($image_temp3){
                $extension3 = $image_temp3->getClientOriginalExtension();
                $filename3 = rand(111, 999999).'.'.$extension3;
                $large_image_path3 = public_path('image/admin_review/image3/'.$filename3);
                Image::make($image_temp3)->save($large_image_path3);
                $review->image3 = $filename3;
            }
            //return response()->json($review);
            $review->save();
            return redirect()->back()->with('flash_message_success', 'Review added successfully !!!');
        }
        return view('admin.adReview.write_review');
    }

    public function allReviews()
    {
        $review = AdminReview::get();
        return view('admin.adReview.all_reviews')->with(compact('review'));
    }

    public function editReview(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $request->validate([
                'rvw_title' => 'required',
                'description' => 'required',
                'writer' => 'required',
                'url' => 'required',
                /*'rvw_image1' => 'mimes:jpeg,jpg,png, PNG',
                'rvw_image2' => 'mimes:jpeg,jpg,png, PNG',
                'rvw_image3' => 'mimes:jpeg,jpg,png, PNG',*/
            ]);

            //Update Image
            $image_temp1 = $request->file('review_image1');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;

                $large_image_path1 = public_path('image/admin_review/image1/'.$filename1);

                Image::make($image_temp1)->save($large_image_path1);
            }else{
                $filename1 = $data['current_image1'];
            }

            //Update Image
            $image_temp2 = $request->file('review_image2');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename2 = rand(111, 999999).'.'.$extension2;

                $large_image_path2 = public_path('image/admin_review/image2/'.$filename2);

                Image::make($image_temp2)->save($large_image_path2);
            }else{
                $filename2 = $data['current_image2'];
            }

            //Update Image
            $image_temp3 = $request->file('review_image3');
            if ($image_temp3){
                $extension3 = $image_temp3->getClientOriginalExtension();
                $filename3 = rand(111, 999999).'.'.$extension3;

                $large_image_path3 = public_path('image/admin_review/image3/'.$filename3);

                Image::make($image_temp3)->save($large_image_path3);
            }else{
                $filename3 = $data['current_image3'];
            }

            /*if (empty($filename1)){
                $request->validate([
                    'review_image1' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }

            if (empty($filename2)){
                $request->validate([
                    'review_image2' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }

            if (empty($filename3)){
                $request->validate([
                    'review_image3' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }*/

            AdminReview::where(['id'=>$id])->update(['title'=>$data['rvw_title'],'url'=>$data['url'], 'written_by'=>$data['writer'],
                'details'=>$data['description'], 'image1'=>$filename1, 'image2'=>$filename2, 'image3'=>$filename3]);

            return redirect('/admin/all-reviews/')->with('flash_message_success', 'Info Updated successfully');

        }
        //get Review details
        $reviewdetails = AdminReview::where(['id'=>$id])->first();
        return view('admin.adReview.edit_review')->with(compact('reviewdetails'));
    }

    public function deleteReview($id=null)
    {
        $news = AdminReview::where(['id'=>$id])->first();
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
        AdminReview::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error', 'Review Deleted Successfully!!');
    }

    public function deleteImage1($id=null)
    {
        $news = AdminReview::where(['id'=>$id])->first();
        $image = $news->image1;
        if ($image){
            unlink(public_path('image/admin_review/image1/'.$image));
        }
        AdminReview::where(['id'=>$id])->update(['image1'=>'']);
        return redirect()->back()->with('flash_message_success', '1st Image has been Deleted');
    }
    public function deleteImage2($id=null)
    {
        $news = AdminReview::where(['id'=>$id])->first();
        $image = $news->image2;
        if ($image){
            unlink(public_path('image/admin_review/image2/'.$image));
        }

        AdminReview::where(['id'=>$id])->update(['image2'=>'']);
        return redirect()->back()->with('flash_message_success', '2nd Image has been Deleted');
    }
    public function deleteImage3($id=null)
    {
        $news = AdminReview::where(['id'=>$id])->first();
        $image = $news->image3;
        if ($image){
            unlink(public_path('image/admin_review/image3/'.$image));
        }
        AdminReview::where(['id'=>$id])->update(['image3'=>'']);
        return redirect()->back()->with('flash_message_success', '3rd Image has been Deleted');
    }
}
