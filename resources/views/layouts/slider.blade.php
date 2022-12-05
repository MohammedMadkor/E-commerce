
    <!-- strart sec1 -->
    <div class="sec1">
        <div class="container-fluid">
            <!-- strart nav1 -->
            <nav class="navbar navbar-expand-lg bg-light">


                <div class="container a2">
                    <a class="navbar-brand" href="#">free shopping on all orders over $75! </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>


                <div class="col-6 a1">
                    <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item ">
                                <a class="nav-link a9 " aria-current="page" href="#">myAccount</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link a9" href="#">wishlist</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link a9 dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    curreccy :usd
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item  a9">
                                <a class="nav-link a3"  href="{{url('carft')}}"> <i class="fab fa-accessible-icon"> </i> my carft(2)</a>
                            </li>
                        </ul>

                    </div>

                </div>




        </div>
        </nav>

        <!-- end nav1 -->
        <!-- start searnh -->
        <div class="main">
            <!-- Another variation with a button -->
            <div class="input-group">
                <input type="text" class="form-control a4" placeholder="Search where what you need">
                <button class="btn btn-light a4" type="button">
                    <i class="fa fa-search "></i>
                </button>

            </div>
        </div>
        <!-- end searnh -->
        <div class="a6">
            <nav class="navbar navbar-expand-lg bg-dark ">
                <div class="container a2 ">
                    <a class="navbar-brand a6" href="#">fashion </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-6 a1 ">
                    <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item ">
                                <a class="nav-link  active a8" aria-current="page" href="#">Home</a>
                            </li>
                            @foreach ($category as $c)
                            <li class="nav-item">
                                <a class="nav-link a7" href="#">{{$c->name}}</a>
                            </li>
                            @endforeach









                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <div>
        <div id="carouselExampleControls" class="carousel slide a10" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs/Safeimagekit-resized-imgpng (1).png" class="d-block w-100" alt="..." width="720px" height="720px">
                </div>
                @foreach ($slider as $s)
                <div class="carousel-item">
                    <img src="{{$s->image}}" class="d-block w-100" alt="..." width="720px" height="720px">
                </div>

                @endforeach


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!-- <div class=" text10 text-center">
                    <p>
                        somthing is better
                        fashion lorem
                    </p>
                </div> -->
        </div>
    </div>

    </div>
    </div>
    <!-- end sec1 -->
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <div class="card " style="width: 40rem;">
                    <img src="imgs/th.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-danger ">hot collection</h5>
                        <h5 class="card-title ">new trend for Women</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-light">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="imgs/Wallpaper-HD-Football-Players-16.jpg" alt="" width="450px" height="350px">

                <img src="imgs/th (1).jpg" class="a12" alt=""width="450px" height="300px">

            </div>
        </div>

    </div>
