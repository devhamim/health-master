@extends('admin.master')
@section('body')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">

            @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="card-body">
                <form class="form-horizontal" action="{{route('update.banner.title',['id'=>$banner_title->id])}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" rows="5" value="{{$banner_title->title}}" name="title" id="name" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{asset($banner_title->image)}}" height="100" width="400" alt="">
                    </div>
                    <div class="form-group">
                        <label>Select Page for the title and banner</label>
                        <select class="form-control" name="page">
                            <option value="" disabled selected>Select Page</option>
                            <option value="services" {{$banner_title->page == 'services'?'selected':''}}>Services</option>
                            <option value="doctors" {{$banner_title->page == 'doctors'?'selected':''}}>Doctors</option>
                            <option value="managements" {{$banner_title->page == 'managements'?'selected':''}}>Managements</option>
                            <option value="testimonial" {{$banner_title->page == 'testimonial'?'selected':''}}>Testimonial</option>
                            <option value="packages" {{$banner_title->page == 'packages'?'selected':''}}>Packages</option>
                            <option value="blogs" {{$banner_title->page == 'blogs'?'selected':''}}>Blogs</option>
                            <option value="appointment" {{$banner_title->page == 'appointment'?'selected':''}}>Appointment</option>
                            <option value="gallery" {{$banner_title->page == 'gallery'?'selected':''}}>Gallery</option>
                            <option value="contacts" {{$banner_title->page == 'contacts'?'selected':''}}>Contacts</option>
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

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea#default'
    });
</script>
@endsection
