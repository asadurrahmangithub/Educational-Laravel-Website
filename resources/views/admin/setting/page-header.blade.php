@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Header Section</h4>
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
                    <form action="{{route('save-page-header')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Website Header Meta Keyword</h3>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Meta Keyword</label>
                                <div class="col-sm-10">
                                                <textarea
                                                    name="meta_keyword"
                                                    id="basic-default-message"
                                                    class="form-control"
                                                    placeholder="Enter Your Website Header Meta Keyword"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"
                                                >{{$pageHeader->meta_keyword}}</textarea>
                                    @if ($errors->has('meta_keyword'))
                                        <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Page Header Logo And Icon Image</h3>
                            <small class="text-muted float-end">Upload Image</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Logo</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img3" src="{{asset($pageHeader->logo)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="logo" onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Favicon Icon</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img4" src="{{asset($pageHeader->icon)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="icon" onchange="document.getElementById('img4').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
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
