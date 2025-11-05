@extends('layouts.services')

@section('content')
	
	<section
        id=main_content class=container>
        <div class="eleven columns">
            <p id=breadcrumbs>
                <span>
                    <span>
                        <a href="index.html">
                            Home
                        </a>
                    </span> &raquo; 
                    <span class=breadcrumb_last aria-current=page>
                        {{ $service_tag }}
                    </span>
                </span>
            </p>

            <p>
                Arrowhead, we are a ONE-STOP PRINTSHOP committed towards offering custom branding solutions from design concepts through production to the final branded media.
                <br>
                May it be a Logo, Flyers, Brochures, Posters, billboards, 3D signs images content for social media we are up for the task.
                <br>
                We guarantee to deliver customized advertisement media that will reflects your brand identity to connect with your target audience.
            </p>

            <div class="gallery-container">

              <div class="gallery-grid">
                
                <div class="gallery-item"><img src="/img/image003.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image004.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image005.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image006.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image008.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image009.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image011.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image013.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image014.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image015.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image016.jpg" alt="Gallery Image"></div>

                
                <div class="gallery-item"><img src="/img/image018.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image019.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image020.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image021.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image023.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image024.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image025.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image026.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image027.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image028.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image029.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image032.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image033.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image034.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image035.jpg" alt="Gallery Image"></div>
                

                
                <div class="gallery-item"><img src="/img/image045.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image052.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image047.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image048.jpg" alt="Gallery Image"></div>

                
                <div class="gallery-item"><img src="/img/image050.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image051.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image053.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image054.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image055.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image056.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image058.jpg" alt="Gallery Image"></div>

                
                <div class="gallery-item"><img src="/img/image001.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image043.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image039.jpg" alt="Gallery Image"></div>
                

                
                <div class="gallery-item"><img src="/img/image036.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image037.jpg" alt="Gallery Image"></div>
                
                <!-- Long images -->
                
                <div class="gallery-item"><img src="/img/image040.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image041.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image042.jpg" alt="Gallery Image"></div>
                
                <div class="gallery-item"><img src="/img/image044.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image046.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image049.jpg" alt="Gallery Image"></div>

                <div class="gallery-item"><img src="/img/image002.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image007.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image010.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image012.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image017.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image030.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image031.jpg" alt="Gallery Image"></div>
                <div class="gallery-item"><img src="/img/image038.jpg" alt="Gallery Image"></div>
              </div>
            </div>

            <!-- Lightbox Modal -->
            <div class="lightbox" id="lightbox">
              <span class="close" id="lightboxClose">&times;</span>
              <button class="prev" id="prevBtn">&#10094;</button>
              <img id="lightboxImg" src="" alt="Expanded Image">
              <button class="next" id="nextBtn">&#10095;</button>
            </div>
        </div>
        
        @include('partials._sidebar')

    </section>

@endsection