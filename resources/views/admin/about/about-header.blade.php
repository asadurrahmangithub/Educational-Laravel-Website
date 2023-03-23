@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>About Header</h4>
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
                    <form action="{{route('save-header')}}" method="post">
                        @csrf
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add About Header Section</h3>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">About Title</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="about_title"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About Title Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$aboutHeader->about_title}}</textarea>
                                    @if ($errors->has('about_title'))
                                        <span class="text-danger">{{ $errors->first('about_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">About Sub Title</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="about_subtitle"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About Sub Title Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                    rows="3"
                                                >{{$aboutHeader->about_subtitle}}</textarea>
                                    @if ($errors->has('about_subtitle'))
                                        <span class="text-danger">{{ $errors->first('about_subtitle') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">About Description</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="about_description"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About Description Text"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                    rows="5"
                                                >{{$aboutHeader->about_description}}</textarea>
                                    @if ($errors->has('about_description'))
                                        <span class="text-danger">{{ $errors->first('about_description') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add About Header Icon Right Title</h3>
                            <small class="text-muted float-end">input data</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">1st Text</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="text_one"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About 1st Text Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$aboutHeader->text_one}}</textarea>
                                    @if ($errors->has('text_one'))
                                        <span class="text-danger">{{ $errors->first('text_one') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">2nd Text</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="text_second"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About 2nd Text Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$aboutHeader->text_second}}</textarea>
                                    @if ($errors->has('text_second'))
                                        <span class="text-danger">{{ $errors->first('text_second') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">3rd Text</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="text_third"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About 3rd Text Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$aboutHeader->text_third}}</textarea>
                                    @if ($errors->has('text_third'))
                                        <span class="text-danger">{{ $errors->first('text_third') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">4th Text</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="text_four"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About 4th Text Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$aboutHeader->text_four}}</textarea>
                                    @if ($errors->has('text_four'))
                                        <span class="text-danger">{{ $errors->first('text_four') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">5th Text</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="text_five"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your About 5th Text Name"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$aboutHeader->text_five}}</textarea>
                                    @if ($errors->has('text_five'))
                                        <span class="text-danger">{{ $errors->first('text_five') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">Save Header</button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
