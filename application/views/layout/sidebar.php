<div class="col-md-4 column">
    <form class="navbar-form navbar-left" role="search" method="post" action="<?= base_url('/search'); ?>">
        <div class="input-group">
            <input type="text" name="title" class="form-control" placeholder="Tìm kiếm" required autocomplete="off" value="<?php echo isset($search) ? $search : ''; ?>">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Tìm!</button>
            </span>
        </div><!-- /input-group -->
        <div class="clearfix"></div>
    </form>
        <span class='small'>Nhập tiếng việt không dấu sẽ cho kết quả chính xác</span>
    <hr>
    <ul class="list-unstyled">
        <li>
            <a href="<?php echo base_url('/category'); ?>"><span class="glyphicon glyphicon-list"></span> Xem toàn bộ danh mục</a>
        </li>
        <li>
            <a href="<?php echo base_url('/tag'); ?>"><span class="glyphicon glyphicon-tag"></span> Xem toàn bộ thẻ tag</a>
        </li>
    </ul>
    <hr>
    <ul class="list-unstyled">
        <li>
            <b>1 số bài viết bạn nên xem</b>
        </li>
        <?= getArticleSticky(); ?>
    </ul>
    <hr>
    <ul id="sideBarFix" class="list-unstyled">
        <li class="title">
            <b>1 số bài viết bạn vừa đã xem</b>
        </li>
        <?= getLastArticleViewed(); ?>
    </ul>
</div>