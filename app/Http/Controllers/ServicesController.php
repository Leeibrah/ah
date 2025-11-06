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

        $service_tag = 'Services';
        $service_description = 'All Services for Arrow Head Design & Printshop.';

        $service_banner_image = '/headers/roll-up-banners.png';
        
        return view('pages.services.index', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function socialMediaAdverts(){

        $page_title = 'Social Media Adverts';
        $page_description = "This is the Social Media Adverts page";

        $service_tag = 'Social Media Adverts';
        $service_description = 'A social media advert is any paid post or campaign a business runs on a social platform to promote products, services, or ideas to targeted users.';

        $service_banner_image = '/headers/social-media-adverts.png';

        return view('pages.services.social-media-adverts', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function indoorBranding(){

        $page_title = 'Indoor Branding';
        $page_description = "This is the Indoor Branding page";

        $service_tag = 'Indoor Branding';
        $service_description = 'Indoor branding is the use of visual and creative materials inside a building to enhance brand visibility, communicate messages, and create a memorable experience for visitors or customers.';

        $service_banner_image = '/headers/indoor-branding.png';

        return view('pages.services.indoor-branding', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function outdoorBranding(){

        $page_title = 'Outdoor Branding';
        $page_description = "This is the Outdoor Branding page";

        $service_tag = 'Outdoor Branding';
        $service_description = 'Outdoor branding is the promotion of a brand through visible displays and advertisements placed outside, such as billboards, banners, vehicle wraps, and signage, to reach a broad audience in public spaces.';

        $service_banner_image = '/headers/outdoor-branding.png';

        return view('pages.services.outdoor-branding', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function rollUpBanners(){

        $page_title = 'Roll Up Banners';
        $page_description = "This is the Roll Up Banners page";

        $service_tag = 'Roll Up Banners';
        $service_description = 'Roll-up banners are portable, vertical display stands used for advertising, branding, and presentations at events, shops, offices, or exhibitions.';

        $service_banner_image = '/headers/roll-up-banners.png';

        return view('pages.services.roll-up-banners', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function smileyLivingSpaces(){

        $page_title = 'Smiley Living Spaces';
        $page_description = "This is the Smiley Living Spaces page";

        $service_tag = 'Smiley Living Spaces';
        $service_description = 'Smiley Living Spaces is a concept that focuses on creating positive, comfortable, and emotionally uplifting environments where people feel relaxed, happy, and connected.';

        $service_banner_image = '/headers/smiley-living-spaces.png';

        return view('pages.services.smiley-living-spaces', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function Logos(){

        $page_title = 'Logos';
        $page_description = "This is the Logos page";

        $service_tag = 'Logos';
        $service_description = 'Logo design is the process of creating a unique visual symbol or mark that represents a brand, company, product, or service.';

        $service_banner_image = '/headers/logos.png';

        return view('pages.services.logos', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function promoGiveAways(){

        $page_title = 'Promo Give Aways';
        $page_description = "This is the Promo Give Aways page";

        $service_tag = 'Promo Give Aways';
        $service_description = 'Promo giveaways (short for promotional giveaways) are free branded items or gifts distributed by a company to promote its products, services, or brand awareness.';

        $service_banner_image = '/headers/promo-give-aways.png';

        return view('pages.services.promo-give-aways', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function drinkwares(){

        $page_title = 'Drinkwares';
        $page_description = "This is the Drinkwares page";

        $service_tag = 'Drinkwares';
        $service_description = 'Drinkware design and decoration is the art of designing and branding cups, bottles, or mugs to make them more attractive, personalized, or promotional.';

        $service_banner_image = '/headers/drinkwares.png';

        return view('pages.services.drinkwares', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function canvasAndCrafts(){

        $page_title = 'Canvas and Crafts';
        $page_description = "This is the Canvas and Crafts page";

        $service_tag = 'Canvas and Crafts';
        $service_description = 'Canvas and crafts involve designing and creating decorative or artistic items by hand, often using canvas and other craft materials to produce unique, creative works.';

        $service_banner_image = '/headers/canvas-and-crafts.png';

        return view('pages.services.canvas-and-crafts', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function deskAndAccessories(){

        $page_title = 'Desk and Accessories';
        $page_description = "This is the Desk and Accessories page";

        $service_tag = 'Desk and Accessories';
        $service_description = 'Desk and accessories design is the art of designing and personalizing office desks and desktop items to make workspaces more organized, attractive, and brand-aligned.';

        $service_banner_image = '/headers/desk-and-accessories.png';

        return view('pages.services.desk-and-accessories', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function apparelsAndTextiles(){

        $page_title = 'Apparels and Textiles';
        $page_description = "This is the Apparels and Textiles page";

        $service_tag = 'Apparels and Textiles';
        $service_description = 'Apparel and textile design is about creating and styling fabrics and clothing that are both visually appealing and practical for everyday or promotional use.';

        $service_banner_image = '/headers/apparels-and-textiles.png';

        return view('pages.services.apparels-and-textiles', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function customBrandedMerchandise(){

        $page_title = 'Custom Branded Merchandise';
        $page_description = "This is the Custom Branded Merchandise page";

        $service_tag = 'Custom Branded Merchandise';
        $service_description = 'Custom branded merchandise means creating everyday items with a company’s logo or design to promote its brand in a practical and memorable way.';

        $service_banner_image = '/headers/custom-branded-merchandise.png';

        return view('pages.services.custom-branded-merchandise', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

    public function healthAndSafety(){

        $page_title = 'Health and Safety';
        $page_description = "This is the Health and Safety page";

        $service_tag = 'Health and Safety';
        $service_description = 'Health and safety signs are visual indicators or symbols used to communicate important information about potential hazards, safety instructions, or emergency procedures within a workplace or public area.';

        $service_banner_image = '/headers/health-and-safety.png';

        return view('pages.services.health-and-safety', compact(
            'page_title', 'page_description', 'service_tag', 'service_description', 'service_banner_image'
        ));
    }

}