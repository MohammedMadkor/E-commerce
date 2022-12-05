  <!-- end sec2   -->
    <!-- sec3 -->
    <div class="sec3">
        <div class="container">
        <div class="row">
            <div class="col-5 a13">
            </div>
            <div class="col-2 text-center ">
               <p class="a14"> featured item</p>
            </div>
            <div class="col-5 a13">
            </div>
        </div>
        <!-- navbar  -->



        <div class="container">
            <div id="buttons">
                <button class="btn1" onclick= "filterObjects('all')">show all</button>
                @foreach ($category as $c)
                <button class="btn1" onclick= "filterObjects('{{$c->name}}')"> {{$c->name}}</button>
                @endforeach



            </div>
        </div>
    <!-- navbar  -->
    <!-- imgs  -->
    <div class="objects">
        <div class="row">
            @foreach ($product as $p )

            <div class="col">
                <div class="box f1 {{$p->Category->name}}">
                    <div class="card " style="width: 18rem; height: 19rem;">
                        <a href="{{url('carft/create',$p->id)}}"><img src="{{$p->image}}" class="card-img-top" alt="..." width="200px" height="200px"></a>
                        <div class="card-body">
                        <h5 class="card-title"> {{$p->name}}</h5>
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
                        <p class="a17"> {{$p->price}}$</p>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach





    <!-- imgs  -->
    </div>
    </div>
    <!-- sec3 -->
    <!-- sec4 -->
    <div class="container-fluid my-5">
    <div class="sec4">
        <div class="row">
            <div class="col-6 a20">
                <div class="a22">
                <h1>70% <span >off</span></h1>
                <h3>Tao Kinben Na ?</h3>
                </div>
            </div>
            <div class="col-6 a21">
                <div class="a23">
                    <h3>AMR CHEHARA KHARAP NA</h3>
                    <h1> <span class="a24">Chehara</span> Dia Ki hoy </h1>

                </div>
            </div>
        </div>
    </div>
    </div>
