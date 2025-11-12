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
                    <a href="{!! route('services.graphic-design') !!}">
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
                    <a href="{!! route('services.graphic-design') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-magenta.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Graphic Design
                    </h3>
                    <p>
                        Graphic design is the art of creating visual content to communicate messages&#8230; <a href="{!! route('services.graphic-design') !!}">
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
                        Indoor branding is the use of visual and creative materials inside a building&#8230; 
                        <a href="{!! route('services.indoor-branding') !!}">
                            <br/>
                            Read More &nbsp;&raquo;
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
                        Outdoor branding is the promotion of a brand through visible displays&#8230; 
                        <a href="{!! route('services.outdoor-branding') !!}">
                            <br/>
                            Read More &nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.signage') !!}">
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
                
                <div class="featureblock-magenta">
                    <a href="{!! route('services.signage') !!}">
                        <img 
                        data-src="/wp-content/themes/signs-print/images/layout/magglass-magenta.png" 
                        alt="white magnifying glass on blue background" 
                        class="magglass lazyload" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                        style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Signage
                    </h3>
                    <p>
                        Signage in design refers to the creation and use of visual graphics&#8230; 
                        <a href="{!! route('services.signage') !!}">
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
                
                <div class="featureblock-yellow">
                    <a href="{!! route('services.health-and-safety') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                            alt="white magnifying glass on yellow background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Health and Safety
                    </h3>
                    <p>
                        Health and safety signs are visual symbols used to communicate important&#8230; 
                        <a href="{!! route('services.health-and-safety') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.promo-merchandise') !!}">
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
                    <a href="{!! route('services.promo-merchandise') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                            alt="white magnifying glass on yellow background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Promo Merchandise
                    </h3>
                    <p>
                        Promo merchandises are free branded items or gifts&#8230; 
                        <a href="{!! route('services.promo-merchandise') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.vehicle-branding') !!}">
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
                
                <div class="featureblock-yellow">
                    <a href="{!! route('services.vehicle-branding') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                            alt="white magnifying glass on yellow background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Vehicle Branding
                    </h3>
                    <p>
                        Vehicle branding is the process of applying custom graphics&#8230; 
                        <a href="{!! route('services.vehicle-branding') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

            <div class="four columns">
                <div class="featureimage">
                    <a href="{!! route('services.gallery') !!}">
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
                    <a href="{!! route('services.gallery') !!}">
                        <img 
                            data-src="/wp-content/themes/signs-print/images/layout/magglass-yellow.png" 
                            alt="white magnifying glass on yellow background" 
                            class="magglass lazyload" 
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" 
                            style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;"
                        >
                    </a>
                    <h3>
                        Gallery
                    </h3>
                    <p>
                        Gallery design refers to the planning and arrangement of a space to display&#8230; 
                        <a href="{!! route('services.gallery') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </section>

@endsection