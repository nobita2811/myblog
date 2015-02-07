<?php

foreach ($allTags AS $tag) {
    echo '<h2><a href="' . base_url('/tag/view/' . $tag->getSlugName()) . '">' . $tag->getName() . '</a> (' . count($tag->getArticles()) . ')</h2>';    
}