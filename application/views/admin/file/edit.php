<div class="container">
    <h4>Thay ảnh bài viết</h4>
    <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="articleFile">Ảnh giới thiệu</label>
            <input name="userfile" type="file" class="form-control " id="articleFile">
            <input name="user_id" type="hidden" value="<?= $this->session->userdata('user_id') ?>">
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleFile">Bài viết được thay ảnh:</label>
            <a href="<?= base_url('/article/view/' . $articleFile[$file->getId()]['slugName']); ?>"><?= $articleFile[$file->getId()]['title']; ?></a>
        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-default">Lưu</button>
    </form>
</div>