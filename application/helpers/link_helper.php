<?php

define('RS', 'resources');

function getCss($css) {
    echo base_url(RS . '/css/' . $css . '.css');
}

function getJs($js) {
    echo base_url(RS . '/js/' . $js . '.js');
}

function getImage($image) {
    echo base_url(RS . '/image/' . $image);
}
