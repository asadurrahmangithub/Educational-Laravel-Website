@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Add Event</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Add Event Section</h3>
                        <a class="text-muted float-end btn badge-outline-primary" href="{{route('manage-event')}}">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-event')}}" method="post">
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

                                    >{{old('event_title')}}</textarea>
                                    @if ($errors->has('event_title'))
                                        <span class="text-danger">{{ $errors->first('event_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Event Address</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="address"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Event Adders Name"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                    >{{old('address')}}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Event Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" value="{{old('date')}}" id="basic-default-name" placeholder="Enter Your Blog Public Date" />
                                    @if ($errors->has('date'))
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Start Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="start_time" value="{{old('start_time')}}" id="basic-default-name" placeholder="Enter Your Blog Public Date" />
                                    @if ($errors->has('start_time'))
                                        <span class="text-danger">{{ $errors->first('start_time') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">End Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="end_time" value="{{old('end_time')}}" id="basic-default-name" placeholder="Enter Your Blog Public Date" />
                                    @if ($errors->has('end_time'))
                                        <span class="text-danger">{{ $errors->first('end_time') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                                <div class="form-check">
                                    <input
                                        name="publication_status"
                                        class="form-check-input"
                                        type="radio"
                                        value="1"
                                        id="defaultRadio1"
                                        checked
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio1"> Public </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        name="publication_status"
                                        class="form-check-input"
                                        type="radio"
                                        value="2"
                                        id="defaultRadio2"
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio2"> UnPublic </label>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">Save Event</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
