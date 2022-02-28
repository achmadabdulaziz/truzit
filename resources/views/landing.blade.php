
@extends('menulanding')
@section('landing')<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    <div class="header">

        <div class="container hero">
            <div class="row">
                <div class="col-lg-6">
                    <h1>The Best Call Security for your Device</h1>
                    <p>Truzit adalah aplikasi yang dapat membantu user untuk digunakan dalam berbagai kebutuhan, seperti : Mengetahui ID Penelpon, Block Spam, dll</p>
                    <!-- <button class="btn btn-light btn-lg action-button" type="button">Learn More</button> -->
                    <div class="input-group">
                        <input class="form-control" type='text' placeholder="Search phone number..."/>
                        <span class="input-group-btn">
                            <button class="btn-form btn-search">Search<i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- <div class="iphone-strip"> -->
                        
                    <!-- <div class="boxxx"> -->
                        
                        <!-- <div class="strip">aaa -->
                        <!-- <br><br><br><br><br><br><br><br> -->
                        
                        <!-- <img src="img/strip.png" class="strip"> -->
                        <img src="img/Login.png" class="strip">
                        <!-- </div> -->
                        <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
        
    <!-- </div> -->

    <!-- <div class="items">
    <img src="img/feature1.png">
    <img src="img/feature2.png">
    <img src="img/feature3.png">
    </div> --><div class="w3-container">

<div class="w3-content w3-display-container" style="max-width:800px">
  <h2><center>Truzit Feature</center></h2>
  <p><center>Fitur-fitur Truzit dapat membantu pengunanya untuk mengetahui berbagai hal dan memblokir hal-hal yang tidak diinginkan</center></p>
    <div class="items">
        <img class="mySlides" src="img/feature1.png" >
        <img class="mySlides" src="img/feature2.png">
        <img class="mySlides" src="img/feature3.png">
    </div>
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge" onclick="currentDiv(1)"></span>
        <span class="w3-badge" onclick="currentDiv(2)"></span>
        <span class="w3-badge" onclick="currentDiv(3)"></span>
    </div> 
</div>
<div class="w3-content w3-display-container" style="width:100%">
    <div class="boxes">
        <div class="items">
            <div class="col-md-12">
                    <div class="col-md-6">
                        <h3>The Best Call Security for your Device</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <a class="btn btn-contactnow" role="button" href="#">Contact Now</a>
                        </div>                      
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="w3-content w3-display-container" style="width:100%">
    <div class="boxes-white">
            <div class="col-md-12">
                    <div class="col-md-3">                        
                    <img src="img/truzit.png" class="btn-addon">
                    </div>
                    <div class="col-md-2">          
                    </div>
                    <div class="col-md-2" style="padding-top: 10px;"><h3>Product</h3>          
                    </div>
                    <div class="col-md-2" style="padding-top: 10px;"><h3>Service</h3>        
                    </div>
                    <div class="col-md-2" style="padding-top: 10px;"><h3>Be Social</h3>            
                    </div>
            </div>
            <div class="col-md-12">
                    <div class="col-md-3">                        
                    <h4>Jl. Truzit Bandung, Indonesia truzit@gmail.com www.truzit.com (021) 221 28894 0811 843 6000</h4>
                    </div>
                    <div class="col-md-2">          
                    </div>
                    <div class="col-md-2">
                        <h4>Product1</h4>
                        <h4>Product2</h4>      
                        <h4>Product3</h4>
                        <h4>Product4</h4>  
                    </div>
                    <div class="col-md-2">
                        <h4>Service1</h4>    
                        <h4>Service2</h4>     
                        <h4>Service3</h4>    
                        <h4>Service4</h4>     
                    </div>
                    <div class="col-md-2">
                        <h4><i class="fa fa-twitter" aria-hidden="true"> Twitter</i></h4>
                        <h4><i class="fa fa-facebook" aria-hidden="true"> Facebook</i></h4>
                        <h4><i class="fa fa-instagram" aria-hidden="true"> Instagram</i></h4>
                        <h4><i class="fa fa-linkedin" aria-hidden="true"> Linkedin</i></h4>
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
 <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</body>
@endsection
