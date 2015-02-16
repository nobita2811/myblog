function getAllArticle(link) {
    $("#comment-real-time").html('');
    $.get(link, function (data) {
        $("#comment-real-time").html(data);
        $("#dev-table").dataTable({
            searching: false,
            bLengthChange: false,
            bFilter: false,
            bInfo: false,
            "ordering": false,
            "oLanguage": {
                "sEmptyTable": "Hiện tại chưa có comment nào. Bạn hãy là người đầu tiên :D",
                "oPaginate": {
                    "sPrevious": "Trước",
                    "sNext": "Sau"
                }
            }
        });
    });
}
function addReply(commentId) {
    $('#form-comment').addClass('form-comment-background');
    $('.form-show-reply').html('');
    $('#form-comment-id').val(commentId);
    $('.form-show-reply').html('Trả lời bài #' + commentId + '<span class="btn-remove-reply" onclick="removeReply()">Hủy</span>');
    $('#form-content').focus();
}

function removeReply() {
    $('#form-comment').removeClass('form-comment-background');
    $('#form-comment-id').val('');
    $('.form-show-reply').html('');
}
