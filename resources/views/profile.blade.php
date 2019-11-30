@extends('layout.asset-app')
@section('content')


	<main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
            <li class="breadcrumb-item">Page Views</li>
            <li class="breadcrumb-item active">Profile</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="row">
            <div class="col-lg-6 col-xl-3 order-lg-1 order-xl-1">
                <!-- profile summary -->
                <div class="card mb-g rounded-top">
                    <div class="row no-gutters row-grid">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                <img src="{{asset('frontend/img/demo/avatars/avatar-admin-lg.png')}}" class="rounded-circle shadow-2 img-thumbnail" alt="">
                                <h5 class="mb-0 fw-700 text-center mt-3">
                                   {{Auth::user()->name}}
                                   @foreach($info as $singleData)
                                    <small class="text-muted mb-0">Dhaka, Bangladesh</small>
                                    <small>Daffodil International University, {{$singleData->department}}</small>
                                    <b> Blood Group: {{ $singleData->blood }} "{{ $singleData->bloodStatus }}"</b> <br> <BR>
                                    @endforeach
                                    <?php
                                        $id = Auth::user()->id;
                                    ?>
                                    <a href="{{ url('profile/edit',Auth::user()->id) }}">Update Profile</a>

                                </h5>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-g rounded-top">
                    <div class="row no-gutters row-grid">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                <div class="mt-4 text-center demo">
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#3b5998">
                                        FB
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#38A1F3">
                                        GITHUB
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#db3236">
                                        LINKEDIN
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#0077B5">
                                        YOUTUBE
                                    </a>
                                    <a href="javascript:void(0);" class="fs-xl" style="color:#00AFF0">
                                        SKYPE
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                <div class="card border mb-g">
                    <div class="card-body pl-4 pt-4 pr-4 pb-0">
                        <div class="d-flex flex-column">

                        	All Activity

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 order-lg-2 order-xl-3">
                <!-- rating -->
                <div class="card mb-g">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl">
                                   {{Auth::user()->name}}
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">LARAVEL</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">BOOTSTRAP</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">CSS</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">HTML</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">PHP</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-danger-300 bg-warning-gradient" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- skills -->
            </div>
        </div>
    </main>
<!-- END Page Settings -->

        <script src="{{ asset('frontend/js/vendors.bundle.js')}}"></script>
        <script src="{{ asset('frontend/s/app.bundle.js')}}"></script>
        <script>
            $(document).ready(function() {

            });

        </script>
@endsection