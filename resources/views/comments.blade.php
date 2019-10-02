@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Visitors Opinion</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <h3 class="text-center text-secondary">
            {{Session::get('message')}}
        </h3>
        <div class="content mt-3">
            @foreach($messages as $mgs)
        <div class="col-md-12 col-lg-12">
               <table class="table table-responsive">
               <thread>
                    <tbody>
                    <tr>
                    <th scope="col"><h6>{{$mgs->name}}<br>{{$mgs->email}}<br>Posted on: {{$mgs->created_at}}</h6></th>
                    <tr>
                    <tr>
                    <th scope="col"><p><strong>{{$mgs->message}}</strong></p> <br>
                    <p>
                        <a href="#" class="btn btn-danger" id="{{$mgs->id}}"
                               onclick="event.preventDefault()
                                       var check=confirm('Are you sure to delete this?')
                                       if(check)
                                       {
                                        document.getElementById('deleteCommentForm'+'{{$mgs->id}}').submit();
                                       }"
                            >Delete</a>
                            <form id="deleteCommentForm{{$mgs ->id}}" method="POST"
                                  action="{{route('delete-comment')}}">
                                @csrf
                                <input type="hidden" value="{{$mgs->id}}" name="id"/>
                            </form>
                        </p>
                    </th>
                    <tr>
                    </tbody>
                        </thread>
                        </table>
                        </div>
                        @endforeach
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
