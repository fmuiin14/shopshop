@extends('layouts.success')

@section('title')
    Success - ShopShop
@endsection

@section('content')

<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <img src="/img/success/success.svg" alt="image" class="mb-4">
                    <h2>Transaction Processed</h2>
                    <p>Silakan tunggu konfirmasi email dari kami dan kami akan menginformasikan resi secepat mungkin.
                    </p>
                    <div>
                        <a href="#" class="btn btn-success w-50 mt-4">My Dashboard</a>
                        <a href="#" class="btn btn-signup w-50 mt-2">Go To Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection