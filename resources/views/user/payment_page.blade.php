@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $club->name }}</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('club.view', $club->id) }}">{{ $club->name }}</a></li>
                    <li>{{ $club->name }} Payment</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Payment Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="d-grid gap-2 d-flex justify-content-end my-3">
                        <button type="button" class="btn btn-secondary"> Back
                        </button>
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card mb-4 ">
                            <div class="card-header">
                                <b> Your Account </b>
                            </div>
                            <div class="card-body">
                                <p class="card-text">member@gmsil.com</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <b> Shipping </b>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    S.K.VIJERATHNE,
                                    <br> P.O. Box 658,
                                    <br> Colombo,
                                    <br> Sri Lanka.
                                    <br></p>
                                <div class="d-grid gap-2 d-flex justify-content-end mt-3">
                                    <button type="button" class="btn btn-dark">Edit</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <b> Biling </b>
                            </div>
                            <div class="card-body ">
                                <p class="card-text">
                                <h4><i class="fa-solid fa-shield-check"></i>Payment Shield</h4>
                                Secure AER 256-bit SSL encrypted Payment <br><br>
                                <form action="{{route('payment_method',$club->id)}}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline mb-3">
                                        <input class="form-check-input" type="radio" name="payment_method"
                                               id="flexRadioDefault1" value="visa">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="https://i.imgur.com/28akQFX.jpg" width="100px" height="30px">
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment_method"
                                               id="flexRadioDefault1" value="paypal">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="https://i.imgur.com/5QFsx7K.jpg" width="100px" height="30px">
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="concept" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Exp.Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Zip Code">
                                        </div>
                                    </div>

                                    <p>Each month , we'll select a new box for you based on your
                                        interests and deliver it to your door.</p>
                                    ✔You can easily skip ( or swap ) your box after reviewing it <br>
                                    ✔You can skip ( or swap ) an unlimited number of times <br>
                                    <p>✔Enjoy free exchanges and easy returns</p>
                                    <p>There are no membership fees and your membership continues until you cancel.
                                        We're here for you for help or to cancel , email us , call us , or visit our FAQ
                                        page .
                                        See full terms here.</p>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            I agree Lets do this
                                        </label>
                                    </div>
                                    <div class="d-grid gap-2 d-flex justify-content-end mt-3">
                                        <input class="btn btn-dark" type="submit" value="Place Your Order">
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 px-4">
                            <h4><b>Club Membership</b></h4>
                            Membership Fee.... <br><br>
                            Boxes that ship cost $ 49.00 ( + $ 4.57 tax and - $ 4.95 shipping ) <br><br>
                            ✔ Preview what's in your box each month , and discover great gear from small brands <br><br>
                            ✔ Stick with it . Swap it . Or skip the month completely free of charge <br><br>
                            ✔ Ships mid month , unless you skipped . No membership fees , free exchanges & easy returns
                            <br><br>
                            * Boxes for mon - members cost $ 70 <br><br>
                            <input type="text" class="form-control" placeholder="Promo code">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
