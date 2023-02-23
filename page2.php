<?php
require_once __DIR__ . "/conn.php";
require_once __DIR__ . "/partials/header.php";

?>
    <div class="container-fluid  bg-picture">
        <div class="container">
            <h2 class="text-center text-dark pt-5 mb-5">You are one step away from your webpage</h2>
            <form action="insertInto.php" method="POST">
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light p-3 border-radius">
                            <label for="cover_image">Cover Image URL</label><br>
                            <input type="text" name="cover_image" required><br><br>
                            <label for="title_of_page">Main Title of Page</label><br>
                            <input type="text" name="title_of_page" required><br><br>
                            <label for="subtitle_of_page">Subtitle of Page</label><br>
                            <input type="text" name="subtitle_of_page" required><br><br>
                            <label for="about_you">Something about you</label><br>
                            <textarea name="about_you" id="about_you" cols="23" rows="3" required></textarea><br><br>
                            <label for="phone_num">Your telephone number</label><br>
                            <input type="text" name="phone_num" required><br><br>
                            <label for="location">Location</label><br>
                            <input type="text" name="location" required><br><br>
                        </div>

                        <div class="bg-light mt-5 p-3 border-radius">
                            <label for="type_of_product">Do you provide services or products?</label><br>
                            <select name="type_of_product" id="type_of_product" required>
                                <option value="" hidden></option>
                                <option value="Products">Product</option>
                                <option value="Services">Service</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-4 ">
                        <div class="bg-light p-3 border-radius">
                            <label for="image_url_1">Image URL</label><br>
                            <input type="text" name="image_url_1" required><br><br>
                            <label for="desc_of_service_or_product_1">Description of service/product</label><br>
                            <textarea name="desc_of_service_or_product_1" id="desc_of_service_or_product_1" cols="23" rows="3" required></textarea><br><br>
                            <label for="image_url_2">Image URL</label><br>
                            <input type="text" name="image_url_2" required><br><br>
                            <label for="desc_of_service_or_product_2">Description of service/product</label><br>
                            <textarea name="desc_of_service_or_product_2" id="desc_of_service_or_product_2" cols="23" rows="3" required></textarea><br><br>
                            <label for="image_url_3">Image URL</label><br>
                            <input type="text" name="image_url_3" required><br><br>
                            <label for="desc_of_service_or_product_3">Description of service/product</label><br>
                            <textarea name="desc_of_service_or_product_3" id="desc_of_service_or_product_3" cols="23" rows="3" required></textarea><br><br>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="bg-light p-3 border-radius">
                            <label for="desc_of_company">Description of your company, something people should be aware of before they contact you: </label><br>
                            <textarea name="desc_of_company" id="desc_of_company" cols="23" rows="3" required></textarea><br><br>
                            <label for="linkedin">Linkedin</label><br>
                            <input type="text" name="linkedin" required><br><br>
                            <label for="facebook">Facebook</label><br>
                            <input type="text" name="facebook" required><br><br>
                            <label for="twitter">Twitter</label><br>
                            <input type="text" name="twitter" required><br><br>
                            <label for="google">Google</label><br>
                            <input type="text" name="google" required><br><br>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-12 text-center mb-4">
                    <button class="btn btn-lg text-dark bg-white w-25">Submit</button>
                    </div>
                </div>
                    
            </form>
        </div>
    </div>
    
<?php
require_once __DIR__ . "/partials/footer.php";
?>