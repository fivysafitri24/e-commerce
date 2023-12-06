@extends('layouts.frontend')

@section('content')
        <!-- Breadcrumb Section Begin -->
        <section class="mb-5">
            <div class="container">
                <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.jpg') }}">
                    <div class="hero__text">
                        <span>HOMEMADE</span>
                            <h2>Kue Kering <br />& Brownies</h2>
                            <p>Cita Rasa Autentik dalam Setiap Gigitan <br> Dari Kami untuk Anda</p>
                            <a href="#" class="primary-btn">BELANJA SEKARANG</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Categories Section Begin -->
        <section class="categories mt-5">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-1.jpg') }}"
                            >
                                <h5><a href="#">Bolu</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-2.jpg') }}"
                            >
                                <h5><a href="#">Brownies</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-3.jpg') }}"
                            >
                                <h5><a href="#">Kue Kering</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-4.jpg') }}"
                            >
                                <h5><a href="#">Paper Bag</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-5.jpg') }}"
                            >
                                <h5><a href="#">Paket Raya</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Featured Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-1.jpg') }}">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Brownies</a></h6>
                                <h5>Rp 45.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-2.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Kastengel</a></h6>
                                <h5>Rp 60.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-3.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Thumbprint</a></h6>
                                <h5>Rp 60.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-4.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Kue Lontar Besar</a></h6>
                                <h5>Rp 120.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-5.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Bolu Pandan</a></h6>
                                <h5>Rp 55.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-6.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Paper Bag & Kartu Ucapan</a></h6>
                                <h5>Rp 25.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-7.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Paket Raya</a></h6>
                                <h5>Rp 210.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-8.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Nastar Polos</a></h6>
                                <h5>Rp 55.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Section End -->
@endsection

