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
    $('input[name="comment"').val(commentId);
    $('.form-show-reply').html('Trả lời bài #' + commentId + '<span class="btn-remove-reply" onclick="removeReply()">Hủy</span>');
    $('#form-content').focus();
}

function removeReply() {
    $('#form-comment').removeClass('form-comment-background');
    $('input[name="comment"').val('');
    $('.form-show-reply').html('');
}
