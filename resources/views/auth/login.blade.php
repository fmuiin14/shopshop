@extends('layouts.auth')

@section('content')

<!-- Contact Section Begin -->
<section class="contact spad" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex">
                <img src="/img/shop.jpg" class="img-responsive">
            </div>

            <div class="col-lg-4 col-md-4 mx-auto">
                <div class="contact__content">
                    <div class="contact__form" id="register">
                        <h3>Belanja kebutuhan utama,
                            menjadi lebih mudah</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-success btn-block mt-5">
                                Sign In to My Account
                            </button>
                            <a href="{{route('register')}}" class="btn btn-signup btn-block mt-2">
                                Sign Up
                            </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
