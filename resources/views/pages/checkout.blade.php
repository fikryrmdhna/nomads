@extends('layouts.checkout')
@section('title', 'Checkout')

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
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who's going?</h1>
                        <p>Trip to Bromo, Indonesia</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>VISA</td>
                                        <td>Paspport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="/frontend/images/details/member_checkout_1@2x.png"
                                                height="60">
                                        </td>
                                        <td class="align-middle">Fikry Ramadhana</td>
                                        <td class="align-middle">IDN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="/frontend/images/details/Icon material-close@2x.png"
                                                    alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/frontend/images/details/member_checkout_2@2x.png"
                                                height="60">
                                        </td>
                                        <td class="align-middle">Felix Wilson</td>
                                        <td class="align-middle">AUS</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="/frontend/images/details/Icon material-close@2x.png"
                                                    alt="">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" name="inputUsername"
                                    id="inputUsername" placeholder="Username">

                                <label for="inputVisa" class="sr-only">VISA</label>
                                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport"
                                        placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>

                            <h3 class="mt-3 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Nomads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <div class="trip-information">
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Members
                                </div>
                                <div class="col-6 text-right second-information">
                                    2 Person
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Additional VISA
                                </div>
                                <div class="col-6 text-right second-information">
                                    $190,00
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Trip Price
                                </div>
                                <div class="col-6 text-right second-information">
                                    $80,00/Person
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Sub Total
                                </div>
                                <div class="col-6 text-right second-information">
                                    $270,00
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-6 text-left main-information">
                                    Total(+Unique Code)
                                </div>
                                <div class="col-6 text-right text-total">
                                    <span class="text-blue">$270,</span><span class="text-orange">11</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h2>Payment Instructions</h2>
                        <p class="payment-instruct">Please complete your payment before to continue the wonderful
                            trip
                        </p>

                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="/frontend/images/ic_bank@2x.png" alt="" class="bank-image mt-3">
                            </div>
                            <div class="description">
                                <h3>PT NOMADS ID</h3>
                                <p>
                                    0813 1668 3406
                                    <br>
                                    Bank Central Asia
                                </p>
                            </div>
                            <div class="clearfix">

                            </div>
                        </div>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="/frontend/images/ic_bank@2x.png" alt="" class="bank-image mt-3">
                            </div>
                            <div class="description">
                                <h3>PT NOMADS ID</h3>
                                <p>
                                    0882 1250 1126
                                    <br>
                                    Bank HSBC
                                </p>
                            </div>
                            <div class="clearfix">

                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="success.html" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="details.html" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/combined/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/combined/js/gijgo.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="/frontend/images/details/Icon material-date-range.png"/>'
                }
            });
    });
</script>
@endpush