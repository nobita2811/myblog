<div class="col-md-4 column">
    <hr>
    <ul>
        <li>
            <a href="<?php echo base_url('/category'); ?>">Xem toàn bộ danh mục</a>
        </li>
        <li>
            <a href="<?php echo base_url('/tag'); ?>">Xem toàn bộ thẻ tag</a>
        </li>
    </ul>
    <hr>
    <ul id="sideBarFix">
        <li>
            1 số bài viết bạn vừa đã xem
        </li>
        <?= getLastArticleViewed(); ?>
    </ul>
</div>