<?php

foreach ($allTags AS $tag) {
    echo '<h2><a href="' . base_url('/tag/view/' . $tag->getSlugName()) . '">' . $tag->getName() . '</a> (' . count($tag->getArticles()) . ')</h2>';
    if(count($tag->getArticles())) {
        $allArticles = array_slice($tag->getArticles(), 0, $maxArticlePerTag);
        echo '<pre><ol>';
        foreach ($allArticles AS $articles) {
            echo '<li><a href="' . base_url('/article/view/' . $articles->getArticle()->getSlugName()) . '">' . $articles->getArticle()->getTitle() . '</a></li>';
        }
        echo '</op>';
        echo '<p class="text-right"><a href="' . base_url('/tag/view/' . $tag->getSlugName()) . '">Xem toàn bộ</a></p>';
        echo '</pre>';
    }
}