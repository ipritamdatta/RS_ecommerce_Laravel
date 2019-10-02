@extends('layouts.app')
@extends('amaster')
@section('content')

    <div class="content mt-3">
        <div class="col-lg-8">
                <div class="card">
                    <div class="card-header"><strong>Change password</strong></div>

                    <div class="card-body card-block">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                            @csrf

                            <div class="row form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <div class="col col-md-4">
                                    <label for="new-password" class="form-control-label">
                                        Current Password
                                    </label>
                                </div>

                                <div class="col-8 col-md-5">
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <div class="col col-md-4">
                                <label for="new-password" class="form-control-label">New Password</label>
                            </div>
                                <div class="col-8 col-md-5">
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-4">
                                <label for="new-password-confirm" class="form-control-label">Confirm New Password</label>
                            </div>
                                <div class="col-8 col-md-5">
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                </div>
                            </div>
                            <div class="card-footer">
                        <input type="submit" name="submit" value="Submit"class="btn btn-dark btn-sm fa fa-dot-circle-o">
                      </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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