@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Edit Products</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Edit Product</strong>
                   </div>
                   <div class="card-body card-block">
                        <form action="{{route('update-accesories',['id'=>$ac->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @php
                            $single_image = json_decode($ac->image, true);
                            @endphp

                            @foreach($single_image as $si)
                                    <img class ="img-responsive"src="{{asset($si)}}" style="height: 10%;width: 10%">
                            @endforeach

                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Product Image
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="image[]" accept="image/*" class="form-control-file" multiple="true">
                                </div>
                           </div>
                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Product Title
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">

                                    <input type="text"  name="model_name" value="{{$ac->model_name}}" class="form-control" required>
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                <label for="cc-payment" class="control-label mb-1">
                                    Product Price
                                </label>
                            </div>
                                <div class="col-12 col-md-9">
                                <input id="cc-pament" name="price" value="{{$ac->price}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                
                            </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">
                                        Product details
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="details" rows="2" class="form-control" required>{{$ac->details}}</textarea>
                                    
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

