<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">PhuTX</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="<?php echo base_url('/'); ?>">Trang chủ</a>
            </li>
            <?php if ($this->session->userdata('user_id')) { ?>
                <li>
                    <a href="<?php echo base_url('/auth/edit_user/' . $this->session->userdata('user_id')); ?>">Tài khoản</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/auth/logout'); ?>">Đăng xuất</a>
                </li>
                <?php if (is_array($this->session->userdata('group')) && in_array('admin', $this->session->userdata('group'))) { ?>
                    <li>
                        <a href="<?php echo base_url('/admin/categories'); ?>">Quản lý</a>
                    </li>
                <?php } ?>
            <?php } else { ?>
                <li>
                    <a href="<?php echo base_url('/auth/login'); ?>">Đăng nhập</a>
                </li>
                <li>
                    <a href="<?php echo base_url('/auth/create_user'); ?>">Đăng ký</a>
                </li>
            <?php } ?>
        </ul>
        <div id="slideNew" class="hidden-xs">
            <ul class="bxslider fix">
                <?= getRandomArticle(); ?>
            </ul>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thẻ Tag <b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3 scroll">
                    <div class="row-border">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <?= getTagNav(1); ?>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <?= getTagNav(2); ?>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <?= getTagNav(3); ?>
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <?= getCategoryNav(); ?>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#">Xin chào :p</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>