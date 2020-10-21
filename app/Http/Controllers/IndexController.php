<?php

namespace App\Http\Controllers;

use App\About;
use App\AdminReview;
use App\Bike;
use App\Brand;
use App\Category;
use App\Comment;
use App\Contact;
use App\FullSpac;
use App\Gallery;
use App\News;
use App\PhotoGallery;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        //slider
        $slider = Gallery::get();
        //brands
        $brands = Brand::with('brands')->get();

        //bikes
        $bikes = Bike::orderBy('created_at', 'asc')->paginate(16);
        foreach ($bikes as $bike=>$val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $bikes[$bike]->ct_name = $category_name->ct_name;
        }

        $categories = Category::with('categories')->get();

        /*foreach ($categories as $category=>$val) {
            $categories[$category]->bike_name = DB::table('categories')
                ->join('bikes', 'categories.id', '=', 'bikes.category_id')
                ->select('bikes.*', 'categories.ct_name')->where(['category_id'=> $val->id])
                ->first();
        }*/

        /*$sub_cat = SubCategory::get();
        foreach ($sub_cat as $sct=>$i){
            $cat = Category::where(['id'=>$i->category_id])->get();
            $sub_cat[$cat]->name = $cat->sub_cat_name;
        }*/

        //return view
        return view('index')->with(compact('brands', 'slider', 'bikes', 'categories'));
    }

    public function sub_cat_Bikes($sub_ct_name = null)
    {
        $categories = Category::with('categories')->get();
        $subcategoryDetails = SubCategory::where(['sub_ct_name'=>$sub_ct_name])->first();
        $allBikes = Bike::orderBy('price','asc')->where(['sub_category_id'=>$subcategoryDetails->id])->paginate(16);
        $brands = Brand::get();
        return view('bikes.sub_category')->with(compact('subcategoryDetails', 'allBikes','categories','brands'));
    }

    public function bike_br($br_name=null)
    {
        $categories = Category::with('categories')->get();
        $br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where(['brand_id'=>$br_name_details->id])->paginate(16);
        $brands = Brand::get();
        return view('bikes.bike_brand')->with(compact('br_name_details', 'bikes','categories','brands'));
    }

    public function bikeDetails($bike_name = null, $id=null)
    {
        $categories = Category::with('categories')->get();
        $bk_details = Bike::where(['bike_name'=>$bike_name])->first();
        $full_spec = FullSpac::where(['bike_id'=>$bk_details->id])->first();
        $brands = Brand::get();


        $bk_id = Bike::where(['bike_name'=>$bike_name])->first();
        $com = Comment::orderBy('created_at','asc')->where(['bike_id' =>$bk_id->id, 'status'=>'1'])->get();

        return view('bikes.bike_details')->with(compact('categories', 'bk_details', 'full_spec', 'brands', 'com'));
    }

    public function reviews()
    {
        $categories = Category::with('categories')->get();
        $reviews = AdminReview::orderBy('created_at','asc')->paginate(10);
        $metareviews = AdminReview::first();
        return view('reviews.short_reviews')->with(compact('reviews', 'categories', 'metareviews'));
    }

    public function reviewsDetails($title=null)
    {
        $categories = Category::with('categories')->get();
        $detail_review =AdminReview::where(['title'=>$title])->first();
        return view('reviews.detail_review')->with(compact('detail_review', 'categories'));
    }

    public function photoGallery(){
        $categories = Category::with('categories')->get();
        $photos = PhotoGallery::paginate(10);
        return view('gallery.gallery')->with(compact('categories', 'photos'));
    }

    public function about()
    {
        $categories = Category::with('categories')->get();
        $about = About::get();
        //return response()->json($about);
        return view('about')->with(compact('about', 'categories'));
    }

    //NEWS
    public function news()
    {
        $categories = Category::with('categories')->get();
        $news = News::orderBy('created_at', 'asc')->paginate(8);
        $metanews = News::first();
        return view('news.short_news')->with(compact('news', 'categories', 'metanews'));
    }

    public function newsDetails($headline=null)
    {
        $categories = Category::with('categories')->get();
        $detail_news =News::where(['headline'=>$headline])->first();
        return view('news.detail_news')->with(compact('detail_news', 'categories'));
    }

    //Contact
    public function contact()
    {
        $categories = Category::with('categories')->get();
        return view('contact')->with(compact('categories'));
    }

    public function storeMessage(Request $request)
    {
        $msg = new Contact();
        $msg->name = $request->name;
        $msg->message = $request->msg;

        $msg->save();
        return redirect()->back()->with('flash_message_success', 'Your Message has been Sent!!');
    }

    public function search()
    {
        $categories = Category::with('categories')->get();
        $brands = Brand::all();
        $text = $_GET['query'];
        $bikes = Bike::where('bike_name', 'LIKE', '%'.$text.'%')->get();

        return view('bikes.search')->with(compact('categories', 'bikes', 'brands'));
    }

    public function compare(Request $request)
    {
        return view('compare');
    }
}
