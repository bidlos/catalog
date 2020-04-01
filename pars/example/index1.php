<?php
include_once('../simple_html_dom.php');
$html = file_get_html('https://catalog.onliner.by/mouse');

foreach ($html->find('div.schema-product__part schema-product__part_4') as $article) {
    $item['title'] = $article->find('div.schema-product__title', 1)->plaintext;

    $articles[] = $item;
}

print_r($articles);
echo $html->find("#div", 0)->children(1)->id;
