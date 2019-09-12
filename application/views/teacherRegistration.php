<body>




<div class="container-fluid dashboard-wrapper">

    <div class="page-content-wrapper">

        <nav class="navbar navbar-fixed-top fixed-top navbar-custom" style="width:100%;">
            <div class="menu-balance">
                <a id="toggle-menu" href="javascript:void(0)">
                    <div id="pullmenu-icon"></div>
                </a>
            </div>
            <div class="menu-balance text-center">
                <a href="javascript:void(0)" class="brand"><img src="<?php echo base_url()?>assets/images/default/logo.svg" class="tutor-logo"/></a>
            </div>
            <div class="menu-balance">
                <ul class="nav navbar-nav navbar-right float-right log-profile">
                    <li class="user-profile">
                        <img src="https://images.pexels.com/photos/736716/pexels-photo-736716.jpeg?auto=compress&cs=tinysrgb&h=350" alt="">Riko Sapto Dimo
                        <span class=" fa fa-angle-down"></span>

                    </li>
                </ul>
            </div>



        </nav>

        <!-- side bar wrapper  -->
        <div id="sidebar-wrapper" class="main-slid-menu active">
            <!--   side-menu   -->
            <ul id="side-menu">

            </ul>
            <!-- /. side-menu  -->

        </div>
        <!-- End side bar wrapper  -->


        <section class="right-wrap right-active">
            <div class="container-fluid main-content mt-10">

            </div>

            <div class="container-fluid">
                <h2>Student Registration Form</h2>
                <div class="row">

                    <div class="col-md-6 mb-10">
                        <?php if($this->session->flashdata('msg_alert')) { ?>

                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?=$this->session->flashdata('msg_alert');?>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url()?>teacher/registerForm" method="post">
                            <div class="form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="fname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" class="form-control" id="dob" name="dob">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact:</label>
                                <input type="tel" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="Password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>


                    </div>

                </div>

        </section>



    </div>
    <!-- End dashboard-wrapper -->
</div>
   