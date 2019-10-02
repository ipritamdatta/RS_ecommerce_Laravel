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
                        <strong>Add New Product</strong>
                   </div>
                   <div class="card-body card-block">
                    <h3 class="text-center text-secondary">
                {{Session::get('message')}}
            </h3>
                        <div style="padding-left: 3%">
        <table>
            <td>
                <a href="{{route('productup')}}" class="btn btn-secondary">Click to Add Product</a>
            </td>
        </table>
        </div>
        <br>
                     </div>
                     
                    </div>
                 </div>
        </div>

        <div class="card-header">
            <strong>Delete or Edit Product</strong>
        </div>
                    <div class="card-body card-block">
                        <form action="{{route('productupdel')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                           <div class="row form-group">
                                 <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Catagory</label>
                                 </div>
                                 <div class="col-12 col-md-9">
                                    <select id="select" name="category_id" class="form-control">
                                        <option>Please select</option>
                                        @foreach($DataCategory as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Search"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                      </div>
                        </form>

    @if(isset($ProductData))
    <div id="description" class="col-md-12 col-lg-12 text-center">
        <table class="table table-bordered table-responsive">
        <thread>
                     <tr>
                         <th scope="col">Image</th>
                         <th scope="col">Product Title</th>
                         <th scope="col">Edit</th>
                         <th scope="col">Delete</th>
                     </tr>
                 </thread>
            <tbody>
            @foreach($ProductData as $product)
             <tr>
             <td scope="row">
                @php
                    $single_image = json_decode($product->image, true);
                @endphp
                <img alt="" class="responsive" src="{{asset($single_image[0])}}" style="height: 25%;width: 25%"></td>
             <td>{{$product->product_title}}</td>
             <td><a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-secondary">Edit</td>
        <td align='center'>
            <p>
            <a href="#" class="btn btn-danger" id="{{$product->id}}"
                    onclick="event.preventDefault()
                            var check=confirm('Are you sure to delete this?')
                            if(check)
                            {
                            document.getElementById('deleteCoverForm'+'{{$product->id}}').submit();
                            }">Delete</a>
                <form id="deleteCoverForm{{$product ->id}}" method="POST"
                        action="{{route('delete-product')}}">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="id"/>
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

