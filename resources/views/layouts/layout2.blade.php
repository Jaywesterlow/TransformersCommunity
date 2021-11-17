<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transformers Community</title>
  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-3pe-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img class="navbar-brand m-0 p-0" src="{{ url('/image/tc.png') }}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Togglenavigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a id="nav-item-home" class="nav-link link-dark px-2.5 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a id="nav-item-over-ons" class="nav-link link-dark px-2.5" href="#">Over ons</a>
          </li>
          <li class="nav-item">
            <a id="nav-item-wordt-transformer" class="nav-link link-dark px-2.5" href="#">Wordt Transformer</a>
          </li>
          <li class="nav-item">
            <a id="nav-item-feed" class="nav-link link-dark px-2.5" href="#">Feed</a>
          </li>
          <li class="nav-item">
            <a id="nav-item-contact" class="nav-link link-dark px-2.5" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">


        <ul class="nav">
          <li class="nav-item"><a href="{{ route('register') }}" id="nav-item-aanmelden" class="nav-link link-dark px-2.5">Aanmelden</a></li>
          <a href="{{ route('login') }}" id="nav-item-login" class="btn btn-primary btn-sm rounded-pill border-0 d-flex align-items-center"><span>Inloggen</span></a>
        </ul>
      </div>
    </div>
  </nav>


  <div class="w-100 hero-container">
    <div class="container col-xxl-12 px-4 py-5">
      <div class="row align-items-center g-5 py-5 justify-content-center">
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Life sucks <br>
            sometimes.</h1>
          <h4 class="fw-regular text-white">Maar je staat er niet alleen voor.</h4>
          <p class="lead text-white fs-6">
            De Transformers Community is er voor jongeren die <br>
            zelfverzekerd willen zijn en tegenslagen omzetten in <br>
            kracht. We doen dit samen: zo leren we meer en <br>
            helpen we elkaar om te groeien.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-lg-start justify-content-md-start">
            <a href="#" id="feed-button" class="btn btn-primary btn-sm rounded-pill border-0 d-flex align-items-center"><span class="py-2 px-3">Bekijk onze feed!</span></a>
          </div>
        </div>

        <div class="col-10 col-sm-8 col-lg-6">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ url('/image/carousel-item-1.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-white">First slide label</h5>
                  <p class="text-white">Some representative placeholder
                    content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ url('/image/carousel-item-2.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-white">Second slide label</h5>
                  <p class="text-white">Some representative placeholder
                    content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ url('/image/carousel-item-3.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-white">Third slide label</h5>
                  <p class="text-white">Some representative placeholder
                    content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w-100 d-flex justify-content-center my-5">
    <h2 class="fw-bold lh-1 mb-3 text-center w-75">Lees over hoe je beter met
      jouw mentale moeilijkheden kan omgaan.
      Tips van onze transformers met echte ervaringen.</h1>
  </div>
  <!-- START -->

  <div class="row w-100 px-3">

    <!-- topics start -->

    <div class="col-md-4 col-sm-12 text-white">
      <div class="position-sticky rounded w-75" id="topicsNav" style="top: 2rem;">
        <div class="p-4 mb-3 rounded d-flex flex-column align-items-center">
          <h4>Topics</h4>
          <p class="mb-0 text-center">Zie de verschillende topics waar onze
            Transformers het over hebben.
            Zo kan je makkelijk sorteren en vinden waar je naar opzoek bent.
          </p>
        </div>

        

        <div class="d-flex justify-content-center">
          <hr class="w-75 border border-1 bg-light">
        </div>

        <div class="p-4 d-flex justify-content-center">
          <ol class="list-unstyled mb-0">
              @yield('topic')
          </ol>
        </div>

        <div class="p-4">
          
        </div>
      </div>
    </div>

    <!-- topics end -->

    <div class="col-md-8 p-0">

      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Feed
      </h3>


      @yield('post')

    </div>
  </div>

  <!-- END -->

</body>

</html>