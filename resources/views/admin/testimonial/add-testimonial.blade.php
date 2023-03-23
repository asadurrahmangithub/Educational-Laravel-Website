@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Add Testimonial</h4>
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
                    <form action="{{route('save-testimonial')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add Testimonial Section</h3>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Testimonial Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="testimonial_title" value="{{$testimonial->testimonial_title}}" id="basic-default-name" placeholder="Enter Your Testimonial Title Name" />
                                    @if ($errors->has('testimonial_title'))
                                        <span class="text-danger">{{ $errors->first('testimonial_title') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Testimonial Sub Title</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="testimonial_subtitle"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Testimonial Sub Title Name"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                        >{{$testimonial->testimonial_subtitle}}</textarea>
                                    @if ($errors->has('testimonial_subtitle'))
                                        <span class="text-danger">{{ $errors->first('testimonial_subtitle') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Testimonial Description</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="testimonial_description"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Testimonial Description"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                            rows="5"
                                        >{{$testimonial->testimonial_description}}</textarea>
                                    @if ($errors->has('testimonial_description'))
                                        <span class="text-danger">{{ $errors->first('testimonial_description') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add Testimonial Card Section</h3>
                            <small class="text-muted float-end">input data</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="customer_name" value="{{$testimonial->customer_name}}" id="basic-default-name" placeholder="Enter Your Testimonial Card Customer Name" />
                                    @if ($errors->has('customer_name'))
                                        <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Customer Designation</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="customer_designation"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Customer Designation"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                        >{{$testimonial->customer_designation}}</textarea>
                                    @if ($errors->has('customer_designation'))
                                        <span class="text-danger">{{ $errors->first('customer_designation') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Customer Description</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="customer_description"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Customer Description"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                            rows="5"
                                        >{{$testimonial->customer_description}}</textarea>
                                    @if ($errors->has('customer_description'))
                                        <span class="text-danger">{{ $errors->first('customer_description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Customer Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($testimonial->image)}}" alt="" style="height: 100px; width: 100px">
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

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
