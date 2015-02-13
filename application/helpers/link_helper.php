<?php

function getCss($css) {
    echo base_url(RS . '/css/' . $css . '.css');
}

function getJs($js) {
    echo base_url(RS . '/js/' . $js . '.js');
}

function getAvatar(Entity\Users $user = null) {
    if(null === $user) {
        return getImage('admin.png');        
    }
    // user is admin
    if ($user->getGender()) {
        // user is man
        return getImage('man.png');
    } else {
        // user is woman
        return getImage('woman.png');
    }
}

function getImage($image) {
    return base_url(RS . '/image/' . $image);
}

function getUpload($fileName = null, $return = 1) {
    $img = $fileName ? base_url(RS . '/upload/' . $fileName) : base_url(RS . '/upload/sample.png');
    if ($return) {
        echo $img;
    } else {
        return $img;
    }
}

function getCat($article) {
    $return = [];
    foreach ($article AS $item) {
        $return[] = '<a href="' .  base_url('category/view/'.$item->getCategory()->getSlugName()) . '" target="_blank">'.$item->getCategory()->getName().'</a>';
    }
    return $return ? implode(',', $return) : '';
}

function getTag($article) {
    $return = [];
    foreach ($article AS $item) {
        $return[] = '<a href="' .  base_url('tag/view/'.$item->getTag()->getSlugName()) . '" target="_blank">'.$item->getTag()->getName().'</a>';
    }
    return $return ? implode(',', $return) : '';
}
