<?php

echo '<h2><a href="' . base_url('/category/view/' . $category->getSlugName()) . '">' . $category->getName() . '</a> (' . count($category->getArticles()) . ')</h2>';

if (count($allCategories)) {
    echo '<ul class="list-group">';
    foreach ($allCategories AS $articles) {
        echo '<li class="list-group-item">'
        . '<span class="badge">' . $articles->getViews() . '</span>'
        . '<a href="' . base_url('/article/view/' . $articles->getSlugName()) . '">' . $articles->getTitle() . '</a>'
        . ' <i>'.$articles->getCreated()->format('d-m-Y').'</i></li>';
    }
    echo '</ul>';
} else {
    echo 'No data';
}
