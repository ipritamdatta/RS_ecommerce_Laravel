@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Update Company Information</h1>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-lg-12">
               <div class="card">
                   <div class="card-header">
                        <strong>Edit Company Information</strong>
                   </div>
                   <div class="card-body card-block">
                        <form action="{{route('update-about',['id'=>$abt->id])}}" method="post" class="form-horizontal">
                            <!-- {{route('upabout')}} -->
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">
                                        About Company
                                    </label>
                                </div>
                                <!-- <p>*Write a Paragraph about the company</p> -->
                                <div class="col-12 col-md-9">
                                    <textarea name="para" rows="2" placeholder="Content..." class="form-control" required>{{$abt->para}}</textarea>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Confirm"class="btn btn-dark btn-sm fa fa-dot-circle-o">
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
    <!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->

    <!-- <script src="{{asset('/')}}/js/nicEdit.js"></script> -->
    
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