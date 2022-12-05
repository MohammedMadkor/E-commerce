<!-- sec4 -->
<!-- sec 5 -->
<div class="sec5">
    <div class="container">
        <div class="row">
            <div class="col-5 a13">
            </div>
            <div class="col-2 text-center ">
            <p class="a14"> Trendig item</p>
            </div>
            <div class="col-5 a13">
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-3 py-3">
                <div class="card" style="width: 18rem; height: 20rem;">
                    <img src="{{$product->image}}" class="card-img-top" alt="..." width="200px" height="200px">
                    <div class="card-body">
                      <h5 class="card-title"> {{$product->name}}</h5>
                      <span class = "fa fa-star checked"></span>
                      <span class = "fa fa-star checked"></span>
                      <span class = "fa fa-star checked"></span>
                      <span class = "fa fa-star checked"></span>
                      <!-- To display unchecked star rating icons -->
                      <span class = "fa fa-star unchecked"></span>
                    <br>
                    <i class="fa-regular fa-heart a18"></i>
                    <i class="fa-solid fa-cart-shopping a18"></i>
                    <i class="fa-solid fa-share a18"></i>


                    <p class="a17"> {{$product->price}}$</p>
                   
                    </div>
                  </div>

            </div>
            @endforeach
        </div>

    <a href="#" ><button type="button" class="btn btn-primary a25">LOAD MORE</button></a>

    </div>
</div>

<!-- sec 5 -->
<!-- sec6 -->

<div class="sec6">

            <div class="a26 text-center">
                <p> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil tempora iste
                <br> fugit autem exercitationem vel sint repudiandae qui nulla tenetur." </p> <br>
                <img src="imgs/th (1).jpg" alt="" width="100px" height="100px">
                <br> <br>
                <h3>MD SHAHIN ALAM</h3>
                <span class="text-secondary">
                    Ceo Of TTCM
                </span>


            </div>


</div>

<!-- sec6 -->
<!-- sec7 -->
