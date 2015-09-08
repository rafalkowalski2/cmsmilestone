	<div class="container">
        <div class="card card-container">
            <h2>CMSMilestone</h2>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputemail" name="login" class="form-control" placeholder="<?php echo __('INPUT_PH_LOGIN');?>" required autofocus>
                <input type="password" id="inputpassword" name="password" class="form-control" placeholder="<?php echo __('INPUT_PH_PASSWORD');?>" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"><?php echo __('REMEMBER_ME');?>
                    </label>
                </div>
                <button class="btn " name="login_submit" type="submit"><?php echo __('BT_SIGN_IN');?></button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->	