@extends('layouts.app')
@section('title', 'Details Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Bromo</h1>
                        <p>Republic of Indonesia</p>
                        <div class="galery">
                            <div class="xzoom-container">
                                <img src="/frontend/images/details/big@2x.png" class="xzoom" id="xzoom-default"
                                    xoriginal="/frontend/images/details/big@2x.png">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="/frontend/images/details/bromo_prev_2@2x.png">
                                    <img src="/frontend/images/details/bromo_prev_2@2x.png" class="xzoom-galery"
                                        width="120" xpreview="/frontend/images/details/big@2x.png">
                                </a>
                                <a href="/frontend/images/details/bromo_prev_1@2x.png">
                                    <img src="/frontend/images/details/bromo_prev_1@2x.png" class="xzoom-galery"
                                        width="120" xpreview="/frontend/images/details/bromo_prev_1@2x.png">
                                </a>
                                <a href="/frontend/images/details/bromo_prev_3@2x.png">
                                    <img src="/frontend/images/details/bromo_prev_3@2x.png" class="xzoom-galery"
                                        width="120" xpreview="/frontend/images/details/bromo_prev_3@2x.png">
                                </a>
                                <a href="/frontend/images/details/bromo_prev_4@2x.png">
                                    <img src="/frontend/images/details/bromo_prev_4@2x.png" class="xzoom-galery"
                                        width="120" xpreview="/frontend/images/details/bromo_prev_4@2x.png">
                                </a>
                                <a href="/frontend/images/details/bromo_prev_5@2x.png">
                                    <img src="/frontend/images/details/bromo_prev_5@2x.png" class="xzoom-galery"
                                        width="120" xpreview="/frontend/images/details/bromo_prev_5@2x.png">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Mount Bromo, is an active volcano and part of the Tengger massif, in East Java,
                            Indonesia.
                            At 2,329 meters it is not the highest peak of the massif, but is the most well known.
                            The massif area is one of the most visited tourist attractions in East Java, Indonesia.
                        </p>
                        <p>
                            The volcano belongs to the Bromo Tengger Semeru National Park. The name of Bromo
                            derived from Javanese pronunciation of Brahma, the Hindu creator god.
                        </p>
                        <div class="row features">
                            <div class="col-md-4">
                                <img src="/frontend/images/ic_events@2x.png" alt="" class="features-image">
                                <div class="decription">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="/frontend/images/ic_bahasa@2x.png" alt="" class="features-image">
                                <div class="decription">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="/frontend/images/ic_food@2x.png" alt="" class="features-image">
                                <div class="decription">
                                    <h3>Foods</h3>
                                    <p>Local Foods </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="/frontend/images/details/memb_1@2x.png" class="member-image mr-2">
                            <img src="/frontend/images/details/memb_2@2x.png" class="member-image mr-2">
                            <img src="/frontend/images/details/memb_3@2x.png" class="member-image mr-2">
                            <img src="/frontend/images/details/memb_4@2x.png" class="member-image mr-2">
                            <img src="/frontend/images/details/memb_1@2x.png" class="member-image mr-2">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <div class="trip-information">
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Date of Departure
                                </div>
                                <div class="col-6 text-right second-information">
                                    22 August, 2020
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Duration
                                </div>
                                <div class="col-6 text-right second-information">
                                    4D 3N
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Type
                                </div>
                                <div class="col-6 text-right second-information">
                                    Open trip
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Price
                                </div>
                                <div class="col-6 text-right second-information">
                                    $80,00/Person
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <!-- X Zoom -->
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom , .xzoom-galery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush