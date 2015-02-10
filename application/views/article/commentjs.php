<script type="text/javascript" src="<?= getJs('comment'); ?>"></script>
<script>
    getAllArticle('<?= base_url('/comment/getallcommentbyarticle/' . $article->getId()); ?>');

    $('#form-comment').on('submit', function () {
        $(this).attr('disabled', true);
        $.ajax({
            type: "POST",
            url: '<?= base_url('/comment/save'); ?>',
            data: $(this).serializeArray(),
            success: function() {
                $(this).removeAttr('disabled');
                $('textarea[name="content"]').val('');
            },
            async: false
        });
        getAllArticle('<?= base_url('/comment/getallcommentbyarticle/' . $article->getId()); ?>');
        return false;
    });
</script>