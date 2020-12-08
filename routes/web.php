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
use Illuminate\Support\Facades\URL;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'IndexController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('category/bikes/{ct_name}','BikeController@bikes');
Route::get('subcategory/bike/{sub_ct_name}','IndexController@sub_cat_Bikes');

Route::get('/brands/{url}','IndexController@bike_br');
Route::match(['get', 'post'],'/bike/{url}/', 'IndexController@bikeDetails')->name('bike.details');

//Reviews
Route::get('all/reviews/', 'IndexController@reviews')->name('review.list');
Route::get('review/details/{url}', 'IndexController@reviewsDetails');
Route::get('/reviews/{id}', 'IndexController@reviewsSingle')->name('single.reviews');

//Gallery
Route::get('photo/gallery/', 'IndexController@photoGallery')->name('ph.gallery');

//
//Route::get('/', 'IndexController@header');



//About
Route::get('about/', 'IndexController@about');

//News
Route::get('news/', 'IndexController@news')->name('news.list');
Route::get('news/details/{url}', 'IndexController@newsDetails');

//Contact
Route::get('contact/','IndexController@contact');
//Route::post('send-message/', 'IndexController@storeMessage');

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


Route::post('/search', 'FilterController@search')->name('search');
Route::match(['get', 'post'], '/compare', 'IndexController@compare');
Route::get('comparison', 'IndexController@comparison');

// Accessories
Route::get('/accessories', 'IndexController@accList')->name('accessories.list');
Route::get('accessories/details/{url}', 'IndexController@accDetails');
Route::get('/accessories/{id}', 'IndexController@accSingle')->name('single.acc');

//Brand List
Route::get('all-brands', 'IndexController@allBrand')->name('brand.list');

//ShowRoom
Route::get('showroom', 'IndexController@showroom')->name('all.showroom');
Route::get('showroom/{id}', 'IndexController@showroomDetails')->name('show.details');



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

    //Accessories
    Route::match(['get', 'post'], '/admin/add-accessories', 'AccessoriesController@addAccessories');
    Route::match(['get', 'post'], '/admin/edit-accessories/{id}', 'AccessoriesController@editAccessories');
    Route::match(['get', 'post'], '/admin/delete-accessories/{id}', 'AccessoriesController@deleteAccessories');
    Route::get('/admin/view-accessories', 'AccessoriesController@viewAccessories');

    Route::get('/admin/accessories/delete-image/{id}', 'AccessoriesController@deleteAImage');
    Route::get('/admin/accessories/delete-image1/{id}', 'AccessoriesController@deleteAImage1');
    Route::get('/admin/accessories/delete-image2/{id}', 'AccessoriesController@deleteAImage2');

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
    Route::get('/admin/image1-delete/{id}', 'AdminReviewController@deleteImage1');
    Route::get('/admin/image2/-delete{id}', 'AdminReviewController@deleteImage2');
    Route::get('/admin/image3-delete/{id}', 'AdminReviewController@deleteImage3');

    //Gallery
    Route::get('/admin/image-gallery', 'GalleryController@index');
    Route::post('/admin/image-gallery', 'GalleryController@upload');
    Route::delete(/*['get', 'post'],*/'/admin/image-gallery/{id}', 'GalleryController@destroy');

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
    Route::get('/admin/delete-search-image/{id}','AboutController@deleteSearchImage');



    Route::match(['get', 'post'], 'add-logo', 'LogoController@addLogo')->name('add.logo');
    Route::get('manage-logo', 'LogoController@manageLogo')->name('manage.logo');
    Route::match(['get', 'post'],'edit-logo/{id}', 'LogoController@editLogo')->name('edit.logo');
    Route::get('delete-logo/{id}', 'LogoController@deleteLogo')->name('delete.logo');

    //Showroom
    Route::match(['get', 'post'], 'add-showroom', 'ShowroomController@addShowroom')
        ->name('add.showroom');
    Route::get('manage-showroom', 'ShowroomController@manageShowroom')
        ->name('manage.showroom');
    Route::match(['get', 'post'], 'edit-showroom/{id}', 'ShowroomController@editShowroom')
        ->name('edit.showroom');
    Route::get('delete-showroom-image', 'ShowroomController@deleteShowroomImage')
        ->name('delete.showroom.image');
    Route::get('delete-showroom', 'ShowroomController@deleteShowroom')
        ->name('delete.showroom');

    //Accessories Category
    Route::match(['get', 'post'], 'add-accessories-category', 'CategoryController@addAccCategory')
        ->name('add.acc.cate');
    Route::match(['get', 'post'], 'manage-accessories-category', 'CategoryController@manageAccCategory')
        ->name('manage.acc.cate');
    Route::match(['get', 'post'], 'edit-accessories-category/{id}', 'CategoryController@editAccCategory')
        ->name('edit.acc.cate');
    Route::match(['get', 'post'], 'delete-accessories-category/{id}', 'CategoryController@deleteAccCategory')
        ->name('delete.acc.cate');


    //Reviews Category
    Route::match(['get', 'post'], 'add-reviews-category', 'CategoryController@addReviewCategory')
        ->name('add.review.cate');
    Route::match(['get', 'post'], 'manage-reviews-category', 'CategoryController@manageReviewCategory')
        ->name('manage.review.cate');
    Route::match(['get', 'post'], 'edit-reviews-category/{id}', 'CategoryController@editReviewCategory')
        ->name('edit.review.cate');
    Route::match(['get', 'post'], 'delete-reviews-category/{id}', 'CategoryController@deleteReviewCategory')
        ->name('delete.review.cate');

});
//Route::get('comments/{id}', 'IndexController@showedComment');
//Admin Panel End

//Comments/User Review
Route::post('user-review/{id}', 'CommentController@storeComment');

Route::get('/logout', 'AdminController@logout');

Route::fallback(function (){
    return redirect('/');
});

//URL::forceScheme('https');
