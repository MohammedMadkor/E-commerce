@include('layouts.header')
<div class="card" style="width: 18rem; margin-top: 100px; margin-left: 450px;">
    <div class="card-body text-center">
        <form action="{{url('product/edit',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <select class="form-select" aria-label="Default select example" name="Category_id">
            <option disabled selected> choose Category</option>
            @foreach ($category as $c)
            <option {{$product->Category_id == $c->id ? "selected" : ""}}  value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
          </select>
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
            @error('name')
            <span class="text-danger err-msg-name" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
            @error('price')
            <span class="text-danger err-msg-price" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>
        <div class="mb-3">
            <label for="prand" class="form-label">prand</label>
            <input type="text" class="form-control" id="prand" name="prand" value="{{$product->prand}}">
            @error('prand')
            <span class="text-danger err-msg-prand" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
            <span class="text-danger err-msg-image" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            <div class="ads-thumbnail">
                <img src="{{ $product->image }}" class="attachment-full size-full wp-post-image img-fluid"
                  style=" border-radius: 8px; width: 100px; height: 80px;">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('layouts.footer')
