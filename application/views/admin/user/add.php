<div class="container">
    <h4>Thêm mới nhóm chuyên mục</h4>
    <form action="<?php echo $action; ?>" method="POST">
        <div class="form-group col-xs-6">
            <label for="userName">Tên đăng nhập</label>
            <input name="username" type="text" class="form-control " id="userName">
        </div>
        <div class="clearfix"></div>
        <div class="form-group col-xs-6">
            <label for="userPassword">Mật khẩu</label>
            <input name="password" type="password" class="form-control " id="userPassword">
        </div>
        <div class="clearfix"></div>
        <div class="form-group col-xs-6">
            <label for="userEmail">Email</label>
            <input name="email" type="email" class="form-control " id="userEmail">
        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-default">Lưu</button>
    </form>
</div>