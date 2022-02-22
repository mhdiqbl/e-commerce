@extends('layouts.home')
@section('content')
<!-- Hero Section Begin -->
    <section class="hero-section">
      <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{url('users/img/hero-1.jpg')}}">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Bag,kids</span>
                <h1>Black friday</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore
                </p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
            <div class="off-card">
              <h2>Sale <span>50%</span></h2>
            </div>
          </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{url('users/img/hero-2.jpg')}}">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <span>Bag,kids</span>
                <h1>Black friday</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore
                </p>
                <a href="#" class="primary-btn">Shop Now</a>
              </div>
            </div>
            <div class="off-card">
              <h2>Sale <span>50%</span></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <div class="product-slider owl-carousel">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="{{url('users/img/products/women-1.jpg')}}" alt="" />
                  <div class="sale">Sale</div>
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Coat</div>
                  <a href="#">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <div class="product-price">
                    $14.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="pi-pic">
                  <img src="{{url('users/img/products/women-2.jpg')}}" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5>Guangzhou sweater</h5>
                  </a>
                  <div class="product-price">
                    $13.00
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="pi-pic">
                  <img src="{{url('users/img/products/women-3.jpg')}}" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Towel</div>
                  <a href="#">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <div class="product-price">
                    $34.00
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="pi-pic">
                  <img src="{{url('users/img/products/women-4.jpg')}}" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Towel</div>
                  <a href="#">
                    <h5>Converse Shoes</h5>
                  </a>
                  <div class="product-price">
                    $34.00
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
      <div class="insta-item set-bg" data-setbg="{{url('users/img/insta-1.jpg')}}">
        <div class="inside-text">
          <i class="ti-instagram"></i>
          <h5><a href="#">colorlib_Collection</a></h5>
        </div>
      </div>
      <div class="insta-item set-bg" data-setbg="{{url('users/img/insta-2.jpg')}}">
        <div class="inside-text">
          <i class="ti-instagram"></i>
          <h5><a href="#">colorlib_Collection</a></h5>
        </div>
      </div>
      <div class="insta-item set-bg" data-setbg="{{url('users/img/insta-3.jpg')}}">
        <div class="inside-text">
          <i class="ti-instagram"></i>
          <h5><a href="#">colorlib_Collection</a></h5>
        </div>
      </div>
      <div class="insta-item set-bg" data-setbg="">
        <div class="inside-text">
          <i class="ti-instagram"></i>
          <h5><a href="#">colorlib_Collection</a></h5>
        </div>
      </div>
      <div class="insta-item set-bg" data-setbg="{{url('users/img/insta-5.jpg')}}">
        <div class="inside-text">
          <i class="ti-instagram"></i>
          <h5><a href="#">colorlib_Collection</a></h5>
        </div>
      </div>
      <div class="insta-item set-bg" data-setbg="{{url('users/img/insta-6.jpg')}}">
        <div class="inside-text">
          <i class="ti-instagram"></i>
          <h5><a href="#">colorlib_Collection</a></h5>
        </div>
      </div>
    </div>
@endsection
