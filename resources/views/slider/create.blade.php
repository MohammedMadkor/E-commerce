@include('layouts.header')
<div class="card" style="width: 18rem; margin-top: 100px; margin-left: 450px;">
    <div class="card-body text-center">
        <form action=" {{url('slider/store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
            <span class="text-danger err-msg-image" role="alert">
                {{$message}}
            </span>

            @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@include('layouts.header')
