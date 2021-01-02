<?php

namespace App\Http\Controllers;

use App\About;
use App\Accessories;
use App\AccessoriesCategory;
use App\AdminReview;
use App\Bike;
use App\Brand;
use App\Category;
use App\Comment;
use App\Gallery;
use App\Logo;
use App\News;
use App\PhotoGallery;
use App\ReviewsCategory;
use App\Showroom;
use App\SubCategory;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index()
    {
        //slider
        $slider = Gallery::get();
        //brands
        $brands = Brand::with('brands')->limit(5)->get();

        //bikes
        $bikes = Bike::orderBy('id', 'DESC')->paginate(16);
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
        $news = News::orderBy('id', 'DESC')->limit(4)->get();

        $reviews = AdminReview::orderBy('id','DESC')->limit(4)->get();

        $logo = Logo::first();

        $all_brands = Brand::get();
        $about = About::first();

        //return view
        return view('index')->with(compact('brands', 'slider', 'bikes','news', 'reviews', 'categories',
            'logo', 'all_brands', 'about'));
    }

    public function sub_cat_Bikes($sub_ct_name = null)
    {
        $categories = Category::with('categories')->get();
        $subcategoryDetails = SubCategory::where(['sub_ct_name'=>$sub_ct_name])->first();
        $allBikes = Bike::orderBy('price','asc')->where(['sub_category_id'=>$subcategoryDetails->id])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('bikes.sub_category')->with(compact('subcategoryDetails', 'allBikes','categories',
            'brands', 'logo', 'all_brands', 'about'));
    }

    public function bike_br($url=null)
    {
        $categories = Category::with('categories')->get();
        $br_name_details = Brand::where(['url'=>$url])->first();
        $bikes = Bike::orderBy('price','asc')->where(['brand_id'=>$br_name_details->id])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('bikes.bike_brand')->with(compact('br_name_details', 'bikes','categories','brands',
            'logo', 'all_brands', 'about'));
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
            ->where('url', '!=', $url)->limit(4)->get();

        $all_brands = Brand::get();
        $about = About::first();

        //return response()->json($related);

        return view('bikes.bike_details')->with(compact('categories', 'bk_details', 'brand', 'com', 'logo',
        'related', 'all_brands', 'about'));
    }

    public function reviews()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $reviews_cate = ReviewsCategory::get();
        $reviews = AdminReview::orderBy('id','DESC')->paginate(10);
        foreach ($reviews as $datum=>$val){
            $cate_name = ReviewsCategory::where(['id'=>$val->category_id])->first();
            $reviews[$datum]->cat_name = $cate_name->name;
        }
        $metareviews = AdminReview::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('reviews.short_reviews')->with(compact('reviews', 'categories', 'metareviews', 'logo',
        'all_brands', 'about', 'reviews_cate'));
    }

    public function reviewsSingle($id)
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $reviews_cate = ReviewsCategory::get();
        $reviews = AdminReview::orderBy('id','DESC')->where(['category_id'=>$id])->paginate(10);
        foreach ($reviews as $datum=>$val){
            $cate_name = ReviewsCategory::where(['id'=>$val->category_id])->first();
            $reviews[$datum]->cat_name = $cate_name->name;
        }
        $metareviews = AdminReview::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('reviews.short_reviews')->with(compact('reviews', 'categories', 'metareviews', 'logo',
            'all_brands', 'about', 'reviews_cate'));
    }

    public function reviewsDetails($url)
    {
        $categories = Category::with('categories')->get();
        $detail_review =AdminReview::where(['url'=>$url])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $related = AdminReview::orderBy('id', 'DESC')->where('url', '!=', $url)->limit(4)->get();
        $about = About::first();
        //return response()->json($detail_review);
        return view('reviews.detail_review')->with(compact('detail_review', 'categories', 'logo' ,
            'all_brands', 'related', 'about'));
    }

    public function photoGallery(){
        $categories = Category::with('categories')->get();
        $photos = PhotoGallery::paginate(10);
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('gallery.gallery')->with(compact('categories', 'photos', 'logo', 'all_brands', 'about'));
    }

    public function about()
    {
        $categories = Category::with('categories')->get();
        $about = About::first();
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
        $news = News::orderBy('id', 'DESC')->paginate(16);
        $metanews = News::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('news.short_news')->with(compact('news', 'categories', 'metanews', 'logo', 'all_brands', 'about'));
    }

    public function newsDetails($url=null)
    {
        $categories = Category::with('categories')->get();
        $detail_news =News::where(['url'=>$url])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        //Related
        $related = News::orderBy('id', 'DESC')->where('url', '!=', $url)->limit(4)->get();

        return view('news.detail_news')->with(compact('detail_news', 'categories', 'logo', 'all_brands', 'related', 'about'));
    }

    //Contact
    public function contact()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('contact')->with(compact('categories', 'logo','all_brands', 'about'));
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
        $about = About::first();
        return view('compare')->with(compact('categories', 'bikes', 'logo', 'all_brands', 'about'));
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
        $about = About::first();


        //return response()->json([[$bikeOne, $bikeTwo], [$bikeOneSpecs->bike_id, $bikeTwoSpecs->bike_id]]);
        return view('comparison')->with(compact('categories', 'bikeOneDetails', 'bikeTwoDetails', 'logo', 'all_brands', 'about'));
    }

    public function accList()
    {
        $categories = Category::with('categories')->get();
        $acc_cate = AccessoriesCategory::get();
        $data = Accessories::orderBy('id', 'DESC')->paginate(16);
        foreach ($data as $datum=>$val){
            $cate_name = AccessoriesCategory::where(['id'=>$val->category_id])->first();
            $data[$datum]->cat_name = $cate_name->name;
        }
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('accessories.acc_list')->with(compact('categories', 'data', 'logo', 'all_brands', 'about', 'acc_cate'));
    }

    public function accSingle($id)
    {
        $categories = Category::with('categories')->get();
        $acc_cate = AccessoriesCategory::get();
        $data = Accessories::orderBy('id', 'DESC')->where(['category_id'=>$id])->paginate(16);
        foreach ($data as $datum=>$val){
            $cate_name = AccessoriesCategory::where(['id'=>$val->category_id])->first();
            $data[$datum]->cat_name = $cate_name->name;
        }
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('accessories.acc_list')->with(compact('categories', 'data', 'logo', 'all_brands', 'about', 'acc_cate'));

    }

    public function accDetails($url)
    {
        $categories = Category::with('categories')->get();
        $data = Accessories::where(['url'=>$url])->first();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('accessories.acc_details')->with(compact('categories', 'data', 'logo', 'all_brands', 'about'));
    }

    public function showroom()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $data = Showroom::orderBy('id', 'DESC')->paginate(16);
        $all_brands = Brand::get();
        $about = About::first();
        return view('show.show_list')->with(compact('data', 'logo', 'categories', 'all_brands', 'about'));
    }

    public function showroomDetails($name)
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();
        $details = Showroom::where(['name'=>$name])->first();
        $all_brands = Brand::get();
        $about = About::first();
        return view('show.show_details')->with(compact('details', 'logo', 'categories', 'all_brands', 'about'));
    }

    public function allBrand()
    {
        $categories = Category::with('categories')->get();
        $logo = Logo::first();

        $brandss = Brand::orderBy('id', 'DESC')->paginate(12);
        $all_brands = Brand::get();
        $about = About::first();

        return view('accessories.brand_list')->with(compact('categories', 'logo', 'brandss', 'all_brands', 'about'));
    }
}
