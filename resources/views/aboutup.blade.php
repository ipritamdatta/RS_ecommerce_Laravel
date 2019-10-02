@extends('amaster')
@section('body')
<!-- Right Panel -->


        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Add/Update Company Information</h1>
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
                        <strong>Add Company Information</strong>
                   </div>
                   <div class="card-body card-block">
                        <form action="{{route('new-about')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">
                                        About Company
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p style="color:red;">*Write something containing company information</p>
                                    <textarea name="para" rows="2" placeholder="Content..." class="form-control" required></textarea>
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
                        <div class="card">
                <div class="table-responsive">
                    <div class="card-header">
                        <strong>Delete or Edit Company Information</strong>
                   </div>
                  <table class="table table-bordered">
                    <tr>
                        <th>Company Info</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($about as $abt)
                    <tbody>
                    <tr>
                        <td>{{$abt->para}}</td>
                        <td>
                            <a href="{{route('edit-about',['id'=>$abt->id])}}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger" id="{{$abt->id}}"
                               onclick="event.preventDefault()
                                       var check=confirm('Are you sure to delete this?')
                                       if(check)
                                       {
                                        document.getElementById('deleteAboutForm'+'{{$abt->id}}').submit();
                                       }"
                            >Delete</a>
                            <form id="deleteAboutForm{{$abt ->id}}" method="POST"
                                  action="{{route('delete-about')}}">
                                @csrf
                                <input type="hidden" value="{{$abt->id}}" name="id"/>
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

    <!-- Text editor -->
    <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->

    <!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->
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