<?php

// Application routes...



Route::get( '/',    ['as' => 'home',    'uses' => 'HomeController@index']);
Route::get( 'home', ['as' => 'home',    'uses' => 'HomeController@index']);

Route::get( 'about', ['as' => 'about',  'uses' => 'HomeController@about']);
Route::get( 'testimonials',  ['as' => 'testimonials',   'uses' => 'HomeController@testimonials']);
Route::get( 'gallery',  ['as' => 'gallery',   'uses' => 'HomeController@gallery']);

Route::group(['prefix' => 'services'], function() {

    Route::get('/',                 ['as' => 'services.index',                  'uses' => 'ServicesController@index']);
    Route::get('graphic-design',    ['as' => 'services.graphic-design',       'uses' => 'ServicesController@graphicDesign']);
    Route::get('indoor-branding',   ['as' => 'services.indoor-branding',       'uses' => 'ServicesController@indoorBranding']);
    Route::get('outdoor-branding',  ['as' => 'services.outdoor-branding',       'uses' => 'ServicesController@outdoorBranding']);
    Route::get('signage',           ['as' => 'services.signage',            'uses' => 'ServicesController@signage']);
    Route::get('health-and-safety', ['as' => 'services.health-and-safety', 'uses' => 'ServicesController@healthAndSafety']);
    Route::get('promo-merchandise', ['as' => 'services.promo-merchandise', 'uses' => 'ServicesController@promoMerchandise']);
    Route::get('vehicle-branding',  ['as' => 'services.vehicle-branding', 'uses' => 'ServicesController@vehicleBranding']);
    Route::get('gallery',           ['as' => 'services.gallery', 'uses' => 'ServicesController@gallery']);

    Route::get('social-media-adverts', ['as' => 'services.social-media-adverts',       'uses' => 'ServicesController@socialMediaAdverts']);
    Route::get('indoor-branding', ['as' => 'services.indoor-branding',       'uses' => 'ServicesController@indoorBranding']);
    Route::get('outdoor-branding', ['as' => 'services.outdoor-branding',       'uses' => 'ServicesController@outdoorBranding']);
    Route::get('roll-up-banners', ['as' => 'services.roll-up-banners',       'uses' => 'ServicesController@rollUpBanners']);
    Route::get('smiley-living-spaces', ['as' => 'services.smiley-living-spaces',       'uses' => 'ServicesController@smileyLivingSpaces']);
    Route::get('logos', ['as' => 'services.logos',       'uses' => 'ServicesController@Logos']);
    Route::get('promo-give-aways', ['as' => 'services.promo-give-aways',       'uses' => 'ServicesController@promoGiveAways']);
    Route::get('drinkwares', ['as' => 'services.drinkwares',       'uses' => 'ServicesController@drinkwares']);
    Route::get('canvas-and-crafts', ['as' => 'services.canvas-and-crafts', 'uses' => 'ServicesController@canvasAndCrafts']);
    Route::get('desk-and-accessories', ['as' => 'services.desk-and-accessories', 'uses' => 'ServicesController@deskAndAccessories']);
    Route::get('apparels-and-textiles', ['as' => 'services.apparels-and-textiles', 'uses' => 'ServicesController@apparelsAndTextiles']);
    Route::get('custom-branded-merchandise', ['as' => 'services.custom-branded-merchandise', 'uses' => 'ServicesController@customBrandedMerchandise']);    

});


Route::get( 'contacts',                 ['as' => 'contacts',                        'uses' => 'HomeController@contacts']);
Route::post('contacts',                 ['as' => 'contactsPost',                    'uses' => 'HomeController@postContacts']);

Route::get('mail', 'HomeController@mail');
