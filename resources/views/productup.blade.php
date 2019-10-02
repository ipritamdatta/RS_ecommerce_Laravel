@extends('amaster')
@section('body')

        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Upload Products</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Upload Product</strong>
                   </div>
                   <div class="card-body card-block">
                    <h3 class="text-center text-secondary">
                {{Session::get('message')}}
            </h3>
                        <form action="{{route('newProduct')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Product Image
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="image[]" accept="image/*" class="form-control-file" multiple="true">
                                    <p>*Image size should be 400x550 px</p>
                                </div>
                           </div>
                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Product Title
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="product_title" placeholder="Text" class="form-control">
                                </div>
                            </div>
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
                                        <!-- <option value="2">Women</option>
                                        <option value="3">Jewelery</option>
                                        <option value="4">Accessories</option>
                                        <option value="5">Appliances</option>
                                        <option value="6">Beauty and Personal Care</option> -->
                                    </select>
                                  </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                <label for="cc-payment" class="control-label mb-1">
                                    Product Price
                                </label>
                            </div>
                                <div class="col-12 col-md-9">
                                <input id="cc-pament" name="product_price" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                <label for="cc-payment" class="control-label mb-1">
                                    Description
                                </label>
                            </div>
                                <div class="col-12 col-md-9">
                                <input id="cc-pament" name="details" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                <label for="cc-payment" class="control-label mb-1">
                                    Release Date
                                </label>
                            </div>
                                <div class="col-12 col-md-9">
                                <input id="cc-pament" name="release_date" type="text" class="form-control" aria-required="true" aria-invalid="false">
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

