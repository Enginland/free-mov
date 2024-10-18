<div class="main clearfix position-relative">
    <div class="main_1 clearfix " style="background-color: #181C14">
        <section id="header">
            <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
                <div class="container-xl">
                    <a class="english-content navbar-brand fs-2 p-0 fw-bold text-white m-0 me-5" href="index.html"><i class="fa fa-youtube-play me-1 col_red"></i> FreeTimeMov </a>
                    <a class="khmer-content navbar-brand fs-2 p-0 fw-bold text-white m-0 me-5" href="index.html"><i class="fa fa-youtube-play me-1 col_red"></i> មើលរឿងពេលទំនេរ </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-0">

                            <li  class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html"><i class="fa fa-home"></i></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link english-content" href="about.html">Chineses </a>
                                <a class="nav-link khmer-content" href="about.html">រឿងចិន </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link english-content" href="contact.html"> Korean</a>
                                <a class="nav-link khmer-content" href="contact.html">រឿងកូរ៉េ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link english-content" href="contact.html"> On Air</a>
                                <a class="nav-link khmer-content" href="contact.html">រឿងកំពុងបន្ត</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link english-content" href="contact.html"> Full Moives</a>
                                <a class="nav-link khmer-content" href="contact.html">រឿងចេញចប់</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link english-content" href="about.html">About </a>
                                <a class="nav-link khmer-content" style="display: none;" href="about.html">អំពី </a>
                            </li>
                            
                        </ul>
                        <ul class="navbar-nav mb-0 ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown_search" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu drop_1 drop_o p-3" aria-labelledby="navbarDropdown"
                                    data-bs-popper="none">
                                    <li>
                                        <div class="input-group p-2">
                                            <input type="text" class="form-control border-0"
                                                placeholder="Search Here">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary bg-transparent border-0 fs-5"
                                                    type="button">
                                                    <i class="fa fa-search col_red"></i> </button>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-flag-usa fs-4 align-middle me-1 lh-1" id="currentFlag"></i>
                                    <span id="currentLanguage"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                    
                                    <li><a class="dropdown-item" href="#" onclick="switchLanguage('km')"><i class="fa fa-flag-khmer"></i> Khmer</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="switchLanguage('en')"><i class="fa fa-flag-usa"></i> English</a></li>
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

    </div>
    <div class="main_2 clearfix">
        <section id="center" class="center_home">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2" class="" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('asset/img/slide/1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            {{-- <h5 class="text-white-50 release ps-2 fs-6">NEW RELEASES</h5>
                            <h1 class="font_80 mt-4">The Rise Of <br> The Show</h1>
                            <h6 class="text-white"><span
                                    class="rating d-inline-block rounded-circle me-2 col_green">6.1</span> <span
                                    class="col_green">IMDB SCORE</span> <span class="mx-3">2022</span> <span
                                    class="col_red">Romance, Action</span></h6>
                            <p class="mt-4">Certain but she but shyness why cottage. Guy the put instrument sir
                                entreaties affronting.</p>
                            <h5 class="mb-0 mt-4 text-uppercase"><a class="button" href="#"><i
                                        class="fa fa-youtube-play me-1"></i> Watch Trailer</a></h5> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('asset/img/slide/1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('asset/img/slide/1.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>

</div>