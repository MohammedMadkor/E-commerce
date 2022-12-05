@include('layouts.header')
<div class="card" style="width: 18rem; margin-top: 100px; margin-left: 450px;">
    <div class="card-body text-center">
        <form action="{{url('slider/edit',$slider->id)}}" method="post" enctype="multipart/form-data" >
@csrf
            <div class="my-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image" name="image">

            </div>
            <div>
                <img src="{{$slider->image}}" alt="" style=" border-radius: 8px; width: 100px; height: 80px;">
              </div>
              <br>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@include('layouts.header')
