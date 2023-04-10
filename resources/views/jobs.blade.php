@extends('layouts.app')
@section('title','Profile')
@section('content')
<main class="tu-bgmain tu-main">
        <section class="tu-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <aside class="tu-asidewrapper">
                            <a href="javascript:void(0)" class="tu-dbmenu"><i class="icon icon-chevron-left"></i></a>
                            <div class="tu-aside-menu">
                                <div class="tu-aside-holder">
                                    <div class="tu-asidetitle" data-bs-toggle="collapse" data-bs-target="#side2" role="button" aria-expanded="true">
                                        <h5>Education level</h5>
                                    </div>
                                    <div id="side2" class="collapse show">
                                        <div class="tu-aside-content">
                                            <div class="tu-filterselect">
                                                <div class="tu-select">
                                                    <select id="selectv7" data-placeholder="Select education level" data-placeholderinput="Select education level" class="form-control tu-input-field">
                                                        <option label="Select category"></option>
                                                        <option value="selectparcat">Primary (Class 1-5)</option>
                                                        <option value="selectparcat">Primary (Class 6-8)</option>
                                                        <option value="selectparcat">Primary (Class 9-10)</option>
                                                        <option value="selectparcat">Language courses</option>
                                                        <option value="selectparcat">Short courses</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tu-filterselect">
                                                <h6>Choose subjects</h6>
                                                <ul class="tu-categoriesfilter">
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2" name="expcheck" checked>
                                                            <label for="expcheck2">Social studies</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2a" name="expcheck">
                                                            <label for="expcheck2a">Urdu</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2a1" name="expcheck" checked>
                                                            <label for="expcheck2a1">Mathematic</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2a2" name="expcheck">
                                                            <label for="expcheck2a2">English</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2a3" name="expcheck">
                                                            <label for="expcheck2a3">Drawing</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2a4" name="expcheck" checked>
                                                            <label for="expcheck2a4">Computer science</label>
                                                        </div>
                                                    </li>                                              
                                                    <li>
                                                        <div class="tu-check tu-checksm">
                                                            <input type="checkbox" id="expcheck2a21" name="expcheck">
                                                            <label for="expcheck2a21">physics</label>
                                                        </div>
                                                    </li>                                              
                                                </ul>
                                                <div class="show-more">
                                                    <a href="javascript:void(0);" class="tu-readmorebtn tu-show_more">Show all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tu-aside-holder">
                                    <div class="tu-asidetitle" data-bs-toggle="collapse" data-bs-target="#side3" role="button" aria-expanded="true">
                                        <h5>Price range</h5>
                                    </div>
                                    <div id="side3" class="collapse show">
                                        <div class="tu-aside-content">
                                            <div class="tu-rangevalue" data-bs-target="#tu-rangecollapse" role="list" aria-expanded="false">
                                                <div class="tu-areasizebox">
                                                    <input type="number" class="form-control tu-input-field" step="1" placeholder="Min price" id="tu-min-value" />
                                                    <input type="number" class="form-control tu-input-field" step="1" placeholder="Max price" id="tu-max-value" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tu-distanceholder">
                                            <div id="tu-rangecollapse" class="collapse">    
                                                <div class="tu-distance">
                                                    <div id="tu-rangeslider" class="tu-tooltiparrow tu-rangeslider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tu-aside-holder">
                                    <div class="tu-asidetitle" data-bs-toggle="collapse" data-bs-target="#side1a" role="button" aria-expanded="true">
                                        <h5>Rating</h5>
                                    </div>
                                    <div id="side1a" class="collapse show">
                                        <div class="tu-aside-content">
                                            <ul class="tu-categoriesfilter">
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="rate" name="rate" checked>
                                                        <label for="rate">
                                                            <span class="tu-stars">
                                                                <span></span>
                                                            </span>
                                                            <em class="tu-totalreview">
                                                                <span>5.0/<em>5.0</em></span>
                                                            </em>  
                                                        </label>
                                                    </div>
                                                </li>                                              
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="rate4" name="rate4">
                                                        <label for="rate4">
                                                            <span class="tu-stars tu-fourstar">
                                                                <span></span>
                                                            </span>
                                                            <em class="tu-totalreview">
                                                                <span>4.0/<em>5.0</em></span>
                                                            </em>
                                                        </label>
                                                    </div>
                                                </li>                                              
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="rate3" name="rate2" checked>
                                                        <label for="rate3">
                                                            <span class="tu-stars tu-threestar">
                                                                <span></span>
                                                            </span>
                                                            <em class="tu-totalreview">
                                                                <span>3.0/<em>5.0</em></span>
                                                            </em>
                                                        </label>
                                                    </div>
                                                </li>                                              
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="rate2a" name="rate2a">
                                                        <label for="rate2a">
                                                            <span class="tu-stars tu-twostar">
                                                                <span></span>
                                                            </span>
                                                            <em class="tu-totalreview">
                                                                <span>2.0/<em>5.0</em></span>
                                                            </em>
                                                        </label>
                                                    </div>
                                                </li>                                              
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="rate1a" name="rate1a">
                                                        <label for="rate1a">
                                                            <span class="tu-stars tu-onestar">
                                                                <span></span>
                                                            </span>
                                                            <em class="tu-totalreview">
                                                                <span>1.0/<em>5.0</em></span>
                                                            </em>
                                                        </label>
                                                    </div>
                                                </li>                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tu-aside-holder">
                                    <div class="tu-asidetitle" data-bs-toggle="collapse" data-bs-target="#Location" role="button" aria-expanded="true">
                                        <h5>Location</h5>
                                    </div>
                                    <div id="Location" class="collapse show">
                                        <div class="tu-aside-content">
                                            <div class="tu-filterselect">
                                                <div class="tu-placeholderholder">
                                                    <input type="email" class="form-control" required="" placeholder="Full Name">
                                                <div class="tu-placeholder">
                                                    <span>Enter Location</span>
                                                    <em>*</em>
                                                </div>
                                            </div>
                                            <div class="tu-distanceholder">
                                                <div class="tu-rangeslider tu-tooltiparrow">
                                                    <span>Radius in miles  <em>m</em><span class="example-val" id="slider1-span">65</span></span>  
                                                    <div id="tu-rangeslidertwo"></div>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tu-aside-holder">
                                    <div class="tu-asidetitle" data-bs-toggle="collapse" data-bs-target="#side1ab" role="button" aria-expanded="true">
                                        <h5>Miscellaneous</h5>
                                    </div>
                                    <div id="side1ab" class="collapse show">
                                        <div class="tu-aside-content">
                                            <ul class="tu-categoriesfilter">
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="nameaa" name="expcheck" checked>
                                                        <label for="nameaa">Online bookings</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="namea" name="expcheck">
                                                        <label for="namea">Profile photos</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="namea1" name="expcheck" checked>
                                                        <label for="namea1">Male only</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tu-check tu-checksm">
                                                        <input type="checkbox" id="namea2" name="expcheck">
                                                        <label for="namea2">Female only</label>
                                                    </div>
                                                </li>                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tu-filterbtns">
                                    <a href="search-listing-two.html" class="tu-primbtn">Apply filters</a>
                                    <a href="search-listing.html" class="tu-sb-sliver">Clear all filters</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-12 col-xl-9">
                        <div class="tu-listinginfo-holder">
                            <div class="tu-listinginfo tu-listinginfo_two">
                                <span class="tu-cardtag"></span>
                                <div class="tu-listinginfo_wrapper">
                                    <div class="tu-listinginfo_title">
                                        <div class="tu-listinginfo-img">
                                            <figure>
                                                <img src="images/listing/img-01.png" alt="imge">
                                            </figure>
                                            <div class="tu-listing-heading">
                                                <h5><a href="tutor-detail.html">Curtis Grant</a>
                                                <i class="icon icon-check-circle tu-greenclr" data-tippy-trigger="mouseenter" data-tippy-html="#tu-verifed" data-tippy-interactive="true" data-tippy-placement="top"></i>
                                            </h5>
                                                <div class="tu-listing-location">
                                                    <address><i class="icon icon-map-pin"></i>Indianapolis, CA</address>
                                                    <span>5.0 <i class="fa-solid fa-star"></i><em>(4,448)</em></span>
                                                    <div class="tu-iconheart">
                                                        <i class="icon icon-heart"></i><span>save</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tu-listinginfo_price">
                                            <span>Starting from:</span>
                                            <h4>$562.32/hr</h4>
                                        </div>
                                    </div>
                                    <div class="tu-listinginfo_service">
                                        <h6>You can get teaching service direct at</h6>
                                        <ul class="tu-service-list">
                                            <li>
                                                <span>
                                                    <i class="icon icon-home tu-greenclr"></i>
                                                    My home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-map-pin tu-blueclr"></i>
                                                    Student's home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-video tu-orangeclr"></i>
                                                    Online
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tu-listinginfo_description">
                                        <p>Hello there! My name is frederick and I'm currently a pre-medical student. I have a deep passion for teaching and I am looking for students, mainly primary, to help them get ahead of school and ace their grades!</p>
                                    </div>
                                    <ul class="tu-serviceslist">
                                        <li>
                                            <a href="search-listing.html">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">PSD to HTML</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">iOS</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Clean coding</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Admin panel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tu-tippytooltip" data-tippy-trigger="click" data-tippy-html="#tu-industrypro" data-tippy-interactive="true">...</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tu-listinginfo tu-listinginfo_two">
                                <span class="tu-cardtag"></span>
                                <div class="tu-listinginfo_wrapper">
                                    <div class="tu-listinginfo_title">
                                        <div class="tu-listinginfo-img">
                                            <figure>
                                                <img src="images/listing/img-02.png" alt="imge">
                                            </figure>
                                            <div class="tu-listing-heading">
                                                <h5><a href="tutor-detail.html">Albert Schroeder</a>
                                                    <i class="icon icon-check-circle tu-greenclr" data-tippy-trigger="mouseenter" data-tippy-html="#tu-verifed" data-tippy-interactive="true" data-tippy-placement="top"></i>
                                                </h5>
                                                <div class="tu-listing-location">
                                                    <address><i class="icon icon-map-pin"></i>Baltimore, NV</address>
                                                    <span>5.0 <i class="fa-solid fa-star"></i><em>(4,448)</em></span>
                                                    <div class="tu-iconheart">
                                                        <i class="icon icon-heart"></i><span>save</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tu-listinginfo_price">
                                            <span>Starting from:</span>
                                            <h4>$804.02/hr</h4>
                                        </div>
                                    </div>
                                    <div class="tu-listinginfo_service">
                                        <h6>You can get teaching service direct at</h6>
                                        <ul class="tu-service-list">
                                            <li>
                                                <span>
                                                    <i class="icon icon-home tu-greenclr"></i>
                                                    My home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-map-pin tu-blueclr"></i>
                                                    Student's home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-video tu-orangeclr"></i>
                                                    Online
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tu-listinginfo_description">
                                        <p>Hello there! My name is frederick and I'm currently a pre-medical student. I have a deep passion for teaching and I am looking for students, mainly primary, to help them get ahead of school and ace their grades!</p>
                                    </div>
                                    <ul class="tu-serviceslist">
                                        <li>
                                            <a href="search-listing.html">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">PSD to HTML</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">iOS</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Clean coding</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Admin panel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tu-tippytooltip" data-tippy-trigger="click" data-tippy-html="#tu-industrypro" data-tippy-interactive="true">...</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tu-listinginfo tu-listinginfo_two">
                                <span class="tu-cardtag"></span>
                                <div class="tu-listinginfo_wrapper">
                                    <div class="tu-listinginfo_title">
                                        <div class="tu-listinginfo-img">
                                            <figure>
                                                <img src="images/listing/img-03.png" alt="imge">
                                            </figure>
                                            <div class="tu-listing-heading">
                                                <h5><a href="tutor-detail.html">David Bowen</a>
                                                    <i class="icon icon-check-circle tu-greenclr" data-tippy-trigger="mouseenter" data-tippy-html="#tu-verifed" data-tippy-interactive="true" data-tippy-placement="top"></i>
                                                </h5>
                                                <div class="tu-listing-location">
                                                    <address><i class="icon icon-map-pin"></i>Charlotte, OK</address>
                                                    <span>5.0 <i class="fa-solid fa-star"></i><em>(4,448)</em></span>
                                                    <div class="tu-iconheart">
                                                        <i class="icon icon-heart"></i><span>save</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tu-listinginfo_price">
                                            <span>Starting from:</span>
                                            <h4>$823.36/hr</h4>
                                        </div>
                                    </div>
                                    <div class="tu-listinginfo_service">
                                        <h6>You can get teaching service direct at</h6>
                                        <ul class="tu-service-list">
                                            <li>
                                                <span>
                                                    <i class="icon icon-home tu-greenclr"></i>
                                                    My home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-map-pin tu-blueclr"></i>
                                                    Student's home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-video tu-orangeclr"></i>
                                                    Online
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tu-listinginfo_description">
                                        <p>Hello there! My name is frederick and I'm currently a pre-medical student. I have a deep passion for teaching and I am looking for students, mainly primary, to help them get ahead of school and ace their grades!</p>
                                    </div>
                                    <ul class="tu-serviceslist">
                                        <li>
                                            <a href="search-listing.html">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">PSD to HTML</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">iOS</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Clean coding</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Admin panel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tu-tippytooltip" data-tippy-trigger="click" data-tippy-html="#tu-industrypro" data-tippy-interactive="true">...</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tu-listinginfo tu-listinginfo_two">
                                <span class="tu-cardtag"></span>
                                <div class="tu-listinginfo_wrapper">
                                    <div class="tu-listinginfo_title">
                                        <div class="tu-listinginfo-img">
                                            <figure>
                                                <img src="images/listing/img-04.png" alt="imge">
                                            </figure>
                                            <div class="tu-listing-heading">
                                                <h5><a href="tutor-detail.html">Brenda Phillips</a>
                                                    <i class="icon icon-check-circle tu-greenclr" data-tippy-trigger="mouseenter" data-tippy-html="#tu-verifed" data-tippy-interactive="true" data-tippy-placement="top"></i>    
                                                </h5>
                                                <div class="tu-listing-location">
                                                    <address><i class="icon icon-map-pin"></i>Sacramento, CA</address>
                                                    <span>5.0 <i class="fa-solid fa-star"></i><em>(4,448)</em></span>
                                                    <div class="tu-iconheart">
                                                        <i class="icon icon-heart"></i><span>save</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tu-listinginfo_price">
                                            <span>Starting from:</span>
                                            <h4>$569.53/hr</h4>
                                        </div>
                                    </div>
                                    <div class="tu-listinginfo_service">
                                        <h6>You can get teaching service direct at</h6>
                                        <ul class="tu-service-list">
                                            <li>
                                                <span>
                                                    <i class="icon icon-home tu-greenclr"></i>
                                                    My home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-map-pin tu-blueclr"></i>
                                                    Student's home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-video tu-orangeclr"></i>
                                                    Online
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tu-listinginfo_description">
                                        <p>Hello there! My name is frederick and I'm currently a pre-medical student. I have a deep passion for teaching and I am looking for students, mainly primary, to help them get ahead of school and ace their grades!</p>
                                    </div>
                                    <ul class="tu-serviceslist">
                                        <li>
                                            <a href="search-listing.html">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">PSD to HTML</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">iOS</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Clean coding</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Admin panel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tu-tippytooltip" data-tippy-trigger="click" data-tippy-html="#tu-industrypro" data-tippy-interactive="true">...</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tu-listinginfo tu-listinginfo_two">
                                <span class="tu-cardtag"></span>
                                <div class="tu-listinginfo_wrapper">
                                    <div class="tu-listinginfo_title">
                                        <div class="tu-listinginfo-img">
                                            <figure>
                                                <img src="images/listing/img-02.png" alt="imge">
                                            </figure>
                                            <div class="tu-listing-heading">
                                                <h5><a href="tutor-detail.html">Bessie Gibson</a>
                                                    <i class="icon icon-check-circle tu-greenclr" data-tippy-trigger="mouseenter" data-tippy-html="#tu-verifed" data-tippy-interactive="true" data-tippy-placement="top"></i>
                                                </h5>
                                                <div class="tu-listing-location">
                                                    <address><i class="icon icon-map-pin"></i>Albuquerque, CA</address>
                                                    <span>5.0 <i class="fa-solid fa-star"></i><em>(4,448)</em></span>
                                                    <div class="tu-iconheart">
                                                        <i class="icon icon-heart"></i><span>save</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tu-listinginfo_price">
                                            <span>Starting from:</span>
                                            <h4>$562.32/hr</h4>
                                        </div>
                                    </div>
                                    <div class="tu-listinginfo_service">
                                        <h6>You can get teaching service direct at</h6>
                                        <ul class="tu-service-list">
                                            <li>
                                                <span>
                                                    <i class="icon icon-home tu-greenclr"></i>
                                                    My home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-map-pin tu-blueclr"></i>
                                                    Student's home
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="icon icon-video tu-orangeclr"></i>
                                                    Online
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tu-listinginfo_description">
                                        <p>Hello there! My name is frederick and I'm currently a pre-medical student. I have a deep passion for teaching and I am looking for students, mainly primary, to help them get ahead of school and ace their grades!</p>
                                    </div>
                                    <ul class="tu-serviceslist">
                                        <li>
                                            <a href="search-listing.html">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">PSD to HTML</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">iOS</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Clean coding</a>
                                        </li>
                                        <li>
                                            <a href="search-listing.html">Admin panel</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tu-tippytooltip" data-tippy-trigger="click" data-tippy-html="#tu-industrypro" data-tippy-interactive="true">...</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <nav class="tu-pagination">
                            <ul>
                                <li class="tu-pagination-prev"><a href="javascript:void(0)"><i class="icon icon-chevron-left"></i></a> </li>
                                <li><a href="javascript:void(0)">1</a> </li>
                                <li><a href="javascript:void(0)">2</a> </li>
                                <li><a href="javascript:void(0)">3</a> </li>
                                <li class="active"><a href="javascript:void(0)">4</a> </li>
                                <li><a href="javascript:void(0)">...</a> </li>
                                <li><a href="javascript:void(0)">60</a> </li>
                                <li class="tu-pagination-next"><a href="javascript:void(0)"><i class="icon icon-chevron-right"></i></a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection