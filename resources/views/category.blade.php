@extends('amaster')
@section('body')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Add New Category</strong>
                   </div>
                   <div class="card-body card-block">
                    <h3 class="text-center text-secondary">
                {{Session::get('message')}}
            </h3>
                        <form action="{{route('newCategory')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Category Name
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="category_name" placeholder="Text" class="form-control">
                                </div>
                            </div>
                            
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Confirm"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                        <input type="reset"class="btn btn-dark btn-sm fa fa-ban">
                      </div>
                        </form>
                     </div>
                     
                    </div>
                 </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Cetagories</strong>
                   </div>
                   <div class="card-body card-block">
                    <h3 class="text-center text-secondary">
                {{Session::get('message')}}
            </h3>
            <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                        <th>Cetagories</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($DataCategory as $cat)
                    <tbody>
                    <tr>
                        <td>{{$cat->category_name}}</td>
                        <td>
                            <a href="{{route('edit-category',['category_id'=>$cat->category_id])}}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger" id="{{$cat->category_id}}"
                               onclick="event.preventDefault()
                                       var check=confirm('Are you sure to delete this?')
                                       if(check)
                                       {
                                        document.getElementById('deleteAccessoriesForm'+'{{$cat->category_id}}').submit();
                                       }"
                            >Delete</a>
                            <form id="deleteAccessoriesForm{{$cat ->category_id}}" method="POST"
                                  action="{{route('delete-category')}}">
                                @csrf
                                <input type="hidden" value="{{$cat->category_id}}" name="category_id"/>
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
        </div>
<div>
    
</div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('/')}}/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{asset('/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}/assets/js/main.js"></script>


    <script src="{{asset('/')}}/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="{{asset('/')}}/assets/js/dashboard.js"></script>
    <script src="{{asset('/')}}/assets/js/widgets.js"></script>
    <script src="{{asset('/')}}/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="{{asset('/')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="{{asset('/')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
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

