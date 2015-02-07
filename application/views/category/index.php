<?php

foreach ($allCategories AS $category) {
    echo '<h2><a href="' . base_url('/category/view/' . $category->getSlugName()) . '">' . $category->getName() . '</a> (' . count($category->getArticles()) . ')</h2>';
    if(count($category->getArticles())) {
        $allArticles = array_slice($category->getArticles(), 0, $maxArticlePerCategory);
        echo '<pre><ol>';
        foreach ($allArticles AS $articles) {
            echo '<li><a href="' . base_url('/article/view/' . $articles->getArticle()->getSlugName()) . '">' . $articles->getArticle()->getTitle() . '</a></li>';
        }
        echo '</op>';
        echo '<p class="text-right"><a href="' . base_url('/category/view/' . $category->getSlugName()) . '">Xem toàn bộ</a></p>';
        echo '</pre>';
    }
}