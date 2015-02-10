function getAllArticle(link) {
    $("#comment-real-time").html('');
    $.get(link, function (data) {
        $("#comment-real-time").html(data);
    });
}
