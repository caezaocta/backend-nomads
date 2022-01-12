@extends('layouts.app')


@section('title')
    NOMADS
@endsection

@section('content')
    <!-- header -->
    <header class="text-center">
        <h1>Explore The Beautiful World As<br>Easy As One Click</h1>
        <p>You will see beautiful moment like you've never seen before</p>

        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <!-- main -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center text-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20k</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3k</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>2k</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>


        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Somethin that you never try <br>before in this world</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row d-flex justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/travel-1.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="tarvel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/travel-2.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="tarvel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/travel-3.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="tarvel-location">NUSA PENIDA, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/travel-4.jpg');">
                            <div class="travel-country">UAE</div>
                            <div class="tarvel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- sectio networks -->

        <section class="section-networks" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us <br> more than just a trip</p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <img src="frontend/images/partner.png" alt="partnerLogo">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <h2>They Are Loving Us</h2>
                            <p>Moments We are giving them <br> Are the best experience </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section section-testimonial-content" id="testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/avatar-1.png" alt="ava1">
                                <div class="mb-4 rounded-circle">
                                    <h3 class="mt-4 mb-4">Angga Rizky</h3>
                                    <p class="testimonial">
                                        "It was a good memory. I couldn't ask for more. Thanks for letting me be a part
                                        of
                                        this team"
                                    </p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Ubud
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/avatar-2.png" alt="ava1">
                                <div class="mb-4 rounded-circle">
                                    <h3 class="mt-4 mb-4">Shayna</h3>
                                    <p class="testimonial">
                                        "The trip was amazing and I saw something beautiful in the island that makes me
                                        want to learn more"
                                    </p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Nusa Penida
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/avatar-3.png" alt="ava1">
                                <div class="mb-4 rounded-circle">
                                    <h3 class="mt-4 mb-4">Shabrina</h3>
                                    <p class="testimonial">
                                        "I loved it when the tour guide was shaking hands with the monkey."
                                    </p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Karimun Jawa
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
