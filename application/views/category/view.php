<?php

dv($allCategories);
/*

foreach ($allCategories AS $category) {
    echo '<h2><a href="' . base_url('/category/view/' . $category->getSlugName()) . '">' . $category->getName() . '</a> (' . count($category->getArticles()) . ')</h2>';
    if(count($category->getArticles())) {
        echo '<pre><ol>';
        foreach ($category->getArticles() AS $articles) {
            echo '<li><a href="' . base_url('/article/view/' . $articles->getArticle()->getSlugName()) . '">' . $articles->getArticle()->getTitle() . '</a></li>';
        }
        echo '</op></pre>';
    }
}