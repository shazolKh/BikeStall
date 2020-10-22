<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'IndexController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('category/bikes/{ct_name}','BikeController@bikes');
Route::get('subcategory/bike/{sub_ct_name}','IndexController@sub_cat_Bikes');

Route::get('/brands/{br_name}','IndexController@bike_br');
Route::get('bike/details/{bike_name}', 'IndexController@bikeDetails');

//Reviews
Route::get('reviews/', 'IndexController@reviews');
Route::get('review/details/{title}', 'IndexController@reviewsDetails');

//Gallery
Route::get('photo-gallery/', 'IndexController@photoGallery');



//About
Route::get('about/', 'IndexController@about');

//News
Route::get('news/', 'IndexController@news');
Route::get('news/details/{headline}', 'IndexController@newsDetails');

//Contact
Route::get('contact/','IndexController@contact');
Route::post('send-message/', 'IndexController@storeMessage');

//Filters
    //Mileage
Route::get('/filter/mileage/under-30', 'FilterController@belowThirty');
Route::get('/filter/mileage/30-to-50', 'FilterController@thirtytofifty');
Route::get('/filter/mileage/50-to-70', 'FilterController@fiftySeventy');
Route::get('/filter/mileage/above-70', 'FilterController@Seventy');

    //Displacement
Route::get('/filter/displacement/under-100', 'FilterController@belowHun');
Route::get('/filter/displacement/100-to-125', 'FilterController@hunToTwn');
Route::get('/filter/displacement/125-to-150', 'FilterController@twentytofif');
Route::get('/filter/displacement/150-to-200', 'FilterController@oneftwohun');
Route::get('/filter/displacement/200-to-250', 'FilterController@twoTF');
Route::get('/filter/displacement/250-to-500', 'FilterController@twoFtof');
Route::get('/filter/displacement/above-500', 'FilterController@abovf');

    //Price
Route::get('/filter/price/under-1lac', 'FilterController@belowOne');
Route::get('/filter/price/1lac-to-2lacs', 'FilterController@belowTwo');
Route::get('/filter/price/2lacs-to-3lacs', 'FilterController@belowThree');
Route::get('/filter/price/3lacs-to-4lacs', 'FilterController@belowFour');
Route::get('/filter/price/above-4lacs', 'FilterController@aboveFive');


Route::get('/search', 'IndexController@search');
Route::match(['get', 'post'], '/compare', 'IndexController@compare');
Route::get('comparison', 'IndexController@comparison');



//Admin Panel Start
Route::match(['get', 'post'], '/admin', 'AdminController@login');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::match(['get', 'post'], '/admin/update_password', 'AdminController@update_pass');

    // Category
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');
    Route::get('/admin/view-category', 'CategoryController@viewCategory');
    Route::get('/admin/delete-cat-image/{id}', 'CategoryController@deleteImage');

    // Sub Category
    Route::match(['get', 'post'], '/admin/add-sub-category', 'SubCategoryController@addsubCategory');
    Route::match(['get', 'post'], '/admin/edit-sub-category/{id}', 'SubCategoryController@editsubCategory');
    Route::match(['get', 'post'], '/admin/delete-sub-category/{id}', 'SubCategoryController@deletesubCategory');
    Route::get('/admin/view-sub-category', 'SubCategoryController@viewsubCategory');
    Route::get('/admin/delete-sub-cat-image/{id}', 'SubCategoryController@deleteImage');

    // Brand
    Route::match(['get', 'post'], '/admin/add-brand', 'BrandController@addBrand');
    Route::match(['get', 'post'], '/admin/edit-brand/{id}', 'BrandController@editBrand');
    Route::get('/admin/view-brand', 'BrandController@viewBrand');
    Route::match(['get', 'post'], '/admin/delete-brand/{id}', 'BrandController@deleteBrand');
    Route::get('/admin/delete-brand-image/{id}', 'BrandController@deleteImage');

    //Bikes
    Route::match(['get', 'post'], '/admin/add-bike', 'BikeController@addBike');
    Route::match(['get', 'post'], '/admin/edit-bike/{id}', 'BikeController@editBike');
    Route::get('/admin/view-bike', 'BikeController@viewBike');

    //---------Bike Image
    Route::get('/admin/delete-image/{id}', 'BikeController@deleteImage');
    Route::get('/admin/delete-image1/{id}', 'BikeController@deleteImage1');
    Route::get('/admin/delete-image2/{id}', 'BikeController@deleteImage2');
    Route::get('/admin/delete-image3/{id}', 'BikeController@deleteImage3');

    // --------- delete bike
    Route::get('/admin/delete-bike/{id}', 'BikeController@deleteBike');

    //Full Specification
    Route::match(['get', 'post'], '/admin/add-specification/{id}', 'FullSpacController@addSpec');
    Route::match(['get', 'post'], 'admin/view-edit-specification/{id}', 'FullSpacController@view_editSpec');
    Route::get('/admin/delete-specs/{id}', 'FullSpacController@delSpecs');
    Route::get('/admin/delete-specs/', 'FullSpacController@delSpecsp');

    //News
    Route::match(['get', 'post'],'/admin/add-news/', 'NewsController@addNews');
    Route::get('/admin/view-news/', 'NewsController@news');
    Route::match(['get', 'post'],'/admin/edit-news/{id}', 'NewsController@editNews');
    Route::get('/admin/delete-news-image/{id}','NewsController@deleteImage');
    Route::get('/admin/delete-news/{id}', 'NewsController@deleteNews');

    //Reviews
    Route::match(['get', 'post'],'/admin/write-review/', 'AdminReviewController@writeReview');
    Route::get('/admin/all-reviews/', 'AdminReviewController@allReviews');
    Route::match(['get', 'post'],'/admin/edit-review/{id}', 'AdminReviewController@editReview');
    Route::get('/admin/delete-review/{id}','AdminReviewController@deleteReview');
    //---------image delete
    Route::get('/admin/delete-image1/{id}', 'AdminReviewController@deleteImage1');
    Route::get('/admin/delete-image2/{id}', 'AdminReviewController@deleteImage2');
    Route::get('/admin/delete-image3/{id}', 'AdminReviewController@deleteImage3');

    //Gallery
    Route::get('/admin/image-gallery', 'GalleryController@index');
    Route::post('/admin/image-gallery', 'GalleryController@upload');
    Route::delete('/admin/image-gallery/{id}', 'GalleryController@destroy');

    //Photo gallery
    Route::get('/admin/photo-gallery', 'NewsController@photoIndex');
    Route::post('/admin/photo-gallery', 'NewsController@photoUpload');
    Route::delete('/admin/photo-gallery/{id}', 'NewsController@photoDestroy');

    //Comment
    Route::get('/admin/viewers-reviews', 'CommentController@showComments');
    Route::get('/admin/delete-comment/{id}', 'CommentController@deleteComments');
    Route::get('/admin/publish-comment/{id}', 'CommentController@publishComments');

    //About
    Route::match(['get', 'post'],'/admin/add-about/', 'AboutController@addAbout');
    Route::get('/admin/view-about/', 'AboutController@about');
    Route::match(['get', 'post'],'/admin/edit-about/{id}', 'AboutController@editAbout');
    Route::get('/admin/delete-about-image/{id}','AboutController@deleteImage');

    //Comments/User Review
    Route::post('user-review/{id}', 'CommentController@storeComment');


});
//Route::get('comments/{id}', 'IndexController@showedComment');
//Admin Panel End

Route::get('/logout', 'AdminController@logout');
