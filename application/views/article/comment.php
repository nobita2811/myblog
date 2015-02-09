<link type="text/css" rel="stylesheet" href="<?= getCss('comment'); ?>">
<div class="comment-real-time">
    <?= getComment(); ?>
</div>
<form class="form-horizontal" id="form-comment">
    <div class="role">
        <div class="col-md-2">
            <button type="submit" class="btn btn-default">Bình luận</button>
        </div>
        <div class="col-md-5">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" name="name" placeholder="Tên" required>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" required name="content"></textarea>
        </div>
    </div>
</form>