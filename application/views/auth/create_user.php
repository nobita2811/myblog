<h1><span class="glyphicon glyphicon-pencil"></span> <?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/create_user", ['class' => 'form-horizontal']); ?>

<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-user"></span> <?php echo lang('create_user_fname_label', 'first_name'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($first_name, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-user"></span> <?php echo lang('create_user_lname_label', 'last_name'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($last_name, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-briefcase"></span> <?php echo lang('create_user_company_label', 'company'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($company, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-envelope"></span> <?php echo lang('create_user_email_label', 'email'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($email, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-phone-alt"></span> <?php echo lang('create_user_phone_label', 'phone'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($phone, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-lock"></span> <?php echo lang('create_user_password_label', 'password'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($password, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label"><span class="glyphicon glyphicon-lock"></span> <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?></label>
    <div class="col-sm-8">
        <?php echo form_input($password_confirm, NULL, "class='form-control'"); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label text-right">
        <img class="captcha" src="<?php echo $builder->inline(); ?>" />
    </label>
    <div class="col-sm-8">
        <?php echo form_input('captcha', NULL, "class='form-control'"); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-default"'); ?>
    </div>
</div>

<?php echo form_close(); ?>
