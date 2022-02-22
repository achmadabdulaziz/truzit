
@extends('menulanding')
@section('about')
<body>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="col-md-12 p30">
            <div class="col-lg-6">
                <h1>About us.</h1>
            <p>Truecaller is a Indonesian company founded in 20d2 in Bandung. The app began when our co-founders were just students who wanted to create a service that would easily identify incoming calls from unknown numbers. Today, Truzit is under development, and is the go-to app for Caller ID and spam blocking.</p>

            </div> <div class="col-lg-6"><img src="img/truzit.jpg" class="col-lg-6"></div>
            </div>
            </nav>
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
