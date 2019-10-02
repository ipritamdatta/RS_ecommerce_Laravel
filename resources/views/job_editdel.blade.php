@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Add Job Position</h1>
                </div>
            </div>
        </div>
        <div style="padding-left: 3%">
        <table>
            <td>
                <a href="{{route('jobup')}}" class="btn btn-secondary">Click to Add Job Position</a>
            </td>
        </table>
        </div>
        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Edit or Delete Job Position</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Available Jobs</strong>
                   </div>
                   <div class="card-body card-block">
                    <h1 class="text-center text-secondary">
                {{Session::get('message')}}
            </h1>
            <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                        <!-- <th>Images</th> -->
                        <th>Job Position</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($Jobs as $jb)
                    <tbody>
                    <tr>
						<td>{{$jb->job_position}}</td>
                        <td>
                            <a href="{{route('edit-job',['id'=>$jb->id])}}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger" id="{{$jb->id}}"
                               onclick="event.preventDefault()
                                       var check=confirm('Are you sure to delete this?')
                                       if(check)
                                       {
                                        document.getElementById('deleteAccessoriesForm'+'{{$jb->id}}').submit();
                                       }"
                            >Delete</a>
                            <form id="deleteAccessoriesForm{{$jb ->id}}" method="POST"
                                  action="{{route('delete-job')}}">
                                @csrf
                                <input type="hidden" value="{{$jb->id}}" name="id"/>
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