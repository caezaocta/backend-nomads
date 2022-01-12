@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
                <h1>Yeay Success</h1>
                <p>We have sent you an email for the trip instructions.
                    <br>
                    please read it ass well
                </p>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
            </div>
        </div>
    </main>

@endsection
