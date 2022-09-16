@extends('layout')
@section('main-content')
<section class="new-product mt-5">
    <div class="container">
        <header class="new-product-header text-center">
            <h2>New Product</h2>
        </header>
        <div class="new-product-body mt-3">
            <div class="block-filter d-flex justify-content-between align-items-center">
                <ul class="nav">
                    <li class="nav-item block-filter__item">
                        <a href="" class="nav-link block-filter__link block-filter__link--active">
                            All product
                        </a>
                    </li>
                    <li class="nav-item block-filter__item">
                        <a href="" class="nav-link block-filter__link">
                            t-shirt
                        </a>
                    </li>
                    <li class="nav-item block-filter__item">
                        <a href="" class="nav-link block-filter__link">
                            hoodies
                        </a>
                    </li>
                    <li class="nav-item block-filter__item">
                        <a href="" class="nav-link block-filter__link">
                            jacket
                        </a>
                    </li>
                </ul>
                <button class="btn btn-dark btn-sm">
                    <i class="bi bi-filter-circle d-inline-block me-1"></i> filter
                </button>
            </div>
            <div class="row mt-3">
                @foreach ($product as $item)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-item mb-3">

                        <div class="product-image">
                            <a href="{{BASE_URL . '/product/detail/' . $item->id}}">
                                <img srcset="./public/{{$item->image}} 2x" alt="" class="img-fluid">
                            </a>
                            <div
                                class="product__info d-flex justify-content-between align-items-center py-4 px-3 fs-6">
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
                            <h3><a href="" class="product__name">{{$item->name}}</a></h3>
                            <div class="product-meta d-flex justify-content-between align-items-center">
                                <a href="" class="product-category">{{$item->cate()->name}}</a>
                                <div class="product-price">
                                    <span>${{$item->price}}</span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
               
                <!--End .product-item-->
            </div>
        </div>
    </div>
</section>
<!--End .new-product-->
@endsection