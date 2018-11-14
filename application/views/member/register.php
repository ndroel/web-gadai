<!--content-->
<div class="content">
    <!--login-->
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Register</h3>
                <form action="<?php echo site_url() . "/c_account/get_data_regis"; ?>" method="post">
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input  type="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Username';
                                }" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Email';
                                }" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="Confirm Password" name="pass2" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Confirm Password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <!--login-->
</div>
<!--content-->