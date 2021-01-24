
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0 ">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login  mt-3 mb-2"><img class="img-fluid" src="<?= base_url('images'); ?>/login/login.jpg"></div>
                            <div class="col-lg-6">
                                <div class="p-5 mt-3">
                                    <div class="text-center">

                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        
                                    </div>
                                   
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email"
                                                placeholder="Enter Email Address..." name="email" value="">
                                               
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="password">
                                                
                                        </div>

                                        <div class="form-group" >
                                           
                                                <label for="captcha"><?php echo $captcha['image']; ?></label>
                                                <br>
                                                <input class="form-control form-control-user" type="text" autocomplete="off" name="userCaptcha" placeholder="Captcha" value="<?php if(!empty($userCaptcha)){ echo $userCaptcha;} ?>" />
                                                <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    