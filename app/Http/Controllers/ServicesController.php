<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    /**
     * Retrieves the view for the index page of the 
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){

        $page_title = 'Services';
        $page_description = "This is the Services page";
        
        return view('index', compact('page_title', 'page_description'));
    }

    public function socialMediaAdverts(){

        $page_title = 'Social Media Adverts';
        $page_description = "This is the Social Media Adverts page";

        $service_tag = 'Social Media Adverts';
        $service_description = 'A social media advert is any paid post or campaign a business runs on a social platform to promote products, services, or ideas to targeted users.';

        $service_banner_image = '/wp-content/uploads/2013/11/business-stationery-printing-page-header.jpg';

        return view('pages.services.social-media-adverts', compact('page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'));
    }

    public function businessStationary(){

        $page_title = 'Business Stationary';
        $page_description = "This is the Business Stationary page";

        return view('pages.services.business-stationary', compact('page_title', 'page_description'));
    }

    public function exteriorSigns(){

        $page_title = 'Exterior Signs';
        $page_description = "This is the Exterior Signs page";

        return view('pages.services.exterior-signs', compact('page_title', 'page_description'));
    }

    public function industrialSigns(){

        $page_title = 'Industrial Signs';
        $page_description = "This is the Industrial Signs page";

        return view('pages.services.industrial-signs', compact('page_title', 'page_description'));
    }

    public function interiorSigns(){

        $page_title = 'Interior Signs';
        $page_description = "This is the Interior Signs page";

        return view('pages.services.interior-signs', compact('page_title', 'page_description'));
    }

    public function internalDecoration(){

        $page_title = 'Internal Decoration';
        $page_description = "This is the Internal Decoration page";

        return view('pages.services.internal-decoration', compact('page_title', 'page_description'));
    }

    public function lettersLogos(){

        $page_title = 'Letters and Logos';
        $page_description = "This is the Letters Logos page";

        return view('pages.services.letters-logos', compact('page_title', 'page_description'));
    }

    public function pointOfSale(){

        $page_title = 'Point Of Sale';
        $page_description = "This is the point of sale page";

        return view('pages.services.point-of-sale', compact('page_title', 'page_description'));
    }

    public function shopFrontSigns(){

        $page_title = 'Shop Front Signs';
        $page_description = "This is the Shop Front Signs page";

        return view('pages.services.shop-front-signs', compact('page_title', 'page_description'));
    }

    public function vehicleGraphics(){

        $page_title = 'Vehicle Graphics';
        $page_description = "This is the Vehicle Graphics page";

        return view('pages.services.vehicle-graphics', compact('page_title', 'page_description'));
    }

}