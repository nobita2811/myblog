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

function getUpload($fileName = null) {
    echo $fileName ? base_url(RS . '/upload/' . $fileName) : base_url(RS . '/upload/sample.png');
}