@extends('amaster')
@section('body')
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                        <h1>Upload or Delete Cover Photo</h1>
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
                        <strong>Upload Cover Photo</strong>
                   </div>

                   <div class="card-body card-block">
                        <form action="{{route('new-cover')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Select Image
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file"  name="image" accept="image/*" class="form-control-file" required>
                                    <p style="color: red;">*Image size should be 1000x350 px</p>
                                </div>
                           </div>
                           <div class="row form-group">
                                 <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Catagory</label>
                                 </div>
                                 <div class="col-12 col-md-9">
                                    <select id="select" name="category_id" class="form-control">
                                        <option >Please select</option>
                                        <option value="1">Home Cover</option>
                                        <!-- <option value="2">Smartphone Cover</option>
                                        <option value="3">Accesories Cover</option> -->
                                    </select>
                                    <p style="color: red;">*This field is required</p>
                                  </div>
                            </div>
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Confirm"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                        <input type="reset"class="btn btn-dark btn-sm fa fa-ban">
                      </div>
                        </form>
                     </div>
                     <br>
                    <div class="card-header">
                        <strong>Delete Cover Photo</strong>
                   </div>
                    <div class="card-body card-block">
                        <form action="{{route('cover-del')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                           <div class="row form-group">
                                 <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Catagory</label>
                                 </div>
                                 <div class="col-12 col-md-9">
                                    <select id="select" name="category_id" class="form-control" onchange="showcategory()">
                                        <option>Please select</option>
                                        <option value="1">Home Cover</option>
                                        <!-- <option value="2">Smartphone Cover</option>
                                        <option value="3">Accesories Cover</option> -->
                                    </select>
                                    <p style="color: red;">*Choose a category</p>
                                  </div>
                            </div>
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Search"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                      </div>
                        </form>

    @if(isset($DataCovers))
    <div id="description" class="col-md-12 col-lg-12 text-center">
        <table class="table table-bordered table-responsive">
        <thread>
                     <tr>
                         <th scope="col">Image</th>
                         <th scope="col">Delete</th>
                     </tr>
                 </thread>
            <tbody>
            @foreach($DataCovers as $covers)
             <tr>
             <td scope="row"><img alt="" class="responsive" src="{{asset($covers->image)}}" style="height: 25%;width: 25%"></td>
        <td align='center'>
            <p>
            <a href="#" class="btn btn-danger" id="{{$covers->id}}"
                    onclick="event.preventDefault()
                            var check=confirm('Are you sure to delete this?')
                            if(check)
                            {
                            document.getElementById('deleteCoverForm'+'{{$covers->id}}').submit();
                            }">Delete</a>
                <form id="deleteCoverForm{{$covers ->id}}" method="POST"
                        action="{{route('del-cover')}}">
                        <!-- {{route('del-cover')}} -->
                    @csrf
                    <input type="hidden" value="{{$covers->id}}" name="id"/>
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

    <script>
            function showcategory(){
            var selectBox = document.getElementById('select');
            var userInput = selectBox.options[selectBox.selectedIndex].value;
            if (userInput == $sel->id){
            document.getElementById('description').style.visibility = 'visible';
            }else{
            document.getElementById('description').style.visibility = 'hidden';
            }
            return false;}
    </script>
@endsection