@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
        <!-- Header -->
        <header class="text-center">
            <h1>Explore The Beautiful World</br> As Easy One Click</h1>
            <p class="mt-3">You will see beautiful</br>moment you never see before</p>
            <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
        </header>
        <!-- Akhir Header -->
    
        <!-- Main -->
        <main>
    
            <!-- Statistik -->
            <div class="container">
                <section class="section-stats row justify-content-center" id="section-stats">
                    <div class="col-3 col-md-2 stats-details">
                        <h2>20K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>3K</h2>
                        <p>Hotels</p>
                    </div>
                    <div class="col-3 col-md-2 stats-details">
                        <h2>72</h2>
                        <p>Partners</p>
                    </div>
                </section>
            </div>
            <!-- Akhir Statistik -->
    
            <!-- Section Popular -->
            <section class="section-popular" id="popular">
                <div class="container">
    
                    <!-- Popular Heading -->
                    <div class="row">
                        <div class="col text-center section-popular-heading">
                            <h2>Wisata Popular</h2>
                            <p>Something that you never try<br> before in this world</p>
                        </div>
                    </div>
                    <!-- Akhir Popular Heading -->
    
    
                </div>
            </section>
    
            <!-- Section Popular Content -->
            <section class="popular-content" id="popularContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('/frontend/images/bromo@2x.png');">
                                <div class="travel-country">INDONESIA</div>
                                <div class="travel-location">BROMO</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('/frontend/images/deratan@2x.png');">
                                <div class="travel-country">INDONESIA</div>
                                <div class="travel-location">DERATAN, BALI</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('/frontend/images/nusa_penida@2x.png');">
                                <div class="travel-country">INDONESIA</div>
                                <div class="travel-location">NUSA PENIDA</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('/frontend/images/karimun@2x.png');">
                                <div class="travel-country">INDONESIA</div>
                                <div class="travel-location">KARIMUN</div>
                                <div class="travel-button mt-auto">
                                    <a href="details.html" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Akhir Section Popular Content -->
    
            <!-- Section Partners -->
            <section class="section-networks" id="networks">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Our Networks</h2>
                            <p>Companies are trusted us<br>more than just a trip</p>
                        </div>
                        <div class="col-md-8">
                            <img src="/frontend/images/partners_logo.png" alt="Logo Partners" class="img-partners">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Akhir Section Partners -->
    
            <!-- Akhir Section Popular -->
    
            <!-- Section Testimonial -->
            <section class="section-testimonial-heading" id="testimonialHeading">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>They Are Loving Us</h2>
                            <p>Moments were giving them<br>the best experience</p>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="section-testimonial-content" id="testimonialContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="/frontend/images/fikry_testimoni@2x.png" alt="User"
                                        class="mb-4 rounded-circle">
                                    <h3 class="mb-4">Fikry Ramadhana</h3>
                                    <p class="testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Perferendis iure eum velit cupiditate."</p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Ubud
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="/frontend/images/ana_testimoni@2x.png" alt="User" class="mb-4 rounded-circle">
                                    <h3 class="mb-4">Ana Ivanovic</h3>
                                    <p class="testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Perferendis iure eum velit cupiditate."</p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Ubud
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="/frontend/images/wilson_testimoni@2x.png" alt="User"
                                        class="mb-4 rounded-circle">
                                    <h3 class="mb-4">Wilson Fisk</h3>
                                    <p class="testimonial">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Perferendis iure eum velit cupiditate."</p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Ubud
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-need-help mx-1 px-4 mt-4">I Need Help</a>
                            <a href="#" class="btn btn-get-started mx-1 px-4 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Akhir Section Testimonial -->
        </main>
        <!-- Akhir Main -->
    
@endsection