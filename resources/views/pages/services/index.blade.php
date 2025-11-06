@extends('layouts.services')

@section('content')

      <h2>
        
      </h2>

      <br/>

    <section id="home_main_content">
        <div class="container">
            <!-- <div class="four columns">
                <h2>Services</h2>
                <p>High specification and quality materials, all expertly fitted. Create the best look for your business inside and out.</p>
            </div> -->
            
            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.social-media-adverts') !!}">
                        <img 
                            width="1600" 
                            height="539"                       
                            data-src="/headers/social-media-adverts.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" alt 
                            decoding="async" 
                            data-srcset="/headers/social-media-adverts.jpg 1600w, /headers/social-media-adverts.jpg 768w" 
                            data-sizes="(max-width: 1600px) 100vw, 1600px" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/539;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-magenta">
                    <a href="{!! route('services.social-media-adverts') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-magenta.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Social Media
                    </h3>
                    <p>
                        A social media advert is any paid post or campaign a business runs on a social platform &#8230; <a href="{!! route('services.social-media-adverts') !!}">
                            <br/>
                            Read More &nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.indoor-branding') !!}">
                        <img 
                            width="1600" 
                            height="568"                       
                            data-src="/headers/indoor-branding.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="exterior sign mounted on red brick wall" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/568;"
                            >
                    </a>
                </div>
                
                <div class="featureblock-magenta">
                    <a href="{!! route('services.indoor-branding') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-magenta.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Indoor Branding
                    </h3>
                    <p>
                        Indoor branding is the use of visual and creative materials inside a building to enhance &#8230; 
                        <a href="{!! route('services.indoor-branding') !!}">
                            <br/>
                            Read More &nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.roll-up-banners') !!}">
                        <img 
                            width="1600" 
                            height="568"                       
                            data-src="/headers/roll-up-banners.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="wood and chalkboard POS sign on pavement" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/568;"
                            >
                    </a>
                </div>
                
                <div class="featureblock-magenta">
                    <a href="{!! route('services.roll-up-banners') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-magenta.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Roll up Banners
                    </h3>
                    <p>
                        Roll-up banners are portable, vertical display stands used for advertising, branding&#8230; 
                        <a href="{!! route('services.roll-up-banners') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>
        
            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.outdoor-branding') !!}">
                        <img 
                            width="1600" 
                            height="568"                       
                            data-src="/headers/outdoor-branding.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="large format printing wrap around three internal walls" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/568;"
                            >
                    </a>
                </div>
                
                <div class="featureblock-magenta">
                    <a href="{!! route('services.outdoor-branding') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-magenta.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Outdoor Branding
                    </h3>
                    <p>
                        Outdoor branding is the promotion of a brand through visible displays and advertisements&#8230; 
                        <a href="{!! route('services.outdoor-branding') !!}">
                            <br/>
                            Read More &nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.smiley-living-spaces') !!}">
                        <img width="805" height="284" 
                        data-src="/headers/smiley-living-spaces.jpg" 
                        class="attachment-full size-full wp-post-image lazyload" 
                        alt="large format printing wrap around three internal walls" 
                        decoding="async" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 805px; --smush-placeholder-aspect-ratio: 805/284;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-yellow">
                    <a href="{!! route('services.smiley-living-spaces') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Smiley Living Spaces
                    </h3>
                    <p>
                        Smiley Living Spaces is a concept that focuses on creating positive, comfortable&#8230; 
                        <a href="{!! route('services.smiley-living-spaces') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.logos') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/logos.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-yellow">
                    <a href="{!! route('services.logos') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Logos
                    </h3>
                    <p>
                        Logo design is the process of creating a unique visual symbol or mark that represents a&#8230; 
                        <a href="{!! route('services.logos') !!}">
                            <br/>    
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.promo-give-aways') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/promo-give-aways.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-yellow">
                    <a href="{!! route('services.promo-give-aways') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Promo Give Aways
                    </h3>
                    <p>
                        Promo giveaways (short for promotional giveaways) are free branded items or gifts&#8230;
                        <a href="{!! route('services.promo-give-aways') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.drinkwares') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/drinkwares.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-yellow">
                    <a href="{!! route('services.drinkwares') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Drinkwares
                    </h3>
                    <p>
                        Drinkware design and decoration is the art of designing and branding cups, bottles, mugs&#8230; 
                        <a href="{!! route('services.drinkwares') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.canvas-and-crafts') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/canvas-and-crafts.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-blue">
                    <a href="{!! route('services.canvas-and-crafts') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-blue.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Canvas and Crafts
                    </h3>
                    <p>
                        Canvas and crafts involve designing and creating decorative or artistic items by hand&#8230; 
                        <a href="{!! route('services.canvas-and-crafts') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.desk-and-accessories') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/desk-and-accessories.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-blue">
                    <a href="{!! route('services.desk-and-accessories') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-blue.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Desk and Accessories
                    </h3>
                    <p>
                        Desk and accessories design is the art of designing office desks, desktop&#8230; 
                        <a href="{!! route('services.desk-and-accessories') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.apparels-and-textiles') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/apparels-and-textiles.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-blue">
                    <a href="{!! route('services.apparels-and-textiles') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-blue.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Apparels and Textiles
                    </h3>
                    <p>
                        Apparel and textile design is about creating and styling fabrics and clothing that&#8230; 
                        <a href="{!! route('services.apparels-and-textiles') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.custom-branded-merchandise') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/custom-made.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-blue">
                    <a href="{!! route('services.custom-branded-merchandise') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-blue.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Custom Merchandise
                    </h3>
                    <p>
                        Custom branded merchandise means creating everyday items with a company’s logo, design&#8230; 
                        <a href="{!! route('services.custom-branded-merchandise') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.health-and-safety') !!}">
                        <img 
                            width="1600" 
                            height="567"                       
                            data-src="/headers/health-and-safety.jpg" 
                            class="attachment-full size-full wp-post-image lazyload" 
                            alt="Shallow depth of field image of a printer using a loupe to check text" 
                            decoding="async" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/567;"
                        >
                    </a>
                </div>
                
                <div class="featureblock-blue">
                    <a href="{!! route('services.health-and-safety') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-blue.png" 
                            alt="white magnifying glass on blue background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Health and Safety
                    </h3>
                    <p>
                        Health and safety signs are visual symbols used to communicate important information&#8230; 
                        <a href="{!! route('services.health-and-safety') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </section>

@endsection