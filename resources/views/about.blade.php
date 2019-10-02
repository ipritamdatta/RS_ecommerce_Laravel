@extends('master')
@section('body')
    <!-- END nav -->

    <div
      class="hero-wrap hero-bread"
      style="background-image: url('{{asset('/')}}images/bg1_1.jpg');"
    >
      <div class="container">
        <div
          class="row no-gutters slider-text align-items-center justify-content-center"
        >
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="{{route('index')}}">Home</a></span>
              <span>About us</span>
            </p>
            <h1 class="mb-0 bread">About us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb bg-light">
      <div class="container">
        <div class="row">
          <div
            class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
            style="background-image: url('{{asset('/')}}images/about.jpg');"
          ></div>
          <div class="col-md-7 py-5 wrap-about ftco-animate">
            <div class="heading-section-bold">
              <div>
                <h4>Our History</h4>
              </div>
            </div>
            @foreach($about as $abt)
            <div class="text-justify">
              <p>{{$abt->para}}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <hr>
    <section
      class="ftco-section ftco-no-pt pb-6 py-5 bg-light ftco-animate"
    >
      <!--  -->
    </section>

    @endsection