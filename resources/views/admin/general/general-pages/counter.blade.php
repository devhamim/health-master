
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="card-body">
                <form class="form-horizontal" action="{{route('store.counter')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @if($counter!=null)
                        <input type="hidden" name="id" value="{{$counter->id}}">
                    @endif
                    <div class="form-group">
                        <label>Total Doctors</label>
                        @if($counter!=null)
                            <input type="number" class="form-control" rows="5" value="{{$counter->doctors}}" name="doctors" id="doctors" placeholder="Email">
                        @else
                            <input type="number" class="form-control" rows="5" name="doctors" id="doctors" placeholder="Total Doctors">
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Total Service</label>
                        @if($counter!=null)
                            <input type="text" class="form-control" rows="5" value="{{$counter->services}}" name="services" id="services" placeholder="Facebook">
                        @else
                            <input type="text" class="form-control" rows="5" name="services" id="services" placeholder="Total Services">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Happy Clients</label>
                        @if($counter!=null)
                            <input type="text" class="form-control" rows="5" name="clients" value="{{$counter->clients}}" id="clients" placeholder="Instagram">
                        @else
                            <input type="text" class="form-control" rows="5" name="clients" id="clients" placeholder="Happy Clients">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Total Awards</label>
                        @if($counter!=null)
                            <input type="text" class="form-control" rows="5" name="awards" value="{{$counter->awards}}" id="awards" placeholder="Total Awards">
                        @else
                            <input type="text" class="form-control" rows="5" name="awards" id="awards" placeholder="Total Awards">
                        @endif
                    </div>

                    <div class="table-responsive">

                        @if($links!=null)
                            <button type="submit" class="btn btn-info">Update</button>
                        @else
                            <button type="submit" class="btn btn-info">Submit</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


