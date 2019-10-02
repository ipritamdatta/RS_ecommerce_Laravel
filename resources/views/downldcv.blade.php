@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Add Job Position</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Applicant List</strong>
                   </div>
                   <div class="card-body card-block">
                    <h1 class="text-center text-secondary">
                {{Session::get('message')}}
            </h1>
            <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Qualifications</th>
                        <th>Experience</th>
                        <th>Expected Salary</th>
                        <th>CV</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($candidateslist as $cl)
                    <tbody>
                    <tr>
						<td>{{$cl->name}}</td>
                        <td>{{$cl->age}}</td>
                        <td>{{$cl->position}}</td>
                        <td>{{$cl->academic_qua}}</td>
                        <td>{{$cl->prev_exp}}</td>
                        <td>{{$cl->expected_sal}}</td>
                        <td><a href="{{asset('/cvbank/'.$cl->cv)}}" download><img src="{{asset('/')}}images/pdf-download.png" height="40px" width="60px" /></a></td>
                        <td>
                            <a href="#" class="btn btn-danger" id="{{$cl->id}}"
                               onclick="event.preventDefault()
                                       var check=confirm('Are you sure to delete this?')
                                       if(check)
                                       {
                                        document.getElementById('deleteAccessoriesForm'+'{{$cl->id}}').submit();
                                       }"
                            >Delete</a>
                            <form id="deleteAccessoriesForm{{$cl ->id}}" method="POST"
                                  action="{{route('delete-applicant')}}">
                                @csrf
                                <input type="hidden" value="{{$cl->id}}" name="id"/>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                  </table>
              </div>
                        
                     </div>
                    </div>
                 </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('/')}}vendors/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('/')}}vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{asset('/')}}vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}assets/js/main.js"></script>


    <script src="{{asset('/')}}vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/js/dashboard.js"></script>
    <script src="{{asset('/')}}assets/js/widgets.js"></script>
    <script src="{{asset('/')}}vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="{{asset('/')}}vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="{{asset('/')}}vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
@endsection