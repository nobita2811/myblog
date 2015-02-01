<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trang thành viên</title>

        <!-- Bootstrap core CSS -->
        <link href="<?= getCss('bootstrap.min') ?>" rel="stylesheet" type="text/css">
        <link href="<?= getCss('admin_login') ?>" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="container">
            <form class="form-signin" method="POST" action="">
                <h2 class="form-signin-heading text-center">Đăng nhập hệ thống</h2>
                <label for="inputEmail" class="sr-only">Tên đăng nhập</label>
                <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Mật khẩu</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div> <!-- /container -->

    </body>
</html>
