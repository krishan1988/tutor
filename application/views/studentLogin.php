<div class="loginbg">
    <div class="container">

        <form class="form-signin" method="post" action="<?php echo base_url();?>student/login">
            <h2 class="form-signin-heading mb-3"><a href="javascript:void(0)" class="brand"><img src="<?php echo site_url() ?>assets/images/default/logo.svg" class="login-logo"/></a></h2>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="email" id="inputEmail" class="form-control" name="userEmail" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="userPassword" class="form-control" placeholder="Password" required="">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>

    </div>
</div>