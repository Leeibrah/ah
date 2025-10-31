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
                Canvas and crafts refer to creative works and handmade items made using materials such as canvas, fabric, paper, wood, or other craft supplies. 
                <br>
                This category often includes paintings, decorative art pieces, customized designs, and DIY creations used for decoration, gifting, or personal expression.
            </p>

			<div
				class="ngg-galleryoverview default-view
				ngg-ajax-pagination-none	"
				id=ngg-gallery-b2cb6e9aeab9d9b3bc36617b41a4c4b0-1>
				<div
					id=ngg-image-0 class="ngg-gallery-thumbnail-box
					"
					>
					<div
						class=ngg-gallery-thumbnail>
						<a
							href="../wp-content/gallery/business-stationery/printing01.jpg"
							title=" "
							data-src=https://www.signs-print.com/wp-content/gallery/business-stationery/printing01.jpg
							data-thumbnail=https://www.signs-print.com/wp-content/gallery/business-stationery/thumbs/thumbs_printing01.jpg
							data-image-id=56
							data-title=printing01
							data-description=" "
							data-image-slug=printing01
							class=nextgen_pro_lightbox data-nplmodal-gallery-id=b2cb6e9aeab9d9b3bc36617b41a4c4b0>
						<img
							title=printing01
							alt=printing01
							data-src=https://www.signs-print.com/wp-content/gallery/business-stationery/thumbs/thumbs_printing01.jpg
							width=190
							height=143
							style="--smush-placeholder-width: 190px; --smush-placeholder-aspect-ratio: 190/143;max-width:100%;"
							src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==" class=lazyload>
						</a>
					</div>
				</div>
				<br
					style="clear: both">
				<!-- <div
					class=slideshowlink>
					<a
						href="nggallery/slideshow.html">[Show slideshow]
					</a>
				</div> -->
				<div
					class=ngg-clear></div>
			</div>
		</article>

		@include('partials._sidebar')

	</section>

@endsection