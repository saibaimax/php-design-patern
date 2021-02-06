<?php

require_once 'director.php';
require_once 'concreteBuilder.php';

$builder = new ConcreteBuilder();
$url = 'http://www.php.net/news.rss';

$director = new Director($builder, $url);
foreach ($director->getNews() as $article) {
    printf('<li>[%s] <a href="%s">%s</a></li>', $article->getDate(), $article->getUrl(), htmlspecialchars($article->getTitle(), ENT_QUOTES, mb_internal_encoding())
    );
}
