@extends('amaster')
@section('body')
<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header">
                <h1>Add Store/Customer Care/Global Office</h1>
        </div>
    </div>
</div>
<h3 class="text-center text-secondary">
    {{Session::get('message')}}
</h3>
        
<div style="padding-left: 3%">
<table>
    <td>
        <a href="{{route('storeup')}}" class="btn btn-secondary">Click to Add</a>
    </td>
</table>
</div>

<div class="content mt-3">
<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header">
                <strong>Edit or Delete</strong>
        </div>
    </div>
</div>


<!-- <div> -->

                    <div class="card-body card-block">
                        <form action="{{route('storelist')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                           <div class="row form-group">
                                 <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Catagory</label>
                                 </div>
                                 <div class="col-12 col-md-9">
                                    <select id="select" name="category_id" class="form-control" onchange="showcategory()">
                                        <option>Please select</option>
                                        <option value="1">Brand Shop</option>
                                        <option value="2">Sales Center</option>
                                        <option value="3">Customer Care</option>
                                    </select>
                                    <p style="color:red;">*Please choose a category</p>
                                  </div>
                            </div>
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Search"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                      </div>
                        </form>

    @if(isset($Datastore))
    <div id="description" class="col-md-12 col-lg-12 text-center">
        <table class="table table-bordered table-responsive">
        
            <tr>
                <th>Name</th>
                <th>Edit</th>
                <th>EditDelete</th>
            </tr>
                 
            <tbody>
            @foreach($Datastore as $st)
             <tr>
             <td scope="row">{{$st->store_name}}</td>
             <td>
                 <a href="{{route('edit-store',['id'=>$st->id])}}" class="btn btn-secondary">Edit</a>
             </td>
            <td align='center'>
            <p>
            <a href="#" class="btn btn-danger" id="{{$st->id}}"
                    onclick="event.preventDefault()
                            var check=confirm('Are you sure to delete this?')
                            if(check)
                            {
                            document.getElementById('deleteCoverForm'+'{{$st->id}}').submit();
                            }">Delete</a>
                <form id="deleteCoverForm{{$st ->id}}" method="POST"
                        action="{{route('delete-store')}}">
                        <!-- {{route('del-cover')}} -->
                    @csrf
                    <input type="hidden" value="{{$st->id}}" name="id"/>
                </form>
            </p>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        @endif
                     </div>
<!-- </div> -->


         </div><!-- .content -->
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