<!--content-->
<div class="content">
    <!--login-->
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login GABUT</h3>
                <form action="<?php echo site_url() . "/c_account/validasi_user"; ?>" method="post">
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input  type="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Username';
                                }" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Password';
                                }" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="forg">
                <div class="forg-right">
                <?php echo anchor('c_account/register','Register')?>
                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--login-->
</div>
<!--content-->