@include('client.partials.head')

@include('client.partials.navbar')

@include('client.partials.login')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../../../../public/css/style.css">

<style>
    h1 {
        font-family: 'Times New Roman', Times, serif;
    }

    .des {
        width: 900px;
        height: auto;
    }
</style>
<!------- Start banner ------->
<section class="banner" style="background-image: url('images/banners/Contact_banner.jpg');">
    <div class="banner-content">
        <h1><b> Contact Us</b> </h1>
        <p>The team at Exotic Cars would love to hear from you, so please fill out this form and we will get in touch with you shortly</p>
    </div>
</section>
<!------- End banner ------->
<div class="container des py-5">

    <h1> <b >
            Common reasons people reach out: 
        </b>
    </h1>

    <p> <b> Press Releases:</b> Press releases can be send to our editorial team by filling out the form below. Simply include the URL where the press release can be found or upload the press release directly.</p> <br>

    <p> <b>Advertising Enquiries:</b>If you are looking to reach our readers, we recommend that you check out our advertising page to find all the relevant information.</p> <br>
    <p>
        <b>Partnership Enquiries:</b> If you want to go a little deeper than an advertising campaign, we’re open to partnering in other ways. Let us know what you’re thinking via the form below. <br>
    </p> <br>
    <b>Join The Team: </b> If you want to write or contribute to Supercars.net, fill out the form below and tell us a little about yourself. We’re always looking for writers, photographers, event managers and anybody who just loves cars. <br>
    <br>
    <p>
        <b>Submit A Car: </b> We know it is impossible to stay up to date on every car, event, sighting, concept and awesome youtube video. If you want to submit any of the above, check out our Submit Cars page. <br>

    </p>
    <br>

</div>

<!------- Start Contact ------->
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center">
            <h1><b> Contact Us</b> </h1>
            <div class="col-lg-10 col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-7 d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                <form method="POST" id="contactForm" name="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h1><b> File upload</b> </h1>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                <h3 class="mb-4 mt-md-4">Contact us</h3>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@Exoticcar.com</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Our Location</span> <a onclick="Showmap()">Exotic car</a></p>
                                    </div>  
                                     


                                </div>
                            </div>
                        </div>

      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid py-3">
<p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.474978920588!2d106.75548917462825!3d10.851432489301883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1716214938889!5m2!1svi!2s" width="1450" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</p>                         </div>
<!------- End Contact ------->

 

<link rel="stylesheet" href="../../../../public/css/style.css">

<script src="../../../../public/js/jquery.min.js"></script>
<script src=".../../../../public/js/popper.js"></script>
<script src="../../../../public/js/bootstrap.min.js"></script>
<script src=".../../../../public/js/jquery.validate.min.js"></script>
<script src="../../../../public/js/main.js"></script>

<!------- End posts ------->

@include('client.partials.footer')