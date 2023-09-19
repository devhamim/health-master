@extends('admin.master')
@section('title')
    Package
@endsection
@section('body')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card mt-2">

                @if(Session::get('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
                @endif
                <div class="card-body mt-2">
                    <form class="form-horizontal" action="{{route('store.package')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" rows="5" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input type="number" class="form-control" min="0" rows="5" name="price" id="designation" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Options</label>
                        <div class="row ">
                            <div class="col-12" id="nearest-place-box">
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="options[]" id="inputCategory">
                                    </div>
                                    <div class="col-md-1">
                                        <button id="addFeaturesRow" type="button" class="btn btn-success btn-sm nearest-row-btn"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="hidden-location-box" class="d-none pl-3 pr-3">
                            <div class="delete-dynamic-location">
                                <div class="row mt-2">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="options[]" id="inputCategory">
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
                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>

{{--                        <th>Options</th>--}}
                        <th>Active/Deactive</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->name ?? null }}</td>
                            <td>{{ $package->price ?? null }}</td>
                            <td>
                                @if ($package->status == 1)
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($package->status == 0)
                                    <button class="btn btn-sm btn-danger">Deactive</button>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit.package',['id'=>$package->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
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
