<script>
$('#articleCategory').tokenfield({
  autocomplete: {
    source: ['<?= implode("','", $categories); ?>'],
    delay: 10
  },
  showAutocompleteOnFocus: true
});
$('#articleTag').tokenfield({
  autocomplete: {
    source: ['<?= implode("','", $tags); ?>'],
    delay: 10
  },
  showAutocompleteOnFocus: true
});

$('#articleCategory, #articleTag').on('tokenfield:createtoken', function (event) {
    var existingTokens = $(this).tokenfield('getTokens');
    $.each(existingTokens, function(index, token) {
        if (token.value === event.attrs.value)
            event.preventDefault();
    });
});
</script>