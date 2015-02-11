<link type="text/css" rel="stylesheet" href="<?= getCss('comment'); ?>">

<form class="form-horizontal" id="form-comment">
    <div class="role">
        <div class="col-md-2">
            <button type="submit" class="btn btn-success">Bình luận</button>
        </div>
        <div class="col-md-5">
            <input type="email" value="<?= $user->getEmail(); ?>" class="form-control" name="email" placeholder="Email" required>
            <input type="hidden" name="article" value="<?= $article->getId(); ?>">
            <input type="hidden" name="comment" value="" id="form-comment-id">
        </div>
        <div class="col-md-5">
            <input type="text" value="<?= $user->getUsername(); ?>" class="form-control" name="name" placeholder="Tên" required>
        </div>
        <div class="col-md-12">
            <textarea id="form-content" class="form-control" required name="content"></textarea>
        </div>
        <div class="col-md-12">
            <div class="form-show-reply"></div>
        </div>
    </div>
</form>

<div class="clearfix"></div>
<div class="row">
    <div id="comment-real-time">
    
    </div>
</div>