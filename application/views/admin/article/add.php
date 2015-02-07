<div class="container">
    <h4>Thêm mới một bài viết</h4>
    <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="articleName">Tên bài viết</label>
            <input name="title" type="text" class="form-control " id="articleName">
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleCategory">Danh mục</label>
            <input type="text" class="form-control" id="articleCategory" name="categories">
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleTag">Thẻ tag</label>
            <input type="text" class="form-control" id="articleTag" name="tags">
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleSource">Nguồn</label>
            <input name="source" type="text" class="form-control " id="articleSource">
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleFile">Ảnh giới thiệu</label>
            <input name="userfile" type="file" class="form-control " id="articleFile">
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleSticky">Đính bài viết lên đầu</label>
            <span class="col-lg-1 text-center"><input name="sticky" type="checkbox" id="articleSticky" value="1"></span>
        </div>        
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleSummary">Giới thiệu qua</label>
            <textarea name="summary" type="text" class="form-control" id="articleSummary"></textarea>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label for="articleContent">Nội dung</label>
            <textarea name="content" type="text" class="form-control editor" id="articleContent"></textarea>
        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-default">Lưu</button>
    </form>
</div>