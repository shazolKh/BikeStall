<?php

namespace App\Http\Controllers;

use App\About;
use App\Bike;
use App\Brand;
use App\Category;
use App\Logo;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function belowThirty()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where('mileage','<=', '30')->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function thirtytofifty()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['mileage','>', '29'], ['mileage','<', '51']])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function fiftySeventy()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['mileage','>', '49'], ['mileage','<', '71']])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function Seventy()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where('mileage','>=', '70')->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function belowHun()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','<', 100]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function hunToTwn()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','>', 99], ['engine','<', 126]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function twentytofif()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','>', 124], ['engine','<', 151]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function oneftwohun()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','>', 149], ['engine','<', 201]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function twoTF()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','>', 199], ['engine','<', 251]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function twoFtof()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','>', 249], ['engine','<', 501]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'logo', 'all_brands', 'about'));
    }

    public function abovf()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['engine','>', 499]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'logo', 'all_brands', 'about'));
    }

    public function belowOne()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['price','<', 100000]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'logo', 'all_brands', 'about'));
    }

    public function belowTwo()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['price','>', 100000], ['price','<=', 200000]])->paginate(16);
        $brands = Brand::get();

        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function belowThree()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['price','>', 200000], ['price','<=', 300000]])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function belowFour()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['price','>', 300000], ['price','<=', 400000]])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        $about = About::first();

        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function aboveFive()
    {
        $categories = Category::with('categories')->get();
        //$br_name_details = Brand::where(['br_name'=>$br_name])->first();
        $bikes = Bike::orderBy('price','asc')->where([['price','>', 400000]])->paginate(16);
        $brands = Brand::get();
        $about = About::first();

        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('filters.mile_filter')->with(compact( 'bikes','categories','brands', 'logo', 'all_brands', 'about'));
    }

    public function search()
    {
        $categories = Category::with('categories')->get();
        $brands = Brand::all();
        $text = $_POST['query'];
        $bikes = Bike::where('bike_name', 'LIKE', '%'.$text.'%')->paginate(16);
        $logo = Logo::first();
        $about = About::first();

        $all_brands = Brand::get();

        return view('bikes.search')->with(compact('categories', 'bikes', 'brands', 'logo', 'all_brands', 'about'));
    }
}
