@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Event Header</h4>
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
                        <h3 class="mb-0">Add Event Header Section</h3>
                        <small class="text-muted float-end">Please Add</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-event-header')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Event Title</label>
                                <div class="col-sm-10">
                                            <textarea
                                                name="event_title"
                                                id="basic-default-message"
                                                class="form-control"
                                                placeholder="Enter Your Event Title Name"
                                                aria-label="Hi, Do you have a moment to talk Joe?"
                                                aria-describedby="basic-icon-default-message2"
                                            >{{$eventHeader->event_title}}</textarea>
                                    @if ($errors->has('event_title'))
                                        <span class="text-danger">{{ $errors->first('event_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Event Sub Title</label>
                                <div class="col-sm-10">
                                            <textarea
                                                name="event_subtitle"
                                                id="basic-default-message"
                                                class="form-control"
                                                placeholder="Enter Your Event Sub Title Name"
                                                aria-label="Hi, Do you have a moment to talk Joe?"
                                                aria-describedby="basic-icon-default-message2"
                                                rows="5"
                                            >{{$eventHeader->event_subtitle}}</textarea>
                                    @if ($errors->has('event_subtitle'))
                                        <span class="text-danger">{{ $errors->first('event_subtitle') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Left Site Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($eventHeader->image)}}" alt="" style="height: 120px; width: 120px">
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
                                    <button type="submit" class="btn badge-outline-success p-2">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
