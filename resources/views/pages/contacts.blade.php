@extends('layouts.pages')

@section('content')

    <section
        id=slideshow_container>
        <div
            id=slideshow>
            <div
                id=slides>
                <section
                    id=slide-1>
                    <iframe
                        data-src="https://www.google.com/maps?q=Thika+Town,+Kenya&hl=en&z=13&output=embed"
                        src="https://www.google.com/maps?q=Thika+Town,+Kenya&hl=en&z=13&output=embed"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <h1>Contact Arrow Head design & Printshop</h1>
                    <p>Get in touch with Arrow Head design & Printshop to discuss your project or talk through your requirements and we'll be happy to help with your ideas.</p>
                </section>
            </div>

            @include('partials._number')
        </div>
    </section>
    <section
        id=contact_page class=container>
        <div
            class="eleven columns">
            <p
                id=breadcrumbs><span><span><a
                href="/" >Home</a></span> &raquo; <span
                class=breadcrumb_last aria-current=page>Contact Arrow Head Design & Printshop</span></span></p>
            <p>
            <h2>Get in touch</h2>
            <br>
            <p>If you have a specific project that you&#8217;d like to talk about, simply fill in your details below giving as much information as possible. We will endeavour to get back to you as soon as we read your completed enquiry. Also if you&#8217;ve got some feedback on our site or just want to say hello please feel free. You can also connect with us directly by email, phone or through our facebook page.</p>
            </p>
            <div
                class="wpcf7 no-js" id=wpcf7-f92-p43-o1 lang=en-US dir=ltr>
                <div
                    class=screen-reader-response>
                    <p
                        role=status aria-live=polite aria-atomic=true></p>
                    <ul></ul>
                </div>
                <form action="{!! route('contactsPost') !!}" method=post class="wpcf7-form init" aria-label="Contact form" novalidate=novalidate data-status=init>
                    {!! csrf_field() !!}
                    
                    <div
                        style="display: none;">
                        <input
                            type=hidden name=_wpcf7 value=92>
                        <input
                            type=hidden name=_wpcf7_version value=5.9.8>
                        <input
                            type=hidden name=_wpcf7_locale value=en_US>
                        <input
                            type=hidden name=_wpcf7_unit_tag value=wpcf7-f92-p43-o1>
                        <input
                            type=hidden name=_wpcf7_container_post value=43>
                        <input
                            type=hidden name=_wpcf7_posted_data_hash value>
                        <input
                            type=hidden name=_wpcf7_recaptcha_response value>
                    </div>
                    <div
                        class=row>
                        <div
                            class="five columns alpha">
                            <p>Name<span
                                class=gold_text>*</span><br>
                                <span class=wpcf7-form-control-wrap data-name=your-name>
                                    <input
                                    size=40 
                                    maxlength=400 
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required=true 
                                    aria-invalid=false 
                                    value 
                                    type=text 
                                    name=name
                                    >
                                </span>
                            </p>
                            <p>Email<span class=gold_text>*</span><br>
                                <span class=wpcf7-form-control-wrap data-name=email>
                                    <input
                                        size=40 
                                        maxlength=400 
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" 
                                        aria-required=true 
                                        aria-invalid=false 
                                        value 
                                        type=email 
                                        name=your-email>
                                    </span>
                            </p>
                        </div>
                        <div
                            class="six columns omega">
                            <p>Company Name<span
                                class=gold_text></span><br>
                                <span
                                    class=wpcf7-form-control-wrap 
                                    data-name=companyname><input
                                    size=40 
                                    maxlength=400 
                                    class="wpcf7-form-control wpcf7-text" 
                                    aria-invalid=false 
                                    value 
                                    type=text 
                                    name=companyname></span>
                            </p>
                            <p>Telephone<span
                                class=gold_text>*</span><br>
                                <span
                                    class=wpcf7-form-control-wrap 
                                    data-name=telephone><input
                                    size=40 
                                    maxlength=400 
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required=true 
                                    aria-invalid=false 
                                    value 
                                    type=text 
                                    name=telephone>
                                </span>
                            </p>
                        </div>
                        <div
                            class="five columns alpha">
                            <p>
                                Service Required (please select)<span
                                    class=gold_text>*</span><br>
                                <span
                                    class=wpcf7-form-control-wrap data-name=ServiceRequired>
                                    <select
                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required=true aria-invalid=false name=ServiceRequired>
                                        <option
                                            value>&#8212;Please choose an option&#8212;</option>
                                        <option
                                            value="Vehicle Graphics">Vehicle Graphics</option>
                                        <option
                                            value="Shop Front Signs">Shop Front Signs</option>
                                        <option
                                            value="Industrial Signs">Industrial Signs</option>
                                        <option
                                            value="Interior Signs">Interior Signs</option>
                                        <option
                                            value="Point Of Sale">Point Of Sale</option>
                                        <option
                                            value=Architectural>Architectural</option>
                                        <option
                                            value="Health &amp; Safety">Health &amp; Safety</option>
                                        <option
                                            value="Business Stationery">Business Stationery</option>
                                        <option
                                            value="Large Format Printing">Large Format Printing</option>
                                        <option
                                            value=Other>Other</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                        <div
                            class="six columns omega">
                            <p>
                                How Did Your Hear About Us? (please select)<span
                                    class=gold_text>*</span><br>
                                <span
                                    class=wpcf7-form-control-wrap data-name=HearAbout>
                                    <select
                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required=true 
                                        aria-invalid=false 
                                        name=hear
                                    >
                                        <option
                                            value>&#8212;Please choose an option&#8212;</option>
                                        <option
                                            value="Search Engine">Search Engine</option>
                                        <option
                                            value=Radio>Radio</option>
                                        <option
                                            value=Advertisement>Advertisement</option>
                                        <option
                                            value=Recommendation>Recommendation</option>
                                        <option
                                            value=Brochure>Brochure</option>
                                        <option
                                            value=Exhibition>Exhibition</option>
                                        <option
                                            value="Existing Customer">Existing Customer</option>
                                        <option
                                            value=Other>Other</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                        <div
                            class="eleven columns alpha">
                            <p>Further Details<span
                                class=gold_text>*</span><br>
                                <span
                                    class=wpcf7-form-control-wrap data-name=your-message>
                                    <textarea 
                                        cols=40 
                                        rows=10 
                                        maxlength=2000 
                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required=true 
                                        aria-invalid=false 
                                        name=message
                                    > 
                                    </textarea>
                                </span>
                            </p>
                            <p>
                                <!-- <input class="wpcf7-form-control wpcf7-submit has-spinner" type=submit value=Submit> -->
                                <button class="wpcf7-form-control wpcf7-submit has-spinner" type="submit">Submit</button>
                            </p>
                        </div>
                    </div>
                    <div
                        class=wpcf7-response-output aria-hidden=true>
                    </div>
                </form>
            </div>
        </div>
        <aside
            id=sidebar class="four columns offset-by-one">
            <ul>
                <h3>Details</h3>
                <div
                    class=textwidget>
                    <p><em
                        class=grey>Arrow Head Design & Printshop</em><br>
                        <!-- Units 1 & 2 Benjamin Outram Business Centre<br> -->
                        Thika Road<br>
                        Thika Town<br>
                        Kiambu County<br>
                        Kenya<br>
                        <em
                            class=blue>Telephone:</em> 0722 206 268<br>
                        <em
                            class=blue>Email:</em>
                        <a
                            href=mailto:arrowheadkenya@gmail.com>arrowheadkenya@gmail.com</a>
                    </p>
                    <p><em
                        class=blue>Opening times:</em><br>
                        Monday - Friday 8.30am - 6.00pm<br>
                        Saturday - 8:30am - 2:00pm
                    </p>
                </div>
            </ul>
        </aside>
    </section>

@endsection