<?php

namespace App\Http\Controllers;

use App\Logo;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Bike;
use App\Brand;
use App\Category;
use App\FullSpac;
use Intervention\Image\Facades\Image;

class BikeController extends Controller
{
    public function addBike(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $bike = new Bike;

            $request->validate([
                'scategory_id' => 'required',
                'brand_id' => 'required',
                'bike_name' => 'required',
                'url' => 'required | unique:bikes',

                /*'bike_image' => 'required | mimes:jpeg,jpg,png, PNG',
                'bike_image1' => 'required | mimes:jpeg,jpg,png, PNG',
                'bike_image2' => 'required | mimes:jpeg,jpg,png, PNG',
                'bike_image3' => 'required | mimes:jpeg,jpg,png, PNG',*/
            ]);

            if (empty($data['category_id'])){
                return redirect()->back()->with('flash_message_error', 'Category not found!!');
            }
            $bike->category_id = $data['category_id'];
            $bike->sub_category_id = $data['scategory_id'];
            $bike->brand_id = $data['brand_id'];
            $bike->bike_name = $data['bike_name'];
            $bike->url = $data['url'];
            $bike->bike_model = $data['bike_model'];
            $bike->bike_color = $data['bike_color'];
            $bike->Engine = $data['bike_engine'];
            $bike->mileage = $data['mile'];
            $bike->description = $data['description'];
            $bike->price = $data['bike_price'];
            $bike->price_comma =$data['price_comma'];
            $bike->youtube_link = $data['yt_video'];

            //Full Specs
            $bike->engine_type = $data['engine_type'];
            //$bike->displacement = $data['displacement'];
            $bike->max_power = $data['max_power'];
            $bike->max_torque = $data['max_torque'];
            $bike->top_speed = $data['top_speed'];
            $bike->bore = $data['bore'];
            $bike->stroke = $data['stroke'];
            $bike->carburetor = $data['carburetor'];
            $bike->compression_ratio = $data['compression_ratio'];
            $bike->cooling = $data['cooling'];
            $bike->start_method = $data['start_method'];
            $bike->ignition = $data['ignition'];
            $bike->start_method = $data['start_method'];
            $bike->ignition = $data['ignition'];
            $bike->gears = $data['gears'];
            $bike->clutch = $data['clutch'];
            $bike->overall_length = $data['overall_length'];
            $bike->overall_width = $data['overall_width'];
            $bike->overall_height = $data['overall_height'];
            $bike->saddle_height = $data['saddle_height'];
            $bike->wheel_base = $data['wheel_base'];
            $bike->ground_clearance = $data['ground_clearance'];
            $bike->fuel_tank_cap = $data['fuel_tank_cap'];
            $bike->kerb_weight = $data['kerb_weight'];
            $bike->front_suspension = $data['front_suspension'];
            $bike->back_suspension = $data['back_suspension'];
            $bike->front_break = $data['front_break'];
            $bike->rear_break = $data['rear_break'];
            $bike->abs = $data['abs'];
            $bike->front_tyre = $data['front_tyre'];
            $bike->back_tyre = $data['back_tyre'];
            $bike->front_wheel = $data['front_wheel'];
            $bike->rear_wheel = $data['rear_wheel'];
            $bike->battery = $data['battery'];
            $bike->head_lamp = $data['head_lamp'];
            $bike->tail_lamp = $data['tail_lamp'];
            $bike->turn_signal_lamp = $data['turn_signal_lamp'];
            $bike->pilot_lamp = $data['pilot_lamp'];
            $bike->pass_light = $data['pass_light'];
            $bike->odometer = $data['odometer'];
            $bike->speedometer = $data['speedometer'];
            $bike->signal_light = $data['signal_light'];
            $bike->status = $data['status'];

            //Upload Image
            $image_temp = $request->file('bike_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/images/image/large_image/'.$filename);
                $medium_image_path = public_path('image/images/image/medium_image/'.$filename);
                $small_image_path = public_path('image/images/image/small_image/'.$filename);

                Image::make($image_temp)->save($large_image_path);
                Image::make($image_temp)->resize(600,600)->save($medium_image_path);
                Image::make($image_temp)->resize(300,300)->save($small_image_path);

                $bike->image = $filename;
            }

            // Image1
            $image_temp1 = $request->file('bike_image1');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;

                $large_image_path1 = public_path('image/images/image1/large_image/'.$filename1);
                $medium_image_path1 = public_path('image/images/image1/medium_image/'.$filename1);
                $small_image_path1 = public_path('image/images/image1/small_image/'.$filename1);

                Image::make($image_temp1)->save($large_image_path1);
                Image::make($image_temp1)->resize(600,600)->save($medium_image_path1);
                Image::make($image_temp1)->resize(300,300)->save($small_image_path1);

