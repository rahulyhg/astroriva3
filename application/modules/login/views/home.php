<section class="home_bg">
    <div class="container">
    <?php
        if($this->session->flashdata('error') != "")
        {
            echo "<div class='error'>".$this->session->flashdata('error')."</div>";
        }
        if($this->session->flashdata('success') != "")
        {
            echo "<div class='success'>".$this->session->flashdata('success')."</div>";
        }        
    ?>
        <div class="row home_alignment">  
            <div class="col-md-6 text-center">
                <div class="bg-white button_margin pic_margin">
                    <h1 class="text-primary font35 home_padding">Login</h1>
                    <div class="home_head center-block"></div>

                    <form method="POST" action="<?php echo base_url(); ?>login/">
                      <p class="elements_desc" style="padding:20px;">
                            <input type="text" name="email" class="form-control" placeholder="Your Email / Phone Number" /><br/>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" /><br/>

                            <select name="type" id="login_type" required="required" class="form-control">
                                <option value="">[Select]</option>
                                <option value="1">Astrologer</option>
                                <option value="3">Member</option>
                                <option value="2">Student</option>
                            </select>

                            <div class="col-md-6 center-block">
                                <button type="submit" class="btn btn-success col-md-12">Login</button>
                            </div>

                            <div class="col-md-6 center-block">
                                <button type="submit" class="btn btn-warning col-md-12">Forgot Password</button>
                            </div>
                            <br/><br/>
                        </p>  
                    </form>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="bg-white button_margin pic_margin">
                    <h1 class="text-primary font35 home_padding">Register</h1>
                    <div class="home_head center-block"></div>

                    <form method="POST" action="<?php echo base_url()."login/register" ?>">
                        <p class="elements_desc" style="padding:20px;">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name.." /><br/>
                            <input type="email" name="email" class="form-control" placeholder="Enter your Email.." /><br/>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password.." /><br/>
                            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number.." maxlength="10" minlength="10" /><br/>

                            <select name="type" id="login_type" required="required" class="form-control">
                                <option value="">[Select]</option>
                                <option value="1">Astrologer</option>
                                <option value="3">Member</option>
                                <option value="2">Student</option>
                            </select>

                            <div class="col-md-6 center-block">
                                <button type="submit" class="btn btn-success col-md-12">Register</button>
                            </div>

                            <div class="col-md-6 center-block">
                                <button type="reset" class="btn btn-warning col-md-12">Reset</button>
                            </div>
                            <br/><br/>
                        </p> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer_bg">
    <div class="container footer_align">
        
            