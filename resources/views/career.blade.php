@extends('master')
@section('body')
    <!-- END nav -->

    <div class="container">
      <div
        class="row no-gutters slider-text align-items-center justify-content-center"
      >
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs">
            <span class="mr-2">
            <span>Avaiable Jobs</span>
          </p>
          <h1 class="mb-0 bread">Available Jobs</h1>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb bg-light">
      <div class="container">
        <div class="row">
          @foreach($jobs as $jb)
                <div class="card" style="width: 60%; margin-bottom: 15px;">
                        <div class="card-header">
                          {{$jb->job_position}}
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{$jb->job_position}}</h5>
                          <p class="card-text">Starts From: {{$jb->created_at}}</p>
                          <p class="card-text">Last Date of Application:{{$jb->closing_date}}</p>
                          <a href="{{route('details',['id'=>$jb->id])}}" class="btn btn-primary">See Details</a>
                        </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>

    @endsection