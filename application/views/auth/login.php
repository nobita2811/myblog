<h1><?php echo lang('login_heading'); ?></h1>
<p><?php echo lang('login_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/login", ['class' => 'form-horizontal']); ?>
<div class="form-group">
    <label class="col-sm-4 control-label"><?php echo lang('login_identity_label', 'identity'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($identity, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><?php echo lang('login_password_label', 'password'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($password, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
        <?php echo lang('login_remember_label', 'remember'); ?>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-default"'); ?>
    </div>
</div>

<?php echo form_close(); ?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>