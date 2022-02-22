
@extends('menulanding')
@section('landing')
<body>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            </nav>
            <div class="container hero">            
            <div class="col-md-12">
                <div class="col-md-5">
                    <div class="input-group">
                        <input class="form-control" type='text' placeholder="Search phone number..."/>
                        <span class="input-group-btn">
                            <button class="btn-form btn-search">Search<i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>Truzit</h1>
                        <p>Truzit adalah aplikasi yang dapat emmbatu user untuk digunakan dala brbagai kebutuhan, seperti : Mengetahui ID Penelpon, Block Spam, dll</p><button class="btn btn-light btn-lg action-button" type="button">Learn More</button></div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img src="img/iphone.svg" class="device">
                            <div class="screen"></div>
                        </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script> $("#nuber").intlTelInput({
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.min.js"
});
 </script>
</body>
@endsection
