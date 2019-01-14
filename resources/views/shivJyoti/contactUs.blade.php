@extends('includes/htmlSupport')
@section('mainBody')
    @include('includes/navBar')

<!--SECTION START-->
    <section>
            <div class="container com-sp pad-bot-70">
                <div class="row">
                    <div class="cor about-sp">
                        <div class="ed-about-tit">
                            <div class="con-title">
                                <h2>Contact <span> Us</span></h2>
                                <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                            </div>
                        </div>
                        <div class="pg-contact">
                            <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                                <h2>Educate <span>Master</span></h2>
                                <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.png" alt="">
                                <h4>Address</h4>
                                <p>Address: Deen Dayal Upadhyaya Nagar,Jalandhar, Punjab, India
                                    <br>Landmark : Next To Airport</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.png" alt="">
                                <h4>CONTACT INFO:</h4>
                                <p> <a href="tel://0099999999" class="contact-icon">Phone: 0181-2211341 , 2212008</a>
                                    <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                                    <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email:shiv.joti@yahoo.com</a> </p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.png" alt="">
                                <h4>Website</h4>
                                <p> <a href="#">Website: www.mycompany.com</a>
                                    <br> <a href="#">Facebook: www.facebook/my</a>
                                    <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION END-->
    
        <section id="map">
            <div class="row contact-map">
                <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005"
                    allowfullscreen="">
                </iframe>
                <div class="container">
                    <div class="overlay-contact footer-part footer-part-form">
                        <div class="map-head">
                            <p>Send Us Now</p>
                            <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                        <!-- ENQUIRY FORM -->
                        <form id="contact_form" name="contact_form" action="send.php">
                            <ul>
                                <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                    <input type="text" id="f1" value="" name="f1" placeholder="Name" required=""> </li>
                                <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                    <input type="text" id="f2" value="" name="f2" placeholder="Phone" required=""> </li>
                                <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                    <input type="text" id="f3" value="" name="f3" placeholder="City" required=""> </li>
                                <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                    <input type="text" id="f4" value="" name="f4" placeholder="Country" required=""> </li>
                                <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                    <textarea id="f5" name="f5" required=""></textarea>
                                </li>
                                <li class="col-md-6">
                                    <input type="submit" value="SUBMIT"> </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!--SECTION END-->
<!--SECTION START-->
@include('includes/footerCourse')
<!--SECTION END-->

<!--HEADER SECTION-->
@include('includes/footer')
    <!--END HEADER SECTION-->

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
@include('includes/socialActivites/socailLoginUP')
<!--- end of login Up social portion---->
<!-- SOCIAL MEDIA SHARE -->
@include('includes/socialActivites/sideSocialLink')
<!---end of side Social Bar---->
@endsection