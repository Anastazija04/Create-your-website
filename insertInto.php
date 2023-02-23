<?php

require_once __DIR__ . "/conn.php";

require_once __DIR__ . "/variables.php";



if([$_SERVER['REQUEST_METHOD'] == 'POST']) {
    $sql = "INSERT INTO webpage(cover_image, title_of_page, subtitle_of_page, about_you, phone_num,location, type_of_product, image_url_1, desc_of_service_or_product_1, image_url_2, desc_of_service_or_product_2, image_url_3, desc_of_service_or_product_3, desc_of_company, linkedin, facebook, twitter, google) VALUES (:cover_image, :title_of_page, :subtitle_of_page, :about_you, :phone_num, :location, :type_of_product, :image_url_1, :desc_of_service_or_product_1, :image_url_2, :desc_of_service_or_product_2, :image_url_3, :desc_of_service_or_product_3, :desc_of_company, :linkedin, :facebook, :twitter, :google)";

    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([ 'cover_image'=>$cover_image, 'title_of_page'=>$title_of_page, 'subtitle_of_page'=>$subtitle_of_page, 'about_you'=>$about_you, 'phone_num'=>$phone_num, 'location'=>$location, 'type_of_product'=>$type_of_product, 'image_url_1'=>$image_url_1, 'desc_of_service_or_product_1'=>$desc_of_service_or_product_1, 'image_url_2'=>$image_url_2, 'desc_of_service_or_product_2'=>$desc_of_service_or_product_2, 'image_url_3'=>$image_url_3, 'desc_of_service_or_product_3'=>$desc_of_service_or_product_3, 'desc_of_company'=>$desc_of_company, 'linkedin'=>$linkedin, 'facebook'=>$facebook, 'twitter'=>$twitter, 'google'=>$google]);

    $id = $pdo->lastInsertId();

    header("Location: page3.php?id=".$id);
    die();
} else {
    header("Location: page2.php");
    die();
}

?>