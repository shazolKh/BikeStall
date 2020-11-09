<?php

namespace App\Http\Controllers;

use App\About;
use App\Accessories;
use App\AdminReview;
use App\Bike;
use App\Brand;
use App\Category;
use App\Comment;
use App\Gallery;
use App\Logo;
use App\News;
use App\PhotoGallery;
use App\Showroom;
use App\SubCategory;

class IndexController extends Controller
{
    public function index()
    {
        //slider
        $slider = Gallery::get();
        //brands
        $brands = Brand::with('brands')->limit(5)->get();

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

        //NEWS
        $news = News::orderBy('created_at', 'asc')->limit(4)->get();

        $reviews = AdminReview::orderBy('created_at','asc')->limit(4)->get();

        $logo = Logo::first();

        $all_brands = Brand::get();

        //return view
        return view('index')->with(compact('brands', 'slider', 'bikes','news', 'reviews', 'categories',
            'logo', 'all_brands'));
    }

    public function sub_cat_Bikes($sub_ct_name = null)
    {
        $categories = Category::with('categories')->get();
        $subcategoryDetails = SubCategory::where(['sub_ct_name'=>$sub_ct_name])->first();
        $allBikes = Bike::orderBy('price','asc')->where(['sub_category_id'=>$subcategoryDetails->id])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('bikes.sub_category')->with(compact('subcategoryDetails', 'allBikes','categories',
            'brands', 'logo', 'all_brands'));
    }

    public function bike_br($br_name=null)
    {
        $categories = Category::with('categories')->get();
        $br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where(['brand_id'=>$br_name_details->id])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('bikes.bike_brand')->with(compact('br_name_details', 'bikes','categories','brands',
            'logo', 'all_brands'));
    }

    public function bikeDetails($url)
    {
        $categories = Category::with('categories')->get();
        $bk_details = Bike::where(['url'=>$url])->first();
       //$full_spec = FullSpac::where(['bike_id'=>$bk_details->id])->first();

        $brand = Brand::where(['id'=>$bk_details->brand_id])->first();


        $bk_id = Bike::where(['url'=>$url])->first();
        $com = Comment::orderBy('created_at','asc')->where(['bike_id' =>$bk_id->id, 'status'=>'1'])->get();
        $logo = Logo::first();

        $related = Bike::where(['category_id'=>$bk_id->category_id])
            ->where('url', '!=', $url)->get();

        $all_brands = Brand::get();

        //return response()->json($related);

        return view('bikes.bike_details')->with(compact('categories', 'bk_details', 'brand', 'com', 'logo',
        'related', 'all_brands'));
    }

    public function reviews()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $reviews = AdminReview::orderBy('created_at','asc')->paginate(10);
        $metareviews = AdminReview::first();
        $all_brands = Brand::get();
        return view('reviews.short_reviews')->with(compact('reviews', 'categories', 'metareviews', 'logo',
        'all_brands'));
    }

    public function reviewsDetails($title=null)
    {
        $categories = Category::with('categories')->get();
        $detail_review =AdminReview::where(['title'=>$title])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('reviews.detail_review')->with(compact('detail_review', 'categories', 'logo' , 'all_brands'));
    }

    public function photoGallery(){
        $categories = Category::with('categories')->get();
        $photos = PhotoGallery::paginate(10);
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('gallery.gallery')->with(compact('categories', 'photos', 'logo', 'all_brands'));
    }

    public function about()
    {
        $categories = Category::with('categories')->get();
        $about = About::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        //return response()->json($about);
        return view('about')->with(compact('about', 'categories', 'logo', 'all_brands'));
    }

    //NEWS
    public function news()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $news = News::orderBy('created_at', 'asc')->paginate(16);
        $metanews = News::first();
        $all_brands = Brand::get();
        return view('news.short_news')->with(compact('news', 'categories', 'metanews', 'logo', 'all_brands'));
    }

    public function newsDetails($headline=null)
    {
        $categories = Category::with('categories')->get();
        $detail_news =News::where(['headline'=>$headline])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('news.detail_news')->with(compact('detail_news', 'categories', 'logo', 'all_brands'));
    }

    //Contact
    public function contact()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('contact')->with(compact('categories', 'logo','all_brands'));
    }

    /*public function storeMessage(Request $request)
    {
        $msg = new Contact();
        $msg->name = $request->name;
        $msg->message = $request->msg;

        $msg->save();
        return redirect()->back()->with('flash_message_success', 'Your Message has been Sent!!');
    }*/

    /*public function search()
    {
        $categories = Category::with('categories')->get();
        $brands = Brand::all();
        $text = $_GET['query'];
        $bikes = Bike::where('bike_name', 'LIKE', '%'.$text.'%')->get();
        $logo = Logo::first();

        return view('bikes.search')->with(compact('categories', 'bikes', 'brands', 'logo'));
    }*/

    public function compare()
    {
        $categories = Category::with('categories')->get();
        $bikes = Bike::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('compare')->with(compact('categories', 'bikes', 'logo', 'all_brands'));
    }

    public function comparison()
    {
        $categories = Category::with('categories')->get();

        $bikeOne = $_GET['bike1'];
        $bikeTwo = $_GET['bike2'];

        $bikeOneDetails = Bike::where(['id'=>$bikeOne])->first();
        $bikeTwoDetails = Bike::where(['id'=>$bikeTwo])->first();

        //$bikeOneSpecs = FullSpac::where(['bike_id'=>$bikeOneDetails->id])->first();
        //$bikeTwoSpecs = FullSpac::where(['bike_id'=>$bikeTwoDetails->id])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();


        //return response()->json([[$bikeOne, $bikeTwo], [$bikeOneSpecs->bike_id, $bikeTwoSpecs->bike_id]]);
        return view('comparison')->with(compact('categories', 'bikeOneDetails', 'bikeTwoDetails', 'logo', 'all_brands'));
    }

    public function accList()
    {
        $categories = Category::with('categories')->get();
        $data = Accessories::paginate(16);
        $logo = Logo::first();
        $all_brands = Brand::get();

        return view('accessories.acc_list')->with(compact('categories', 'data', 'logo', 'all_brands'));
    }

    public function accDetails($url)
    {
        $categories = Category::with('categories')->get();
        $data = Accessories::where(['url'=>$url])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();

        return view('accessories.acc_details')->with(compact('categories', 'data', 'logo', 'all_brands'));
    }

    public function showroom()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $data = Showroom::paginate(6);
        $all_brands = Brand::get();
        return view('show.show_list')->with(compact('data', 'logo', 'categories', 'all_brands'));
    }

    public function showroomDetails($id)
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $details = Showroom::where(['id'=>$id])->first();
        $all_brands = Brand::get();
        return view('show.show_details')->with(compact('details', 'logo', 'categories', 'all_brands'));
    }

    public function allBrand()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();

        $brandss = Brand::orderBy('id', 'desc')->paginate(12);
        $all_brands = Brand::get();

        return view('accessories.brand_list')->with(compact('categories', 'logo', 'brandss', 'all_brands'));
    }
}
