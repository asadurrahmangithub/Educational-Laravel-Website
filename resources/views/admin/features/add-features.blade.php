@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Add Features</h4>
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
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Add Features Section</h3>
                        <small class="text-muted float-end">Please Add</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-features')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Features Title</label>
                                <div class="col-sm-10">
                                            <textarea
                                                name="feature_title"
                                                id="basic-default-message"
                                                class="form-control"
                                                placeholder="Enter Your Features Title Name"
                                                aria-label="Hi, Do you have a moment to talk Joe?"
                                                aria-describedby="basic-icon-default-message2"
                                            >{{$featuresHeader->feature_title}}</textarea>
                                    @if ($errors->has('feature_title'))
                                        <span class="text-danger">{{ $errors->first('feature_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Features Sub Title</label>
                                <div class="col-sm-10">
                                            <textarea
                                                name="feature_subtitle"
                                                id="basic-default-message"
                                                class="form-control"
                                                placeholder="Enter Your Features Sub Title Name"
                                                aria-label="Hi, Do you have a moment to talk Joe?"
                                                aria-describedby="basic-icon-default-message2"
                                                rows="5"
                                            >{{$featuresHeader->feature_subtitle}}</textarea>
                                    @if ($errors->has('feature_subtitle'))
                                        <span class="text-danger">{{ $errors->first('feature_subtitle') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Right Site Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($featuresHeader->image)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">upload</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
