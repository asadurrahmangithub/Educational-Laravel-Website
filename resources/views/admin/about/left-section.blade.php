@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>About Left Section Image</h4>
        @if(session()->has('message'))
            <div class="alert badge-outline-success">
                {{session()->get('message')}}
            </div>
    @endif

    <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <form action="{{route('save-image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">About Left Section Background Image</h3>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Background</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img1" src="{{asset($aboutImage->background)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="background" onchange="document.getElementById('img1').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                    @if ($errors->has('background'))
                                        <span class="text-danger">{{ $errors->first('background') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Background Person</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img2" src="{{asset($aboutImage->background_person)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="background_person" onchange="document.getElementById('img2').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                    @if ($errors->has('background_person'))
                                        <span class="text-danger">{{ $errors->first('background_person') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">About Left Section Icon Image</h3>
                            <small class="text-muted float-end">Upload Image</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Icon 1</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img3" src="{{asset($aboutImage->icon_one)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="icon_one" onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Icon 2</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img4" src="{{asset($aboutImage->icon_two)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="icon_two" onchange="document.getElementById('img4').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end py-5">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">Upload</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
