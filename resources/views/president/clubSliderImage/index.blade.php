@extends('layouts.president')
@section('title', 'Club Image Slider')
@section('content')

    <style>
        .form-element input {
            display: none;
        }

        .form-element{
            display: flex;
            justify-content: center;
        }

        .form-element img {
            cursor: pointer;
            width:100%;
            height: 300px;
            object-fit: cover;
        }

        .form-element div {
            position: relative;
            height: 40px;
            margin-top: -40px;
            background: rgba(0, 0, 0, 0.5);
            text-align: center;
            line-height: 40px;
            font-size: 13px;
            color: #f5f5f5;
            font-weight: 600;
        }

        .form-element div span {
            font-size: 12px;
        }

        #inputBar:hover {
            background: #4c84ff !important;
            transition: all 200ms;
        }
    </style>

    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>Club Slider Images</h1>
            </div>
            <div class="text-right">
                <a href="{{route('president.dashboard')}}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center" style="min-height: 70vh">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-center flex-column">
                        @if($slider_image_1 == null)
                            <form action="{{route('president.slider.image.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-element">
                                    <input type="file" id="file-1" accept="image/*" name="slider_img">
                                    <input type="hidden" name="slider_no" value="1">
                                    <label for="file-1" id="file-1-preview">
                                        <img src="{{ asset('backend/assets/club slider images/slider1.png') }}" alt="">
                                        <div id="inputBar" style="cursor: pointer">
                                            <span>Upload</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <input class="btn btn-success" type="submit" value="Add">
                                </div>
                            </form>
                        @else
                            <form action="{{route('president.slider.image.update', $slider_image_1->id)}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-element">
                                    <input type="file" id="file-1" accept="image/*" name="slider_img">
                                    <input type="hidden" name="slider_old_img"
                                           value="{{$slider_image_1->slider_image}}">
                                    <input type="hidden" name="slider_no" value="1">
                                    <label for="file-1" id="file-1-preview">
                                        <img src="{{ asset($slider_image_1->slider_image) }}" alt="">
                                        <div id="inputBar" style="cursor: pointer">
                                            <span>Upload</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <input class="btn btn-warning" type="submit" value="Update">
                                </div>
                            </form>
                        @endif
                    </div>
                    <div class="col-md-4 d-flex justify-content-center flex-column">
                        @if($slider_image_2 == null)
                            <form action="{{route('president.slider.image.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-element">
                                    <input type="file" id="file-2" accept="image/*" name="slider_img">
                                    <input type="hidden" name="slider_no" value="2">
                                    <label for="file-2" id="file-2-preview">
                                        <img src="{{ asset('backend/assets/club slider images/slider2.png') }}" alt="">
                                        <div id="inputBar" style="cursor: pointer">
                                            <span>Upload</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <input class="btn btn-success" type="submit" value="Add">
                                </div>
                            </form>
                        @else
                            <form action="{{route('president.slider.image.update', $slider_image_2->id)}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-element">
                                    <input type="file" id="file-2" accept="image/*" name="slider_img">
                                    <input type="hidden" name="slider_old_img"
                                           value="{{$slider_image_2->slider_image}}">
                                    <input type="hidden" name="slider_no" value="2">
                                    <label for="file-2" id="file-2-preview">
                                        <img src="{{ asset($slider_image_2->slider_image) }}" alt="">
                                        <div id="inputBar" style="cursor: pointer">
                                            <span>Upload</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <input class="btn btn-warning" type="submit" value="Update">
                                </div>
                            </form>
                        @endif
                    </div>
                    <div class="col-md-4 d-flex justify-content-center flex-column">
                        @if($slider_image_3 == null)
                            <form action="{{route('president.slider.image.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-element">
                                    <input type="file" id="file-3" accept="image/*" name="slider_img">
                                    <input type="hidden" name="slider_no" value="3">
                                    <label for="file-3" id="file-3-preview">
                                        <img src="{{asset('backend/assets/club slider images/slider3.png')}}" alt="">
                                        <div id="inputBar" style="cursor: pointer">
                                            <span>Upload</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <input class="btn btn-success" type="submit" value="Add">
                                </div>
                            </form>
                        @else
                            <form action="{{route('president.slider.image.update', $slider_image_3->id)}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-element">
                                    <input type="file" id="file-3" accept="image/*" name="slider_img">
                                    <input type="hidden" name="slider_old_img"
                                           value="{{ $slider_image_3->slider_image }}">
                                    <input type="hidden" name="slider_no" value="3">
                                    <label for="file-3" id="file-3-preview">
                                        <img src="{{ asset($slider_image_3->slider_image) }}" alt="">
                                        <div id="inputBar" style="cursor: pointer">
                                            <span>Upload</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <input class="btn btn-warning" type="submit" value="Update">
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function previewBeforeUpload(id) {
            document.querySelector("#" + id).addEventListener("change", function (e) {
                if (e.target.files.length == 0) {
                    return;
                }
                let file = e.target.files[0];
                let url = URL.createObjectURL(file);
                document.querySelector("#" + id + "-preview div").innerText = file.name;
                document.querySelector("#" + id + "-preview img").src = url;
            });
        }

        previewBeforeUpload("file-1");
        previewBeforeUpload("file-2");
        previewBeforeUpload("file-3");
    </script>
@endsection
