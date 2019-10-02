@extends('master')
@section('body')
    <!-- END nav -->
    <!-- Apply for job starts from here -->
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
      <div class="wrapper wrapper--w900">
        <div class="container">
          <div class="row">
            <h3>Position: {{$jobs->job_position}}</h3>
          </div>
          <div class="row">
            <p>Closing on: {{$jobs->closing_date}}</p>
          </div>
          <div class="row mt-5">
            <h3>JOB RESPOSIBILITIES</h3>
          </div>
          <div class="row mt-5">
            <h5>
              <p>{{$jobs->job_description}}</p>
              <br />
            </h5>
          </div>
          <div>
            <a href="{{route('apply')}}" class="btn btn-primary">Click to Apply</a>
        </div>
        </div>
        

        <!-- <div class="card card-6">
          <div class="card-heading">
            <h2 class="title">Apply for job</h2>
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('newCandidates')}}" enctype="multipart/form-data" >
              @csrf
              <div class="form-row">
                <div class="name">Full name</div>
                <div class="value">
                  <input class="input--style-6" type="text" name="name" />
                </div>
              </div>
              <div class="form-row">
                <div class="name">Email address</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-6"
                      type="email"
                      name="email"
                      placeholder="example@email.com"
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Position</div>
                <div class="value">
                  <input class="input--style-6" type="text" name="position" value=""  />
                </div>
              </div>
              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">File
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="file[]" accept="file/*" class="form-control-file" multiple="true">
                                    <p>*Image size should be 500x500 px</p>
                                </div>
              </div>

              <div class="card-footer">
            <button class="btn btn--radius-2 btn--blue-2" name="submit" value="Confirm" type="submit">
              Send Application
            </button>
          </div>
            </form>
          </div>
    
        </div> -->
      </div>
    </div>
    <!-- Apply for job ends here -->
    @endsection