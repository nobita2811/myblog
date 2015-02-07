<?php

function getCss($css) {
    echo base_url(RS . '/css/' . $css . '.css');
}

function getJs($js) {
    echo base_url(RS . '/js/' . $js . '.js');
}

function getImage($image) {
    echo base_url(RS . '/image/' . $image);
}

function getUpload($fileName = null, $return = 1) {
    $img = $fileName ? base_url(RS . '/upload/' . $fileName) : base_url(RS . '/upload/sample.png');
    if($return) {
        echo $img;
    } else {
        return $img;
    }
}

function getCat($article) {
    $return = [];
    foreach($article AS $item) {
        $return[] = $item->getCategory()->getName();
    }
    return $return ? implode(',', $return) : '';
}

function getTag($article) {
    $return = [];
    foreach($article AS $item) {
        $return[] = $item->getTag()->getName();
    }
    return $return ? implode(',', $return): '';
}