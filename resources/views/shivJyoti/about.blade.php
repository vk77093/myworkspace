
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
                            <h2>About <span> Academy</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="ed-advan">
                            <ul>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/1.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Awards</h4>
                                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi bibendum imperdiet bibendum.</p>
                                        <a href="awards.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/2.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Research</h4>
                                        <p>tiam eget enim non magna vestibulum malesuada ut et lectus. Curabitur egestas risus massa, a malesuada erat ultrices non.</p>
                                        <a href="research.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/3.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Educations</h4>
                                        <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                        <a href="all-courses.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/4.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Alumni</h4>
                                        <p>Aliquam malesuada commodo lectus, at fermentum ligula finibus eu. Morbi nisi neque, suscipit non pulvinar vitae.</p>
                                        <a href="awards.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/5.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Facilities</h4>
                                        <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                        <a href="facilities.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="images/adv/6.png" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Departments</h4>
                                        <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                        <a href="departments.html">Read more</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
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
   