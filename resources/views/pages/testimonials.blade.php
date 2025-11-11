@extends('layouts.services')

@section('content')

	<section id=main_content class=container>
		<article class="eleven columns">
			<p
				id=breadcrumbs><span><span><a
				href="{!! route('home') !!}" >Home</a></span> &raquo; <span><a
				href="#" >Services</a></span> &raquo; <span
				class=breadcrumb_last aria-current=page>{{ $service_tag }}</span></span></p>
			<h2>
				{{ $service_tag }}
			</h2>
			
			<!-- <p>
          Apparel and textile design is the art and process of creating clothing, fabrics, and fashion accessories by combining elements of style, color, pattern, and material. 
          <br>
          It involves designing both the fabric (textile design) and the final garments (apparel design) to meet functional, aesthetic, and cultural needs.
      </p> -->

			<div class="gallery-container">

        <iframe src="https://widgets.sociablekit.com/google-reviews/iframe/25620980" frameborder="0" width="100%" height="1000px">
        </iframe>

      </div>


		</article>

		@include('partials._sidebar')

	</section>

@endsection