                $bike->image1 = $filename1;
            }

            //Image 2
            $image_temp2 = $request->file('bike_image2');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename2 = rand(111, 999999).'.'.$extension2;

                $large_image_path2 = public_path('image/images/image2/large_image/'.$filename2);
                $medium_image_path2 = public_path('image/images/image2/medium_image/'.$filename2);
                $small_image_path2 = public_path('image/images/image2/small_image/'.$filename2);

                Image::make($image_temp2)->save($large_image_path2);
                Image::make($image_temp2)->resize(600,600)->save($medium_image_path2);
                Image::make($image_temp2)->resize(300,300)->save($small_image_path2);

                $bike->image2 = $filename2;
            }

            //Image 3
            $image_temp3 = $request->file('bike_image3');
            if ($image_temp3){
                $extension3 = $image_temp3->getClientOriginalExtension();
                $filename3 = rand(111, 999999).'.'.$extension3;

                $large_image_path3 = public_path('image/images/image3/large_image/'.$filename3);
                $medium_image_path3 = public_path('image/images/image3/medium_image/'.$filename3);
                $small_image_path3 = public_path('image/images/image3/small_image/'.$filename3);

                Image::make($image_temp3)->save($large_image_path3);
                Image::make($image_temp3)->resize(600,600)->save($medium_image_path3);
                Image::make($image_temp3)->resize(300,300)->save($small_image_path3);

                $bike->image3 = $filename3;
            }

            $bike->save();
            return redirect()->back()->with('flash_message_success', 'Bike added successfully');
        }


       $categories = Category::get();
        $categories_dropdown = "<option selected disabled> </option>";
        foreach ($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->ct_name."</option>";
            //$sub_categories = Category::where(['parent_id'=>$cat->id])->get();

            //foreach ($sub_categories as $sub_cat){
              //  $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->ct_name."</option>";
           //}
        }

        $brand = Brand::get();
        $brand_dropdown = "<option selected disabled> </option>";
        foreach ($brand as $br){
            $brand_dropdown .= "<option value='".$br->id."'>".$br->br_name."</option>";
        }

        $sbrand = SubCategory::get();
        $sbrand_dropdown = "<option selected disabled> </option>";
        foreach ($sbrand as $br){
            $sbrand_dropdown .= "<option value='".$br->id."'>".$br->sub_ct_name."</option>";
        }

        return view('admin.bikes.add_bike')->with(compact('categories_dropdown', 'brand_dropdown', 'sbrand_dropdown'));
    }

    public function viewBike()
    {
        $bikes = Bike::orderBy('id', 'asc')->get();

        foreach ($bikes as $bike=>$val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $bikes[$bike]->ct_name = $category_name->ct_name;

            $brand_name = Brand::where(['id'=>$val->brand_id])->first();
            $bikes[$bike]->br_name = $brand_name->br_name;

            $sub_cat_name = SubCategory::where(['id'=>$val->sub_category_id])->first();
            $bikes[$bike]->sub_ct_name = $sub_cat_name->sub_ct_name;
        }

        /*
        $name = DB::table('bikes')
            ->join('categories','bikes.category_id', '=','categories.id')
            ->join('brands', 'bikes.brand_id', '=','brands.id')
            ->select('bikes.*', 'categories.ct_name', 'brands.br_name')->first();
        */

        return view('admin.bikes.view_bike')->with(compact('bikes'));
    }

    public function editBike(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            //Update Image
            $image_temp = $request->file('bike_image');
            if ($image_temp){
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(111, 999999).'.'.$extension;

                $large_image_path = public_path('image/images/image/large_image/'.$filename);
                $medium_image_path = public_path('image/images/image/medium_image/'.$filename);
                $small_image_path = public_path('image/images/image/small_image/'.$filename);

                Image::make($image_temp)->save($large_image_path);
                Image::make($image_temp)->resize(600,600)->save($medium_image_path);
                Image::make($image_temp)->resize(300,300)->save($small_image_path);
            }else{
                $filename = $data['current_image'];
            }

            //Update Image1
            $image_temp1 = $request->file('bike_image1');
            if ($image_temp1){
                $extension1 = $image_temp1->getClientOriginalExtension();
                $filename1 = rand(111, 999999).'.'.$extension1;

                $large_image_path1 = public_path('image/images/image1/large_image/'.$filename1);
                $medium_image_path1 = public_path('image/images/image1/medium_image/'.$filename1);
                $small_image_path1 = public_path('image/images/image1/small_image/'.$filename1);

                Image::make($image_temp1)->save($large_image_path1);
                Image::make($image_temp1)->resize(600,600)->save($medium_image_path1);
                Image::make($image_temp1)->resize(300,300)->save($small_image_path1);
            }else{
                $filename1 = $data['current_image1'];
            }

            //Update Image2
            $image_temp2 = $request->file('bike_image2');
            if ($image_temp2){
                $extension2 = $image_temp2->getClientOriginalExtension();
                $filename2 = rand(111, 999999).'.'.$extension2;

                $large_image_path2 = public_path('image/images/image2/large_image/'.$filename2);
                $medium_image_path2 = public_path('image/images/image2/medium_image/'.$filename2);
                $small_image_path2 = public_path('image/images/image2/small_image/'.$filename2);

                Image::make($image_temp2)->save($large_image_path2);
                Image::make($image_temp2)->resize(600,600)->save($medium_image_path2);
                Image::make($image_temp2)->resize(300,300)->save($small_image_path2);
            }else{
                $filename2 = $data['current_image2'];
            }

            //Update Image3
            $image_temp3 = $request->file('bike_image3');
            if ($image_temp3){
                $extension3 = $image_temp3->getClientOriginalExtension();
                $filename3 = rand(111, 999999).'.'.$extension3;

                $large_image_path3 = public_path('image/images/image3/large_image/'.$filename3);
                $medium_image_path3 = public_path('image/images/image3/medium_image/'.$filename3);
                $small_image_path3 = public_path('image/images/image3/small_image/'.$filename3);

                Image::make($image_temp3)->save($large_image_path3);
                Image::make($image_temp3)->resize(600,600)->save($medium_image_path3);
                Image::make($image_temp3)->resize(300,300)->save($small_image_path3);
            }else{
                $filename3 = $data['current_image3'];
            }

            /*if (empty($filename)){
                $request->validate([
                    'bike_image' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }

            if (empty($filename1)){
                $request->validate([
                    'bike_image1' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }

            if (empty($filename2)){
                $request->validate([
                    'bike_image2' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }

            if (empty($filename2)){
                $request->validate([
                    'bike_image3' => 'required | mimes:jpeg,jpg,png, PNG',
                ]);
            }*/


            Bike::where(['id'=>$id])->update(['category_id'=>$data['category_id'], 'bike_name'=>$data['bike_name'],
                'url'=>$data['url'], 'brand_id'=>$data['brand_id'], 'bike_model'=>$data['bike_model'],
                'bike_color'=>$data['bike_color'], 'Engine'=>$data['bike_engine'], 'mileage'=>$data['mile'],
                'youtube_link'=>$data['yt_link'], 'description'=>$data['description'], 'price'=>$data['bike_price'], 'price_comma' => $data['price_comma'],
                'image'=>$filename, 'image1'=>$filename1, 'image2'=>$filename2, 'image3'=>$filename3,
                'engine_type'=>$data['engine_type'], 'max_power' => $data['max_power'], 'max_torque' => $data['max_torque'],
                'top_speed' => $data['top_speed'], 'bore' => $data['bore'], 'stroke' => $data['stroke'],
                'carburetor' => $data['carburetor'], 'compression_ratio' => $data['compression_ratio'], 'cooling' => $data['cooling'],
                'start_method' => $data['start_method'], 'ignition' => $data['ignition'], 'gears' => $data['gears'],
                'clutch' => $data['clutch'], 'overall_length' => $data['overall_length'], 'overall_width' => $data['overall_width'],
                'overall_height' => $data['overall_height'], 'saddle_height' => $data['saddle_height'], 'wheel_base' => $data['wheel_base'],
                'ground_clearance' => $data['ground_clearance'], 'fuel_tank_cap' => $data['fuel_tank_cap'], 'kerb_weight' => $data['kerb_weight'],
                'front_suspension' => $data['front_suspension'], 'back_suspension' => $data['back_suspension'],
                'front_break' => $data['front_break'], 'rear_break' => $data['rear_break'], 'abs' => $data['abs'],
                'front_tyre' => $data['front_tyre'], 'back_tyre' => $data['back_tyre'], 'front_wheel' => $data['front_wheel'],
                'rear_wheel' => $data['rear_wheel'], 'battery' => $data['battery'], 'head_lamp' => $data['head_lamp'],
                'tail_lamp' => $data['tail_lamp'], 'turn_signal_lamp' => $data['turn_signal_lamp'], 'pilot_lamp' => $data['pilot_lamp'],
                'pass_light' => $data['pass_light'], 'odometer' => $data['odometer'], 'speedometer' => $data['speedometer'],
                'signal_light' => $data['signal_light'], 'status' => $data['status']]);

            return redirect()->back()->with('flash_message_success', 'Details Updated successfully');

        }


        //get bike details
        $bikeDetails = Bike::where(['id'=>$id])->first();

        $categories = Category::get();
        $categories_dropdown = "<option selected disabled> </option>";
        foreach ($categories as $cat){
            if ($cat->id==$bikeDetails->category_id){
                $selected = "selected";
            }
            else{
                $selected ="";
            }
            $categories_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->ct_name."</option>";
            /*$sub_categories = Category::where(['parent_id'=>$cat->id])->get();

            foreach ($sub_categories as $sub_cat){
                if ($sub_cat->id==$bikeDetails->category_id){
                    $selected = "selected";
                }
                else{
                    $selected ="";
                }
                $categories_dropdown .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->ct_name."</option>";
            }*/
        }

        $brand = Brand::get();
        $brand_dropdown = "<option selected disabled> </option>";
        foreach ($brand as $br){
            if ($br->id==$bikeDetails->brand_id){
                $selected = "selected";
            }
            else{
                $selected ="";
            }
            $brand_dropdown .= "<option value='".$br->id."' ".$selected.">".$br->br_name."</option>";
        }

        return view('admin.bikes.edit_bike')->with(compact('bikeDetails', 'categories_dropdown', 'brand_dropdown'));
    }

    public function deleteImage($id=null)
    {
        $news = Bike::where(['id'=>$id])->first();
        $image = $news->image;
        unlink(public_path('image/images/image/large_image/'.$image));
        unlink(public_path('image/images/image/medium_image/'.$image));
        unlink(public_path('image/images/image/small_image/'.$image));
        Bike::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }

    public function deleteImage1($id=null)
    {
        $news = Bike::where(['id'=>$id])->first();
        $image1 = $news->image1;
        unlink(public_path('image/images/image1/large_image/'.$image1));
        unlink(public_path('image/images/image1/medium_image/'.$image1));
        unlink(public_path('image/images/image1/small_image/'.$image1));
        Bike::where(['id'=>$id])->update(['image1'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
    public function deleteImage2($id=null)
    {
        $news = Bike::where(['id'=>$id])->first();
        $image2 = $news->image2;
        unlink(public_path('image/images/image2/large_image/'.$image2));
        unlink(public_path('image/images/image2/medium_image/'.$image2));
        unlink(public_path('image/images/image2/small_image/'.$image2));
        Bike::where(['id'=>$id])->update(['image2'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }
    public function deleteImage3($id=null)
    {
        $news = Bike::where(['id'=>$id])->first();
        $image3 = $news->image3;
        unlink(public_path('image/images/image3/large_image/'.$image3));
        unlink(public_path('image/images/image3/medium_image/'.$image3));
        unlink(public_path('image/images/image3/small_image/'.$image3));
        Bike::where(['id'=>$id])->update(['image3'=>'']);
        return redirect()->back()->with('flash_message_success', 'Image has been Deleted');
    }

    public function deleteBike($id=null)
    {
        $news = Bike::where(['id'=>$id])->first();

        $image = $news->image;
        if (!empty($image)){
            unlink('public/image/images/image/large_image/'.$image);
            unlink('public/image/images/image/medium_image/'.$image);
            unlink('public/image/images/image/small_image/'.$image);
        }

        $image1 = $news->image1;
        if (!empty($image1)){
            unlink('public/image/images/image1/large_image/'.$image1);
            unlink('public/image/images/image1/medium_image/'.$image1);
            unlink('public/image/images/image1/small_image/'.$image1);
        }

        $image2 = $news->image2;
        if (!empty($image2)){
            unlink('public/image/images/image2/large_image/'.$image2);
            unlink('public/image/images/image2/medium_image/'.$image2);
            unlink('public/image/images/image2/small_image/'.$image2);
        }

        $image3 = $news->image3;
        if (!empty($image3)){
            unlink('public/image/images/image3/large_image/'.$image3);
            unlink('public/image/images/image3/medium_image/'.$image3);
            unlink('public/image/images/image3/small_image/'.$image3);
        }

        FullSpac::where(['bike_id'=>$id])->delete();
        Bike::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error', 'Bike has been Deleted');
    }

    //Frontend-------

    public function bikes($ct_name=null)
    {
        $categories = Category::with('categories')->get();
        $categoryDetails = Category::where(['ct_name'=>$ct_name])->first();
        $allBikes = Bike::where(['category_id'=>$categoryDetails->id])->paginate(16);
        $brands = Brand::get();
        $logo = Logo::first();
        $all_brands = Brand::get();
        return view('bikes.category')->with(compact('categoryDetails', 'allBikes','categories','brands',
            'logo', 'all_brands'));
    }

}
