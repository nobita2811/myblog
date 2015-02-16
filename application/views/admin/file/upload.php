<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
        <div class="panel-body">
            <form id="imageform" method="post" enctype="multipart/form-data" action="">
                <div id="uploadBox" class="well" onClick="$('#photoimg').click();">
                    <H2>Click to Upload</H2>
                </div>
                <input type="file" class="hide" name="userfile" id="photoimg" onchange="$(this.form).submit();" required/>
            </form>
        </div>
        <div class="panel-body" id="uploadResult"></div>
    </div>
</div>
<!-- /container -->