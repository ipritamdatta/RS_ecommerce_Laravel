@extends('master')
@section('body')
    <!-- END nav -->

    <!-- Global Office -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">OFFICE LOCATIONS</span>
            <h2 class="mb-3">BRAND SHOP</h2>
          </div>
        </div>
      </div>
    <div class="container ftco-animate">
      <div class="row">
        @foreach($store as $st)
        <div class="col-md-3">
          <div class="card" style="width: 110%; height: 250px;">
            
            <div class="card-body">
              <h5 class="card-title"><span class="icon-paper-plane"></span> {{$st->store_name}}</h5>
              <p class="card-text">
                Address: {{$st->address}}
              </p>
              <p class="card-text">
                Phone: {{$st->contact_num}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
        
      </section>
        
<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-3">SALES CENTER</h2>
          </div>
        </div>
      </div>
    <div class="container ftco-animate">
      <div class="row">
        @foreach($cus as $cs)
        <div class="col-md-3">
          <div class="card" style="width: 110%; height: 250px;">
            
            <div class="card-body">
              <h5 class="card-title"><span class="icon-paper-plane"></span> {{$cs->store_name}}</h5>
              <p class="card-text">
                Address: {{$cs->address}}
              </p>
              <p class="card-text">
                Phone: {{$cs->contact_num}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
        
      </section>
      <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-3">Global Office</h2>
          </div>
        </div>
      </div>
    <div class="container ftco-animate">
      <div class="row">
        @foreach($glob as $gb)
        <div class="col-md-3">
          <div class="card" style="width: 110%; height: 250px;">
            
            <div class="card-body">
              <h5 class="card-title"><span class="icon-paper-plane"></span> {{$gb->store_name}}</h5>
              <p class="card-text">
                Address: {{$gb->address}}
              </p>
              <p class="card-text">
                Phone: {{$gb->contact_num}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
        
      </section> -->
    @endsection