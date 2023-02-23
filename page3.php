<?php
include_once __DIR__ . "/conn.php";
include_once __DIR__ . "/partials/header.php";


$id = $_GET['id'];
$company = "SELECT * FROM webpage WHERE id = :id";
$stmt = $pdo->prepare($company);
$stmt->execute(['id' => $id]);
$row = $stmt->fetch();

include_once __DIR__ . "/partials/menu.php";
?>

<div class="container-fluid">
    <div id="home" class="row">
        <div class="relative">
            <img src="<?=$row['cover_image']?>" alt="" class="cover-image">
            <h1 class="absolute topLeft1 text-white"><?=$row['title_of_page']?></h1>
            <h2 class="absolute topLeft2 text-white"><?=$row['subtitle_of_page']?></h2>
        </div>
    </div>

    <div class="container mt-5">
        <div id="about-us" >
            <div class="padding-margin"></div>
            <div class="row">
                <div class="col-6 offset-3 text-center">
                    <h3>About us</h3>
                    <p><?=$row['about_you']?></p>
                    <hr>
                    <p class="m-0">Tel: <?=$row['phone_num']?></p>
                    <p>Location: <?=$row['location']?></p>
                </div>
            </div>
        </div>

        <div id="services">
            <div class="padding-margin"></div>
            <h2 class="mt-4"><?=$row['type_of_product']?></h2>
            <div class="row mt-4 pb-4">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                    <img src="<?=$row['image_url_1']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row['type_of_product']?> description</h5>
                        <p class="card-text"><?=$row['desc_of_service_or_product_1']?></p>
                    </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$row['image_url_2']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['type_of_product']?> description</h5>
                            <p class="card-text"><?=$row['desc_of_service_or_product_2']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$row['image_url_3']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['type_of_product']?> description</h5>
                            <p class="card-text"><?=$row['desc_of_service_or_product_3']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        
        <div id="contact">
            <div class="row mt-5">
                <div class="col-6">
                    <h2>Contact</h2>
                    <p><?=$row['desc_of_company']?></p>
                </div>
                <div class="col-6">
                    <label for="name">Name</label><br>
                    <input type="text" name="name"><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email"><br>
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                    <div class="text-center">
                        <button class="btn btn-small bg-warning">Send</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-dark text-center mt-4">
        <div class="col-12">
            <p class="text-white">Copyright by Anastazija @ Brainster</p>
            <a href="<?=$row['linkedin']?>" target="_blank">LinkedIn</a>
            <a href="<?=$row['facebook']?>" target="_blank">Facebook</a>
            <a href="<?=$row['twitter']?>" target="_blank">Twitter</a>
            <a href="<?=$row['google']?>" target="_blank">Google</a>
        </div>
    </div>
</div>


<?php
include_once __DIR__ . "/partials/footer.php";
?>