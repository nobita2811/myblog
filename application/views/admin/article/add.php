<div class="container">
    <h4>Thêm mới một bài viết</h4>
    <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleName"><span class="glyphicon glyphicon-file"></span> Tên bài viết</label>
            <div class="col-sm-10"><input name="title" type="text" class="form-control " id="articleName"></div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleCategory"><span class="glyphicon glyphicon-list"></span> Danh mục</label>
            <div class="col-sm-10"><input type="text" class="form-control" id="articleCategory" name="categories"></div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleTag"><span class="glyphicon glyphicon-tag"></span> Thẻ tag</label>
            <div class="col-sm-10"><input type="text" class="form-control" id="articleTag" name="tags"></div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleSource"><span class="glyphicon glyphicon-link"></span> Nguồn</label>
            <div class="col-sm-10"><input name="source" type="text" class="form-control " id="articleSource"></div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleFile"><span class="glyphicon glyphicon-picture"></span> Ảnh giới thiệu</label>
            <div class="col-sm-10"><input name="userfile" type="file" class="form-control " id="articleFile"></div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleSticky"><span class="glyphicon glyphicon-paperclip"></span> Đính bài viết lên đầu</label>
            <div class="col-sm-10"><span class="col-lg-1 text-center"><div class="col-sm-10"><input name="sticky" type="checkbox" id="articleSticky" value="1"></span></div>
        </div>        
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleSummary"><span class="glyphicon glyphicon-tree-deciduous"></span> Giới thiệu qua</label>
            <div class="col-sm-10"><textarea name="summary" type="text" class="form-control" id="articleSummary"></textarea></div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="articleContent"><span class="glyphicon glyphicon-th"></span> Nội dung</label>
            <div class="col-sm-10"><textarea name="content" type="text" class="form-control editor" id="articleContent"></textarea></div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-10 col-sm-offset-2"><button type="submit" class="btn btn-default">Lưu</button></div>
    </form>
</div>