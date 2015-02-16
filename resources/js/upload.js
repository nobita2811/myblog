$('#uploadBox').on('click', function () {
    $(this).html('<div id="progressOverlay" class="progress">\n\
        <div id="progressBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">\n\
            <span class="sr-only">0</span>% Complete\n\
        </div>\n\
    </div>');
    $('#uploadResult').html('');
});
$('#imageform').ajaxForm({
    dataType: 'json',
    beforeSubmit: function () {
        $(this).addClass('loading');
        $('#uploadBox').html('<div id="progressOverlay" class="progress">\n\
            <div id="progressBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">\n\
                <span class="sr-only">0</span>% Complete\n\
            </div>\n\
        </div>');
    },
    uploadProgress: function (event, position, total, percentComplete) {
        if ($('#photoimg').val()) {
            if (percentComplete == 100) {
                $('#progressBar').attr('aria-valuenow', percentComplete);
                $('#progressBar').css('width', percentComplete + '%').html('Processing...');
            } else {
                $('#progressBar').css('width', percentComplete + '%').html(percentComplete + '%');
            }
        } else {
            $('#uploadBox').html('<h2>Click to Upload</h2>');
        }
    },
    success: function (data) {
        //Your Custom JS Code Here
        $('#progressBar').html('Done');
        if (data.error) {
            $('#uploadResult').html(data.error);
        } else {
            var html = '<p><b>Name</b>: ' + data.name + ' <b>Link</b>: ' + data.link + ' (' + data.size + ')</p>';
            html += '<code><img src="' + data.link + '"></code>';
            $('#uploadResult').html(html);
        }
    }
});