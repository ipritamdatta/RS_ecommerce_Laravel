@extends('master')
@section('body')
    <!-- END nav -->
    <!-- Apply for job starts from here -->
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
      <div class="wrapper wrapper--w900">
        <div class="card card-6">
          <div class="card-heading">
            <h2 class="title">Apply for job</h2>
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
          </div>
          <div class="card-body">
            <form id="myform" method="POST" action="{{route('newCandidates')}}" enctype="multipart/form-data" >
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
                <div class="name">Academic Qualifications</div>
                <div class="value">
                  <p style="color:red;">*Provide your academic qualifications shortly</p>
                                    <textarea name="academic_qua" rows="2" placeholder="Previous Experience..." class="form-control" required></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Previous Experience</div>
                <div class="value">
                  <p style="color:red;">*Provide Previous Company name and Job Duration Shortly</p><p style="color:red;">*Write N/A if no experience.</p>
                                    <textarea name="prev_exp" rows="2" placeholder="Previous Experience..." class="form-control" required></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Expected Salary</div>
                <div class="value">
                  <input class="input--style-6" type="text" name="expected_sal" />
                </div>
              </div>
              <div class="form-row">
                <div class="name">Age</div>
                <div class="value">
                  <input class="input--style-6" type="text" name="age" />
                </div>
              </div>
              <div class="form-row">
                <div class="name">Position</div>
                <div class="value">
                  <input class="input--style-6" type="text" name="position" value=""  />
                </div>
              </div>
              <div class=" form-row">
                                <div class="col col-md-3">
                                    <label for="file-input" class="form-control-label" style="font-weight: bold; color: black;">File
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="cv" class="form-control-file">
                                    <br>
                                        <label id="cv-error" style="color: red" class="error" for="cv">   {{ $errors->first('cv') }}
                                    @if ($errors->has('cv'))
                                        </label>
                                    @endif
                                    <p style="color:red;">*File should be in PDF Format.</p>
                                </div>

              </div>

              <div class="card-footer">
            <button class="btn btn-primary" name="submit" value="Confirm" type="submit">
              Send Application
            </button>
          </div>
            </form>
          </div>
    
        </div>
      </div>
    </div>
    <!-- Apply for job ends here -->
    @endsection
    @push('head')
    
<script>

$( "#myform" ).validate({
  rules: {
    cv: {
      required: true,
      extension: "xls|csv|pdf",
       filesize: 10000,
    }
  }
});
</script>
@endpush