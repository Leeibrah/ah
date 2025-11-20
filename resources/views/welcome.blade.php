@extends('layouts.front')

@section('content')

    <section id="intro-block">
        <img 
            decoding="async" id="side-graphic" 
            alt="abstract cubist graphic" 
            data-src="https://www.signs-print.com/wp-content/themes/signs-print/images/layout/side-graphic.png" 
            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" class="lazyload" 
            style="--smush-placeholder-width: 165px; --smush-placeholder-aspect-ratio: 165/560;"
        >
        
        <div class="container">
            <div class="eight columns">
                <h2>Welcome</h2>
                <!-- <p>
                    Sign &amp; Print are a long established Derbyshire based company working from industrial workshops in Ripley, catering for small businesses through to large multi-nationals with the same focus on turnaround and quality. Our immediate catchment area is <em class="blue">Ripley, Belper, Matlock, Alfreton, Somercotes, Selston, Heanor, Kilburn, Derby</em> and surrounding locations and have many projects completed in all these areas.
                </p> -->
                <p>
                    Arrowhead, we are a ONE-STOP PRINTSHOP committed towards offering custom branding solutions from design concepts through production to the final branded media.
                    <br>
                    May it be a Logo, Flyers, Brochures, Posters, billboards, 3D signs images content for social media we are up for the task.
                    <br>
                    We guarantee to deliver customized advertisement media that will reflects your brand identity to connect with your target audience.
                </p>
                <!-- <a class="button" href="{!! route('services.index') !!}">View Services</a> -->
            </div>
            
            <div class="eight columns">
                <h2>Who We Are</h2>
                <!-- <p>Headed by fully trained and time served sign graphic designer and sign manufacturer, we have produced many signs and vehicle signs for a broad spectrum of clients for the past 20 years. Regularly updating and moving with technology in order to keep servicing the same clients and attracting new clients by recommendation &amp; original design. High specification and quality materials, all expertly fitted.</p> -->
                <p>
                    Born out of passion, driven by talent and perfected with training & experience.
                    <br><br>
                    We bring your ideas to life by transforming your concept into eye catching and persuasive designs then evolve them into advertising media of your choice.
                </p>
                <a class="button magenta" href="{!! route('about') !!}">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="twelve columns">
            <h2>Services</h2>
            <p>High specification and quality materials, all expertly fitted. Create the best look for your business inside and out.</p>
        </div>
    </div>

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
                        Graphic design is the art of creating visual content to communicate messages/ideas effectively.&#8230; <a href="{!! route('services.graphic-design') !!}">
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
                        Signage in design refers to the creation and use of visual graphics, symbols&#8230; 
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
                        Health and safety signs are visual symbols used to communicate important information&#8230; 
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
                        Gallery design refers to the planning and arrangement of a space to display artwork&#8230; 
                        <a href="{!! route('services.gallery') !!}">
                            <br/>
                            Read More&nbsp;&raquo;
                        </a>
                    </p>
                </div>
            </div>
            
            <!-- <div class="four columns">
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
            </div> -->

            <!-- <div class="four columns">
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
            </div> -->
        </div>
    </section>

    <section>
        <div class="container">
            <div class="sixteen columns">
                <hr>
            </div>
        </div>
    </section>

    <section id="case-study">
        <div class="container">
            <div class="eight columns">
                <a href="#l">
                    <img 
                        data-src="advertising.png" 
                        alt="case study photo" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" class="lazyload" 
                        style="--smush-placeholder-width: 580px; --smush-placeholder-aspect-ratio: 580/356;"
                    >
                </a>
            </div>
            
            <div class="eight columns" style="margin-top: -40px;">
                <h2>Importance of Advertising</h2>
                <h3>Start Today by Sharing a Referral Code</h3>
                <form action="{!! route('referralPost') !!}" method=post 
                    class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                    {!! csrf_field() !!}
                    
                    <div
                        class=row>
                        <div
                            class="three columns alpha">
                        
                            <p>
                                Email
                                <span class=gold_text>*</span>
                                <br>
                                <span class=wpcf7-form-control-wrap data-name=email>
                                    <input
                                        size=40 
                                        maxlength=100 
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" 
                                        aria-required=true 
                                        aria-invalid=false 
                                        value 
                                        type=email 
                                        name="email"
                                    >
                                </span>
                            </p>
                        </div>
                
                        <div
                            class="three columns alpha">
                            <p>
                                Select Referrer<span
                                    class=gold_text>*</span><br>
                                <span
                                    class=wpcf7-form-control-wrap data-name=ServiceRequired>
                                    <select
                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required=true aria-invalid=false name=ref>
                                        <option
                                            value>&#8212;Please choose an option&#8212;</option>
                                        <option
                                            value="MEDIXA">MEDIXA</option>
                                        <option
                                            value="RNTeflon">RNTeflon</option>
                                        
                                    </select>
                                </span>
                            </p>
                        </div>
          
                        <div class="two columns alpha" style="margin-top: 3%;">
              
                            <p>
                                <button class="wpcf7-form-control wpcf7-submit has-spinner" type="submit">Submit</button>
                            </p>
                        </div>
                    </div>
                    <div
                        class=wpcf7-response-output aria-hidden=true>
                    </div>
                </form>
                <!-- <div class="form-container">
                    <form class="referral-form">

                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>Select Referrer*</label>
                            <select>
                                <option>—Please choose an option—</option>
                                <option>Facebook</option>
                                <option>Instagram</option>
                                <option>Website</option>
                                <option>Friend</option>
                            </select>
                        </div>

                        <button type="submit" class="submit-btn">SUBMIT</button>
                    </form>
                </div> -->

                <!-- <a href="#l" class="button">
                Read More</a> -->

                @if(isset($email))                
                    <div class="referral-box">
                        <label>Share your referral link</label>

                        <div class="input-row">
                            <input type="text" id="referralLink" value="https://www.arrowheadprintshop.com/?email={{$email}}&ref={{$ref}}" readonly>
                            <button class="copy-btn" id="copyBtn">Copy Link</button>
                        </div>

                        <!-- <div class="copy-box">
                            <label>Share your referral link</label>
                            <div class="copy-wrapper">
                                <input type="text" id="referralLink" value="https://www.arrowheadprintshop.com/?email={{$email}}&ref={{$ref}}">
                                <button id="copyBtn">COPY LINK</button>
                            </div>
                        </div> -->

                        <div class="share-buttons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.arrowheadprintshop.com/?email={{$email}}&ref={{$ref}}" target="_blank">
                                <button class="btn fb">Share on Facebook</button>    
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=https://www.arrowheadprintshop.com/?ref={{$ref}}&text=Get your design and printing done at Arrow Head Design and Printshop." target="_blank">
                                <button class="btn x">Share on X</button>    
                            </a>
                            <a href="mailto:?subject=Arrow Head Design and Printshop&amp;body=Get your design and printing done at Arrow Head Design and Printshop https://www.arrowheadprintshop.com.">
                                <button class="btn mail">Share via Email</button>    
                            </a>
                            
                            <!-- <button class="btn messenger">Share via Facebook Messenger</button> -->
                        </div>

                        <p class="terms">By sharing the referral link you agree to the terms.</p>
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection