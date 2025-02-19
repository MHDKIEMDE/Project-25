@extends('layouts.app')

@section('Title', 'Show property')

@section('contente')
<section class="breadcrumbs" style="background: url(./assets/images/breadcrumbs_bg.jpg);">
    <div class="breadcrumbs_overly">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <div class="breadcrumb_text wow fadeInUp" data-wow-duration="1.5s">
                        <h1>Property Details</h1>
                        <ul class=" d-flex flex-wrap justify-content-center">
                            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                            <li><a href="#">Property Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="property_details pt_120 xs_pt_100 pb_105 xs_pb_85">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="1.5s">
            <div class=" col-xl-12">
                <div class="property_details_slider">
                    <div class="row slider-for2">
                        <div class="col-12">
                            <div class="property_details_large_img">
                                <img src="{{ asset('assets/images/property_details_img_1.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="property_details_large_img">
                                <img src="{{ asset('assets/images/property_details_img_2.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="property_details_large_img">
                                <img src="{{ asset('assets/images/property_details_img_3.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="property_details_large_img">
                                <img src="{{ asset('assets/images/property_details_img_4.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="property_details_large_img">
                                <img src="{{ asset('assets/images/property_details_img_3.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                    </div>

                    <div class="row slider-nav2">
                        <div class="col-xl-4">
                            <div class="property_details_small_img">
                                <img src="{{ asset('assets/images/property_details_img_1.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="property_details_small_img">
                                <img src="{{ asset('assets/images/property_details_img_2.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="property_details_small_img">
                                <img src="{{ asset('assets/images/property_details_img_3.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="property_details_small_img">
                                <img src="{{ asset('assets/images/property_details_img_4.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="property_details_small_img">
                                <img src="{{ asset('assets/images/property_details_img_3.jpg') }}" alt="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt_50">
            <div class="col-lg-8">
                <div class="single_property_details wow fadeInUp" data-wow-duration="1.5s">
                    <div class=" d-flex flex-wrap justify-content-between">
                        <h4>Stunning mansion in Reno</h4>
                        <ul class="property_details_share d-flex flex-wrap">
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                        </ul>
                    </div>
                    <div class="property_details_address d-flex flex-wrap justify-content-between">
                        <ul class="d-flex flex-wrap">
                            <li><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</li>
                            <li><i class="far fa-clock"></i>10 months ago</li>
                            <li><span>For Rent</span></li>
                        </ul>
                        <h3>$3,700</h3>
                    </div>
                    <ul class="flat_details d-flex flex-wrap">
                        <li>
                            <span><img src="{{ asset('assets/images/bad.png') }}" alt="img" class="img-fluid w-100"></span>
                            8 Beds
                        </li>
                        <li>
                            <span><img src="{{ asset('assets/images/bathtab.png') }}" alt="img" class="img-fluid w-100"></span>
                            6 Baths
                        </li>
                        <li>
                            <span><img src="{{ asset('assets/images/squre.png') }}" alt="img" class="img-fluid w-100"></span>
                            2400 Sq Ft
                        </li>
                    </ul>
                </div>
                <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                    <h4>Description</h4>
                    <p class=" property_dtls_decription">Nullam metus metus, imperdiet ut ex quis, ultrices feugiat
                        neque. Etiam vitae accumsan neque,
                        id gravida ligula. Donec ut tincidunt velit. Sed gravida erat nunc, ac vehicula orci
                        dignissim id. Praesent diam magna. Sed tincidunt mi libero.</p>
                    <p class="property_dtls_decription pt_15">Phasellus sed pellentesque neque, sit amet porta quam.
                        Donec
                        sapien odio, eleifend mattis
                        tristique ut, finibus ac augue. Suspendisse potenti. Etiam porttitor mi lorem, ut mattis
                        mauris rutrum in. Mauris nibh sapien, ornare at dui ac, placerat pulvinar nisi.</p>
                </div>
                <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                    <h4>Property Details</h4>
                    <ul class=" property_apartment_details d-flex flex-wrap mt_10">
                        <li>
                            <p>Property ID:<span>F257481</span></p>
                        </li>
                        <li>
                            <p>Rooms:<span>5</span></p>
                        </li>
                        <li>
                            <p>Property Status:<span>For Sale</span></p>
                        </li>
                        <li>
                            <p>Property Price:<span>$340,00</span></p>
                        </li>
                        <li>
                            <p>Garages:<span>2</span></p>
                        </li>
                        <li>
                            <p>Bedrooms:<span>5</span></p>
                        </li>
                        <li>
                            <p>Property Type:<span>Garden House</span></p>
                        </li>
                        <li>
                            <p>Baths:<span>5</span></p>
                        </li>
                        <li>
                            <p>Originating Year:<span>2022</span></p>
                        </li>
                    </ul>
                    <div class="property_facilities">
                        <h4>Facilities</h4>
                        <ul class="d-flex flex-wrap">
                            <li>Air Cond</li>
                            <li>balcony</li>
                            <li>Internet</li>
                            <li>lawn</li>
                            <li>Dishwasher</li>
                            <li>bedding</li>
                            <li>Cable TV</li>
                            <li>gym</li>
                            <li>Parking</li>
                            <li>pool</li>
                            <li>Fridge</li>
                            <li>Swimming Pool</li>
                        </ul>
                    </div>
                </div>
                <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                    <h4>Floor Plans</h4>
                    <div class=" apertment_layout">
                        <img src="{{ asset('assets/images/layout.jpg') }}" alt="img" class="img-fluid w-100">
                    </div>
                </div>
                <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                    <h4>Map Location</h4>
                    <div class=" apertment_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187883983!2d90.33728804060513!3d23.780975728310533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1701892197304!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                    <h4>Property Video</h4>
                    <div class=" apertment_video">
                        <iframe src="https://www.youtube.com/embed/ec_fXMrD7Ow?si=E-z18uXLa_wbsPXg"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="single_property_details mt_25 wow fadeInUp" data-wow-duration="1.5s">
                    <h4>Customer Reviews</h4>
                    <div class=" apartment_review">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="apartment_review_counter">
                                    <h3>5.0</h3>
                                    <p>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                    <span>(2 Customer Reviews)</span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="review_progressbar">
                                    <div class="single_bar">
                                        <p>5 Star</p>
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="70"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>4 Star</p>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="15"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>3 Star</p>
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="10"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>2 Star</p>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="5"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>1 Star</p>
                                        <div id="bar5" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="0"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="apartment_review_area">
                        <h4>2 Reviews</h4>
                        <div class="single_review">
                            <div class="single_review_img">
                                <img src="{{ asset('assets/images/comment_1.png') }}" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="single_review_text">
                                <h3>Elon Gated
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </h3>
                                <h6>February 24, 2024</h6>
                                <p>Nullam metus metus, imperdiet ut ex quis, ultrices feugiat neque. Etiam vitae
                                    accumsan neque, id gravida ligula donec ut tincidunt orci dignissim id sed
                                    tincidunt mi libero.</p>
                            </div>
                        </div>
                        <div class="single_review">
                            <div class="single_review_img">
                                <img src="{{ asset('assets/images/comment_2.png') }}" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="single_review_text">
                                <h3>abrar khan
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </h3>
                                <h6>February 24, 2024</h6>
                                <p>Nullam metus metus, imperdiet ut ex quis, ultrices feugiat neque. Etiam vitae
                                    accumsan neque, id gravida ligula donec ut tincidunt orci dignissim id sed
                                    tincidunt mi libero.</p>
                            </div>
                        </div>
                        <div class="single_review">
                            <div class="single_review_img">
                                <img src="{{ asset('assets/images/comment_3.png') }}" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="single_review_text">
                                <h3>maria jahan
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </h3>
                                <h6>February 24, 2024</h6>
                                <p>Nullam metus metus, imperdiet ut ex quis, ultrices feugiat neque. Etiam vitae
                                    accumsan neque, id gravida ligula donec ut tincidunt orci dignissim id sed
                                    tincidunt mi libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_property_details details_apertment_form mt_25 wow fadeInUp"
                    data-wow-duration="1.5s">
                    <h4>Leave a Review</h4>
                    <form action=" #" class="apertment_form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="apertment_form_input">
                                    <label>Name *</label>
                                    <input type="text" placeholder="Enter your Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="apertment_form_input">
                                    <label>Email *</label>
                                    <input type="email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="apertment_form_input">
                                    <label>Rating</label>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <textarea rows="6" placeholder="Enter Massage"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-check blog_checkbox">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Save my name, email, and
                                        website in this browser for the next time I comment.</label>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <a class="common_btn" href="">Submit Review</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sticky_sidebar">
                    <div class="property_details_sidebar">
                        <h4>Schedule a Tour</h4>
                        <form action="#" class="schedule_form">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="schedule_input">
                                        <input type="text" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="schedule_input">
                                        <input type="text" placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="schedule_input">
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="schedule_input">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="schedule_input">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="schedule_input">
                                        <textarea rows="5" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="schedule_input">
                                        <a href="#" class="common_btn">Schedule-a-Tour-Form</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sales_executive">
                        <a href="#" class="sales_executive_img">
                            <img src="{{ asset('assets/images/blog_owner.png') }}" alt="img" class="img-fluid w-100">
                        </a>
                        <a href="agent_details.html" class="sales_executive_name">Hanson Deck</a>
                        <p>Sales Executive</p>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related_property">
        <div class="container">
            <div class="row mt_115 xs_mt_95">
                <div class="row wow fadeInUp" data-wow-duration="1.5s">
                    <div class=" col-xl-6">
                        <div class="section_heading section_heading_left mb_25">
                            <h2>Related Properties</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row related_property_slider">
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class=" single_property">
                        <div class="single_property_img">
                            <img src="{{ asset('assets/images/property_4.jpg') }}" alt="img" class="img-fluid w-100">
                            <a class="feature_link" href="#">for sale</a>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_property_text">
                            <div class="single_property_top">
                                <a class="item_title " href="property_details.html">Stunning mansion in Reno</a>
                                <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        6 Beds
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/bathtab.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        4 Baths
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/squre.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        2500 Sq Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                <a class="read_btn" href="property_details.html">More Details<i
                                        class="fas fa-arrow-right"></i></a>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                </p>
                            </div>
                            <span class="property_price">$24,000</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class=" single_property">
                        <div class="single_property_img">
                            <img src="{{ asset('assets/images/property_5.jpg') }}" alt="img" class="img-fluid w-100">
                            <a class="feature_link" href="#">for rent</a>
                            <a class="feature_link feature" href="#">Featured</a>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_property_text">
                            <div class="single_property_top">
                                <a class="item_title" href="property_details.html">Beautiful Condo in London</a>
                                <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        4 Beds
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/bathtab.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        3 Baths
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/squre.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        2200 Sq Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                <a class="read_btn" href="property_details.html">More Details<i
                                        class="fas fa-arrow-right"></i></a>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                </p>
                            </div>
                            <span class="property_price">$9,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class=" single_property">
                        <div class="single_property_img">
                            <img src="{{ asset('assets/images/property_3.jpg') }}" alt="img" class="img-fluid w-100">
                            <a class="feature_link" href="#">for rent</a>
                            <a class="feature_link feature" href="#">Featured</a>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_property_text">
                            <div class="single_property_top">
                                <a class="item_title" href="property_details.html">South Side Garden House</a>
                                <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        5 Beds
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/bathtab.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        4 Baths
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/squre.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        2300 Sq Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                <a class="read_btn" href="property_details.html">More Details<i
                                        class="fas fa-arrow-right"></i></a>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                </p>
                            </div>
                            <span class="property_price">$29,000</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class=" single_property">
                        <div class="single_property_img">
                            <img src="{{ asset('assets/images/property_8.jpg') }}" alt="img" class="img-fluid w-100">
                            <a class="feature_link" href="#">for rent</a>
                            <a class="feature_link feature" href="#">Featured</a>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_property_text">
                            <div class="single_property_top">
                                <a class="item_title" href="property_details.html">Beautiful Condo in London</a>
                                <p><i class="fas fa-map-marker-alt"></i>28B Highgate Road, London</p>
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span><img src="{{ asset('assets/images/bad.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        4 Beds
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/bathtab.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        3 Baths
                                    </li>
                                    <li>
                                        <span><img src="{{ asset('assets/images/squre.png') }}" alt="img"
                                                class="img-fluid w-100"></span>
                                        2200 Sq Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="single_property_bottom d-flex flex-wrap justify-content-between">
                                <a class="read_btn" href="property_details.html">More Details<i
                                        class="fas fa-arrow-right"></i></a>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                </p>
                            </div>
                            <span class="property_price">$9,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection




