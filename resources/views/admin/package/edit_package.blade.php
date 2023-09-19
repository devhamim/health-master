@extends('admin.master')
@section('title')
    Package edit
@endsection
@section('body')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{route('update.package')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$package->id}}" name="id">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" rows="5" name="name" value="{{$package->name}}" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" rows="5" name="price" value="{{$package->price}}" id="designation" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Options</label>
                        <div class="row ">
                            <div class="col-12" id="nearest-place-box">
                                <div class="row inputFeatures">
                                    @foreach(json_decode($package->options) as $key=>$option)

                                        @if($option != null)
                                            <div class="col-12 delete-dynamic-location">
                                                <div class="row">
                                                    <div class="col-md-11 mt-2">
                                                        <input type="text" class="form-control" name="options[]" value="{{$option}}" id="inputFeature">
                                                    </div>
                                                    @if($key == 0)
                                                        <div class="col-md-1 mt-2">
                                                            <button id="addFeaturesRow" type="button" class="btn btn-success btn-sm nearest-row-btn"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                                        </div>
                                                    @else
                                                        <div class="col-md-1">
                                                            <button type="button" class="btn btn-danger btn-sm nearest-row-btn removeNearestPlaceRow"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                                    </svg></i></button>
                                                        </div>
                                                    @endif
                                                </div>
                                                @endif
                                            </div>
                                            @endforeach
                                </div>
                            </div>
                        </div>

                        <div id="hidden-location-box" class="d-none pl-3 pr-3">
                            <div class="delete-dynamic-location">
                                <div class="row mt-2">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="options[]" id="inputFeautres">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm nearest-row-btn removeNearestPlaceRow"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Add to Homepage</label>
                                <select class="form-control" name="add_home">
                                    <option value="1" @if ($package->add_home == 1) selected @endif>Yes</option>
                                    <option value="0" @if ($package->add_home == 0) selected @endif>No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Active/Deactive</label>
                                <select class="form-control" name="status">
                                    <option value="1" @if ($package->status == 1) selected @endif>Active</option>
                                    <option value="0" @if ($package->status == 0) selected @endif>Deactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $("#addFeaturesRow").on("click",function(){
                    var new_row=$("#hidden-location-box").html();
                    $("#nearest-place-box").append(new_row)

                })
                $(document).on('click', '.removeNearestPlaceRow', function() {
                    $(this).closest('.delete-dynamic-location').remove();
                });


                //end dynamic nearest place add and remove



            });

        })(jQuery);

    </script>
@endsection
