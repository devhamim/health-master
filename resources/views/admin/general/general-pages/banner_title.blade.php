
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('store.banner.title')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="name" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Select Page for the title and banner</label>
                            <select class="form-control" name="page">
                                <option value="" disabled selected>Select Page</option>
                                <option value="services">Services</option>
                                <option value="doctors">Doctors</option>
                                <option value="managements">Managements</option>
                                <option value="testimonial">Testimonial</option>
                                <option value="packages">Packages</option>
                                <option value="blogs">Blogs</option>
                                <option value="appointment">Appointment</option>
                                <option value="gallery">Gallery</option>
                                <option value="contacts">Contacts</option>
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
                        <th>Title</th>
                        <th>Image</th>

                        <th>Page</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($banner_titles as $data)
                        <tr>
                            <td>{{ $data->title ?? null }}</td>
                            <td><img src="{{ asset($data->image) }}" style="height: 100px"></td>

                            <td>{{$data->page ?? null}}</td>
                            <td>
                                <a href="{{ route('edit.banner.title',['id'=>$data->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>
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

