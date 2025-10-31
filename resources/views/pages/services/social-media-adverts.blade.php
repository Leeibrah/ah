@extends('layouts.services')

@section('content')

	<section id=main_content class=container>
		<article
			class="eleven columns">
			<p
				id=breadcrumbs><span><span><a
				href="../index.html" >Home</a></span> &raquo; <span><a
				href="../case-studies/index.html" >Services</a></span> &raquo; <span
				class=breadcrumb_last aria-current=page>{{ $service_tag }}</span></span></p>
			<h2>
				{{ $service_tag }}
			</h2>
			<!-- <p>• Letterheads<br>
				• Cards<br>
				• Compliment Slips<br>
				• Invoices etc etc.
			</p>
			<p>We offer a very comprehensive spot and full colour print service, printing; letterheads, compliment slips, leaflets, business cards, business packs, tickets/function cards, duplicate invoice sets, labels, envelopes, booklets, brochures and draw tickets to name just a few.<br>
				Most of our work is produced on a free artwork basis, so whether you provide the artwork or you would like our designer to compose the artwork for you there will be no extra costs.
			</p>
			<p>&nbsp;</p>
			<h2>Posters</h2>
			<p>Large format full colour posters are becoming a lot more popular than the usual day-glow hand written posters that have the tendency to cheapen whatever product it is that you are advertising and due to this popularity the price of large format prints are becoming more competitive. Here at sign and print we believe that we have the best priced and best designed posters around.</p>
			<p>This form of print out is also ideal for exhibition stands, foyer posters, and product item posters, where we can photograph a product and literally enlarge it to any size upto a metre in width.<br>
				We can copy a standard leaflet or design that you have already or we can work from the usual scraps of paper and the odd photograph to make one of the best eye-catching forms of visual displays available.<br>
				We can produce A4, A3, A2, A1 and A0 posters by any length on a standard matt paper or high gloss photo finish paper. We can also mount and laminate the finished product.
			</p>
			<p>&nbsp;</p>
			<h2>
				Artwork &amp; Design
			</h2>
			<p>
				From a small yellow pages advert to a full colour brochure design our qualified designers are on hand to produce the image you require to suit your current style, or if you require a new image we can assist you find the design you need.
			</p>
			<p>
				Currently the most popular form of printing is done by the small business at home on desktop pc’s and printers, but most people find they just can’t get that professional look to their output, if this sounds familiar let us know and we’ll give you a price on professionally producing the look that you require.
			</p>
			<p>
				If it&#8217;s just the artwork that you require to be produced so you can print yourself or whether you are a printer and would like to use our design service, we are compatible with most pc and mac software packages including; photoshop, illustrator, indesign, and coreldraw
			</p> -->


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