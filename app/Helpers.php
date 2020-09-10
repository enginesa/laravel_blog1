<?php
function categories_post_orderby($categories){

    $new_categories=[];
    $tmpArray = array(); // Sıralanmasını istediğimiz alanı buraya aktracağız

    foreach ($categories as $key=>$category){
        $category["posts_count"]=count($category->getPosts);
        array_push($new_categories,$category);

        $tmpArray[$key] = $category['posts_count'];

    }

    array_multisort($tmpArray, SORT_DESC, $new_categories); // ESAS ALINACAK SIRALAMA DIZISI, SIRALAMA TİPİ, ANA DIZI




    return $new_categories;
}