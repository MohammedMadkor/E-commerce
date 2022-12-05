@include('layouts.header')
<div class="card" style="width: 18rem; margin-top: 100px ; margin-left: 450px ;">
<div class="card-body text-center">
    <form action="{{url('category/store')}}" method="post">
        @csrf
        <div class="mb-3 ">
        <label for="name" class="form-label ">name</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
        <span class="text-danger err-msg-name" role="alert">
            <strong>
                {{$message}}
            </strong>
        </span>
        @enderror
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</div>
@include('layouts.footer')
