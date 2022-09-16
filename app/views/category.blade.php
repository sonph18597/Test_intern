@extends('layout')
@section('main-content')
<section class="new-product mt-5">
    <div class="container">
        <header class="new-product-header text-center">
            <h2>Product Detail</h2>
        </header>
        <div class="new-product-body mt-3">
            <div class="row mt-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-product mb-3">

                        <div class="product-image">
                            <a href="">
                                <img srcset="./public/{{$product->image}} 2x" alt="" class="img-fluid">
                            </a>
                            <div
                                class="product__info d-flex justify-content-between align-products-center py-4 px-3 fs-6">
                                <div class="d-flex">
                                    <span><i class="bi bi-heart me-3"></i></span>
                                    <span><i class="bi bi-search"></i></span>
                                </div>
                                <div>
                                    <i class="bi bi-bag me-1"></i> shopnow
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="" class="product__name">{{$product->name}}</a></h3>
                            <div class="product-meta d-flex justify-content-between align-products-center">
                                <a href="" class="product-category">{{$product->category_id}}</a>
                                <div class="product-price">
                                    <span>${{$product->price}}</span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
               
                <!--End .product-product-->
            </div>
        </div>
    </div>
</section>
@endsection