@extends('admin.master')
@section('title')
    Appointment settings
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('store.appointment.info')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if($appointment_info!=null)
                            <input type="hidden" value="{{$appointment_info->id}}" name="id">
                        @endif

                        <div class="form-group">
                            <label>Appointment Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="title" placeholder="About Title" required>
                        </div>

                        <div class="form-group">
                            <label>Details One</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details1" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Details Two</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details2" ></textarea>
                        </div><div class="form-group">
                            <label>Details Three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details3" ></textarea>
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

                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($infos as $info)
                        <tr>
                            <td>{{ $info->title ?? null }}</td>
                            <td>
                                <a href="{{ route('edit.appointment.info',['id'=>$info->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>

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
@endsection
