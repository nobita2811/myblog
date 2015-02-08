<?php
require_once 'link_helper.php';
function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city" => @$ipdat->geoplugin_city,
                        "state" => @$ipdat->geoplugin_regionName,
                        "country" => @$ipdat->geoplugin_countryName,
                        "country_code" => @$ipdat->geoplugin_countryCode,
                        "continent" => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

$CI = & get_instance();

function getRandomArticle() {
    global $CI;
    $CI->load->model('article_model');
    $articles = $CI->article_model->getRandomArticle();
    $html = '';
    foreach ($articles AS $article) {
        $html .= '<li><a href="' . base_url('/article/view/' . $article['slugName']) . '">' . splitStringByWord($article['title'], 10) . '</a></li>';
    }
    return $html;
}

function splitStringByWord($string, $totalWord) {
    $splitWord = explode(' ', $string);
    return implode(' ', array_slice($splitWord, 0, $totalWord)) . '...';
}

function getCategoryNav() {
    global $CI;
    $CI->load->model('category_model');
    $categories = $CI->category_model->getAll();
    $html = '';
    foreach ($categories AS $category) {
        $html .= '<li><a href="' . base_url('/article/view/' . $category->getSlugName()) . '">' . $category->getName() . '</a></li>';
    }
    return $html;
}

function getTagNav($column) {
    global $CI;
    $CI->load->model('tag_model');
    $tags = $CI->tag_model->getAll();
    $allTags = count($tags);
    $maxTagInColumn = ceil($allTags / 3);
    $columnTags = array_slice($tags, (($column-1) * $maxTagInColumn), $maxTagInColumn);
    $html = '';
    foreach ($columnTags AS $tag) {
        $html .= '<li><a href="' . base_url('/article/view/' . $tag->getSlugName()) . '">' . $tag->getName() . '</a></li>';
    }
    return $html;
}

function getLastArticleViewed() {
    global $CI;
    $CI->load->model('article_model');
    $articles = $CI->article_model->getLastArticleViewed();
    if($CI->session->userdata('user_id')) {       
        $html = '';
        if(!count($articles)) {
            return '<li>Bạn chưa xem bài nào cả!</li>';
        } else {
            foreach ($articles AS $article) {
                $time = date_diff(new DateTime(), $article->getCreated())->format('%R%h giờ');
                $html .= '<li><span><img src="'.  ($article->getArticle()->getFile() ? getUpload($article->getArticle()->getFile()->getFileName(), 0) : getUpload('', 0)).'" class="img-responsive img-last-view"></span><a href="' . base_url('/article/view/' . $article->getArticle()->getSlugName()) . '">' . $article->getArticle()->getTitle() . '</a> <i>'.$time.'</i></li>';
            }
            return $html;
        }
    } else {
        return '<li>Bạn chưa đăng nhập!</li>';
    }
}
