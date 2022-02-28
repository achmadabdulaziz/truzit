
@extends('menulanding')
@section('privacy')
<body>
        <div class="header">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="col-md-12 p30">
            <div class="col-lg-6">
                <h1>We do not sell personal information</h1>
                <p>Building services for the world means we have a responsibility to keep your data safe. We do not sell our users’ names or phone numbers to third parties because it is against our ethics. So that our users are able to use our app for free, we work with advertising partners such as Google and others listed in our app and provide trusted partners with caller ID services. Period.</p>
            </div>
            <div class="col-lg-6">
                <h1>We don’t ask for unnecessary Permissions</h1>
                <p>The world of communication is getting more complex, but we make your communication smarter, safer and more efficient. We make sure you understand what permissions are needed to make Truzit work how you want.
We keep you informed about the data that the Truzit app requires to function best for you. You can also choose to provide certain optional permissions (such as location, camera and microphone) depending on which features you use. You can always deactivate these permissions in the app or on your device at any time. Read more about which permissions are used to make Truzit work, and why.</p>
            </div>
            <div class="col-lg-6">
                <h1>Terms and Conditions</h1>
                <p>Sets out the terms you agree to when using our service.Read our Terms of Service for the EEA and Switzerland here and Rest of the World here.</p>
            </div>
            <div class="col-lg-6">
                <h1>Privacy Policy</h1>
                <p>Explains the information we collect and the purposes for which it is used, and how you can manage it.

To review the privacy policy that apply to you, please select your country of residence based on the international dialling code applicable to the phone number, or third party service, used to create your Truzit</p>                <!-- <button class="btn btn-light btn-lg action-button" type="button">Learn More</button> -->
            </div>
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
