
<nav class="nav container-fluid navbar-expand-lg navbar-light border-bottom mr-auto pl-15">

    <a class="navbar-brand tut-logo" href="#">
        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/logo.svg"/>
    </a>

    <div class="search-con my-0 mr-auto font-weight-normal">
        <div class="input-group">
                <span class="search-icon">
                     <img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/magnifying-glass.svg" width="10%"/>
                </span>
            <input class="form-search form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>

    <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item mr-10">
                <a class="nav-link" href="#"><img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/our-courses.svg"> Course</a>
            </li>
            <li class="nav-item mr-10">
                <a class="nav-link" href="#"><img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/reso.svg"> Resource</a>
            </li>
            <li class="nav-item mr-10">
                <a class="nav-link" href="#"><img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/news.svg"> News</a>
            </li>
        </ul>
    </div>
    <a class="btn-signin" href="#" data-toggle="modal" data-target="#myModal">Sign in</a>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Login to Tutor</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="narrow__form-buttons">
                        <a class="btn btn--shadow btn--social btn--facebook" href="/auth/facebook"><img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/fb.png"> Continue with Facebook</a>
                        <a class="btn btn--shadow btn--social btn--google" href="<?php echo $googleLogin; ?>"><img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/gmail.png"> Continue with Google</a>
                    </div>

                    <hr>
                    <form  method="post" action="<?php echo base_url();?>student/login">
                        <div class="form-group">
                            <input name="userEmail" class="form-control" placeholder="Email or login" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input class="form-control" name="userPassword" placeholder="******" type="password">
                        </div> <!-- form-group// -->
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a class="small" href="#">Forgot password?</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn login-popup btn-block"> Login  </button>
                                </div> <!-- form-group// -->
                            </div>
                            <div class="col-md-12 pt-20 pb-20 Terms-Service">
                                <p>To make tutor work, we log user data and share it with service providers. Click “Sign Up” above to accept tutor's Terms of Service & Privacy Policy.</p>
                            </div>
                        </div> <!-- .row// -->
                    </form>
                </div>
            </div>

        </div>
    </div>

</nav>


<!-- Main banner -->
<div class="position-relative d-flex main-banner overflow-hidden p-3">

    <div class="col-4 banner-text">
        <h1 class="display-4 font-weight-normal">Build your skill</h1>
        <span>LEARN| TEACH | SHARPEN</span>
        <p class="lead font-weight-normal">Learn new skills, pursue your interests, advance
            your career</p>
        <a class="btn btn-primary join-now" href="#">Join Now</a>
    </div>
    <div class="col-8 main-image p-0">
        <div class="play-video pointer" data-toggle="modal" data-target="#exampleModal">
            <h3>Play Video <img src="<?php echo base_url(); ?>assets/front_site_assets/images/icon/play-button.svg"></h3>
        </div>
        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/main-image.png">
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/S6-q5BheEYU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

</div>

<!-- angle div -->
<div class="section-one">
    <div class="d-flex">
        <div class="col-6 your-teacher">
            <h1>Your teaching partner</h1>
            <p>We have highly qualified , carefully selected panel of tutors. <br/>You can search subject wise and we will continue to enlist more and more qualified tutors. </p>
        </div>
        <div class="col-6">
            <div class="video-item">
                <div class="v-item">
                    <div class="video">
                        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/video-2.jpg"/>
                    </div>
                    <div class="video-content">
                        Ajax with PHP
                    </div>
                    <div class="rating">
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <span>4.8 views (1300)</span>
                    </div>
                </div>
                <div class="v-item">
                    <div class="video">
                        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/video-2.jpg"/>
                    </div>
                    <div class="video-content">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="rating">
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <span>4.8 views (1300)</span>
                    </div>
                </div>
                <div class="v-item">
                    <div class="video">
                        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/video-3.jpg"/>
                    </div>
                    <div class="video-content">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="rating">
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <span>4.8 views (1300)</span>
                    </div>
                </div>
                <div class="v-item">
                    <div class="video">
                        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/video-4.jpg"/>
                    </div>
                    <div class="video-content">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="rating">
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <svg class="lnr lnr-star"><use xlink:href="#lnr-star"></use></svg>
                        <span>4.8 views (1300)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tommorow -->
