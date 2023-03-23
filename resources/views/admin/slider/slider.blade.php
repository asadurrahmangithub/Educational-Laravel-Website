@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Home Slider</h4>
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
                    <form action="{{route('save-slider')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add Home Slider Text Section</h3>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Slider Title</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="slider_title"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Home Slider Title Name"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                        >{{$slider->slider_title}}</textarea>
                                    @if ($errors->has('slider_title'))
                                        <span class="text-danger">{{ $errors->first('slider_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Slider Title 2</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="slider_title_two"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Home Slider Title Two"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                        >{{$slider->slider_title_two}}</textarea>
                                    @if ($errors->has('slider_title_two'))
                                        <span class="text-danger">{{ $errors->first('slider_title_two') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Slider Sub Title</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="slider_subtitle"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Home Slider Sub Title"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                            rows="3"
                                        >{{$slider->slider_subtitle}}</textarea>
                                    @if ($errors->has('slider_subtitle'))
                                        <span class="text-danger">{{ $errors->first('slider_subtitle') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Slider Description</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="slider_description"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Home Slider Description"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                            rows="5"
                                        >{{$slider->slider_description}}</textarea>
                                    @if ($errors->has('slider_description'))
                                        <span class="text-danger">{{ $errors->first('slider_description') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add Home Slider All Image</h3>
                            <small class="text-muted float-end">Upload Image</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Background Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($slider->background)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="background" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Background Person</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img1" src="{{asset($slider->person)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="person" onchange="document.getElementById('img1').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Aliment icon 1</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img2" src="{{asset($slider->icon1)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                    @if($slider->icon1)
                                        <a href="{{url('admin/slider-icon1/'.$slider->id.'/delete')}}" class="btn badge-outline-danger mdi-format-float-center" style="height: 30px; width: 100px">Remove</a>
                                    @endif
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="icon1" onchange="document.getElementById('img2').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Aliment icon 2</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img3" src="{{asset($slider->icon2)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                    @if($slider->icon2)
                                        <a href="{{url('admin/slider-icon2/'.$slider->id.'/delete')}}" class="btn badge-outline-danger mdi-format-float-center" style="height: 30px; width: 100px">Remove</a>
                                    @endif
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="icon2" onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Aliment icon 3</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img4" src="{{asset($slider->icon3)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                    @if($slider->icon3)
                                        <a href="{{url('admin/slider-icon3/'.$slider->id.'/delete')}}" class="btn badge-outline-danger mdi-format-float-center" style="height: 30px; width: 100px">Remove</a>
                                    @endif
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="icon3" onchange="document.getElementById('img4').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end py-3">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">UPLOAD SLIDER</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
