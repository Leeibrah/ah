@extends('layouts.services')

@section('content')

	<section id=main_content class=container>
		<article
			class="eleven columns">
			<p
				id=breadcrumbs><span><span><a
				href="{!! route('home') !!}" >Home</a></span> &raquo; <span><a
				href="#" >Services</a></span> &raquo; <span
				class=breadcrumb_last aria-current=page>{{ $service_tag }}</span></span></p>
			<h2>
				{{ $service_tag }}
			</h2>
			
			<p>
                Drinkware design and decoration refers to the creation and customization of beverage containers—such as mugs, bottles, glasses, and tumblers—using creative designs, logos, colors, or artwork to enhance their appearance and reflect a brand, event, or personal style.
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
		</article>

		@include('partials._sidebar')

	</section>

@endsection