<div class="d-flex section-two mb-10">
    <div class="col-6 pl-0 img-section">
        <img src="<?php echo base_url(); ?>assets/front_site_assets/images/img1.jpg">
    </div>
    <div class="col-6 p-0 pt-50">
        <span>Inspire your class</span>
        <h1 class="pb-30">For today, <br/>tomorrow and every day</h1>

        <div class="d-flex col-12 p-0">
            <div class="col-6 inspire-video pl-0">
                <div class="data-con">
                    <div class="user-item">
                        <div class="video">
                            <img src="<?php echo base_url(); ?>assets/front_site_assets/images/video-3.jpg"/>
                        </div>
                        <div class="video-content">
                            Responsive Layout
                        </div>
                        <div class="view-ppl">
                            <svg class="lnr lnr-user"><use xlink:href="#lnr-user"></use></svg>
                            8,794 viewers
                        </div>
                        <div class="user-user">
                            <img src="<?php echo base_url(); ?>assets/front_site_assets/images/user-1.png">
                            <div class="user-detail-container">
                                <h5>Justin Yost</h5>
                                <span>Lead Engineer at Wirecutter View </span>
                            </div>
                        </div>
                        <div class="details-ppl">
                            During the last few years, After Effects has grown from a simple software program into an ever-evolving motion graphics ecosystem.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 inspire-video">
                <div class="data-con">
                    <div class="user-item">
                        <div class="video">
                            <img src="<?php echo base_url(); ?>assets/front_site_assets/images/video-3.jpg"/>
                        </div>
                        <div class="video-content">
                            Responsive Layout
                        </div>
                        <div class="view-ppl">
                            <svg class="lnr lnr-user"><use xlink:href="#lnr-user"></use></svg>
                            8,794 viewers
                        </div>
                        <div class="user-user">
                            <img src="<?php echo base_url(); ?>assets/front_site_assets/images/user-1.png">
                            <div class="user-detail-container">
                                <h5>Justin Yost</h5>
                                <span>Lead Engineer at Wirecutter View </span>
                            </div>
                        </div>
                        <div class="details-ppl">
                            During the last few years, After Effects has grown from a simple software program into an ever-evolving motion graphics ecosystem.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- online coruse catagory -->
<section class="content-section mt-50 mb-50">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1>Browse online course categories</h1>
                <p class="lead mb-5">Online learning offers a new way to explore subjects you’re passionate about. Find your interests by browsing our online course categories:</p>
            </div>
        </div>
    </div>
</section>

<section class="teaching-con">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="pb-0 mb-5">Tutor for teaching</h1>
                <p class="lead mb-30">Come on in and join the biggest community of educators in the world</p>
                <a class="btn btn-primary join-now" href="#">Free Join Now</a>
            </div>
        </div>
    </div>
</section>



<footer>
    <div class="d-flex footer-list-contianer pl-50 pr-50 pt-50">
        <div class="col-md">
            <h2>Courses  </h2>
            <ul class="list-unstyled">
                <li>School  Syllabus Local / International</li>
                <li>Professional Courses</li>
                <li>Master Class</li>
                <li>Health Training</li>
            </ul>
        </div>
        <div class="col-md">
            <h2>Resources</h2>
            <ul class="list-unstyled">
                <li>Early years  / Pre-K and Kindergarten</li>
                <li>Primary / Elementary</li>
                <li>Secondary / High school</li>
                <li>Special Educational Needs</li>
            </ul>
        </div>
        <div class="col-md">
            <h2>Partners</h2>
            <ul class="list-unstyled">
                <li>For teachers</li>
                <li>For schools</li>
                <li>For partners</li>
            </ul>
        </div>
        <div class="col-md">
            <h2>News</h2>
            <ul class="list-unstyled">
                <li>latest Courses</li>
                <li>New teachers</li>
                <li> Leadership</li>
                <li>Subject genius</li>
            </ul>
        </div>
    </div>

    <div class="d-flex copyright">
        <div class="col-md text-left">
            <span>For teaching. Copyright © 2019</span>
        </div>
        <div class="col-md text-right">
            <span>Chat FAQs | Contact us | Privacy | Terms & conditions | About Us | Modern slavery statement</span>
        </div>
    </div>

</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>