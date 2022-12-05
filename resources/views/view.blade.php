@include('layouts.header')
<div class="card" style="width: 18rem; height: 30rem; margin-top: 100px ; margin-left: 150px ;">
    <img src="{{$product->image}}" class="card-img-top" height="400px">
    <div class="card-body">
    <h5 class="card-title">prand: {{$product->prand}}</h5>
   <p class="card-text"> price: {{$product->price}}</p>
    <h3>category: {{$product->Category->name}}</h3>
    <a href="#" class="btn btn-primary">buy with visa</a>
    </div>
</div>



@include('layouts.footer')
