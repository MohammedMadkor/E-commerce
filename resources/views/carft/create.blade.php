@include('layouts.header')
<div class="card" style="width: 18rem; height: 40rem; margin-top: 100px ; margin-left: 450px ;">
    <img src="{{$product->image}}" class="card-img-top" alt="..."  height="400px">
    <div class="card-body">
        <form action="{{url('carft/store')}}" method="post">
            @csrf
            <h5>name: {{$product->name}}</h5>
            <h5 class="card-title">prand: {{$product->prand}}</h5>
   <p class="card-text"> price: {{$product->price}}</p>
    <h3>category: {{$product->Category->name}}</h3>
            <div class="mb-3">
            <input type="number" class="form-control"  name="User_id" value="{{$auth->id}}" readonly style="display: none">
            </div>

            <div class="mb-3">  
            
            <input type="text" class="form-control"  name="category" value="{{$product->Category->name}}" readonly style="display: none">
            </div>
            <div class="mb-3">
            <input type="text" class="form-control"  name="name" value="{{$product->name}}" readonly style="display: none">
            </div>
            <div class="mb-3">
            <input type="text" class="form-control"  name="prand" value="{{$product->prand}}" readonly style="display: none">
            </div>
            <div class="mb-3">
            <input type="number" class="form-control"  name="price" value="{{$product->price}}" readonly style="display: none">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">enter quantity</label>
                <input type="number" class="form-control" id="quantity"  name="quantity" value="1">
            </div>



            <button type="submit" class="btn btn-primary"> go to carft</button>
        </form>

    </div>
</div>
@include('layouts.footer')
