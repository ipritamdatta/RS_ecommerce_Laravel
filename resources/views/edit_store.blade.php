@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Edit Store Location</h1>
                </div>
            </div>
        </div>
        <h3 class="text-center text-secondary">
            {{Session::get('message')}}
        </h3>
        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Edit Store</strong>
                   </div>
                   <div class="card-body card-block">
                        <form action="{{route('update-store',['id'=>$str->id])}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Store Name
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="store_name" value="{{$str->store_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Location Type
                                    </label>
                                </div>
                            <div class="col-12 col-md-9">
                                    <select id="select" name="category_id" class="form-control">
                                        <option>Please select</option>
                                        <option value="1">Brand Shop</option>
                                        <option value="2">Sales Center</option>
                                        <option value="3">Customer Care</option>
                                    </select>
                                </div>
                              </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Store Address
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="address" value="{{$str->address}}" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Contact Number
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="contact_num" value="{{$str->contact_num}}" class="form-control">
                                </div>
                            </div>
                            
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Confirm"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                        <input type="reset"class="btn btn-dark btn-sm fa fa-ban">
                      </div>
                        </form>
                    </div>
                    <br>
                    <br>
                    <br>
                    </div>
                 </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Text editor -->
    <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->

    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <!-- <script src="{{asset('/')}}/js/nicEdit.js"></script> -->
    <!-- Text editor ends -->
    
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