@extends('layout.asset-app')
@section('content')

    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">DIU Community</a></li>
            <li class="breadcrumb-item active">DIU Community</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-globe'></i>DIU Adda Community
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 order-lg-3 order-xl-2">
                <div class="card border mb-g">
                    <div class="card-body pl-4 pt-4 pr-4 pb-0">
                        <div class="d-flex flex-column">
                        <div class="border-0 flex-1 position-relative shadow-top">
                            <form action="{{ url('/community-post') }}" method="post">
                                @csrf
                                <label class="form-label" for="example-textarea">Create Post</label>
                                <div class="form-group">
                                    <select class="form-control" id="example-select" name="type" required>
                                        <option>Select Post Type</option>
                                        <option>Programming</option>
                                        <option>Education</option>
                                        <option>Social Awareness </option>
                                        <option>Study in Abroad</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="example-textarea" rows="5" name="status" required></textarea>
                                </div>

                                <div class="height-8 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <button type="submit" class="btn btn-info shadow-0 ml-auto">Post</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                                <!-- post comment -->
                                <div class="card mb-g">
                                    <div class="card-body pb-0 px-4">
                                        <div class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                                            <div class="d-inline-block align-middle status status-success mr-3">
                                                <span class="profile-image rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                            </div>
                                            <h5 class="mb-0 flex-1 text-dark fw-500">
                                                Legend Saidi
                                                <small class="m-0 l-h-n">
                                                    Human Resources & Psychiatry Division
                                                </small>
                                            </h5>
                                            <span class="text-muted fs-xs opacity-70">
                                                3 hours
                                            </span>
                                        </div>
                                        <div class="pb-3 pt-2 border-top-0 border-left-0 border-right-0 text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                        <div class="d-flex align-items-center demo-h-spacing py-3">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark">
                                                <i class="fas fa-heart fs-xs mr-1 text-danger"></i> <span>2 Likes</span>
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark">
                                                <i class="fal fa-comment fs-xs mr-1"></i> <span>2 Comments</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 px-4 border-faded border-right-0 border-bottom-0 border-left-0">
                                        <div class="d-flex flex-column align-items-center">
                                            <!-- comment -->
                                            <div class="d-flex flex-row w-100 py-4">
                                                <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                                    <span class="profile-image profile-image-md rounded-circle d-block mt-1" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="mb-0 flex-1 text-dark">
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="text-dark fw-500">
                                                            Test name
                                                        </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                            15 minutes
                                                        </span>
                                                    </div>
                                                    <p class="mb-0">
                                                        Excellent work, looking forward to it.
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="m-0 w-100">
                                            <!-- comment end -->
                                            <!-- comment -->
                                            <div class="d-flex flex-row w-100 py-4">
                                                <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                                    <span class="profile-image profile-image-md rounded-circle d-block mt-1" style="background-image:url('img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="mb-0 flex-1 text-dark">
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="text-dark fw-500">
                                                            Legend Saidi
                                                        </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                            3 minutes
                                                        </span>
                                                    </div>
                                                    <p class="mb-0">
                                                        Congrats mate!
                                                    </p>
                                                    <div class="pl-0 d-flex flex-row w-100 pb-0 pt-4">
                                                        <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                                            <span class="profile-image profile-image-md rounded-circle d-block mt-1" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                        </div>
                                                        <div class="mb-0 flex-1 text-dark">
                                                            <div class="d-flex">
                                                                <a href="javascript:void(0);" class="text-dark fw-500">
                                                                    Dr. John Cook PhD
                                                                </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                                    30 seconds
                                                                </span>
                                                            </div>
                                                            <p class="mb-0">
                                                                Thanks!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="m-0 w-100">
                                            <!-- comment end -->
                                            <!-- add comment -->
                                            <div class="py-3 w-100">
                                                <textarea class="form-control border-0 p-0" rows="2" placeholder="add a comment..."></textarea>
                                            </div>
                                            <!-- add comment end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- post comment - end -->
                            </div>
        </div>
    </main>


@endsection