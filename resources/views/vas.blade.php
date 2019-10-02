@extends('master')
@section('body')
    <!-- END nav -->

    
      <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-3">Customer Care</h2>
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
        
      </section>
    @endsection