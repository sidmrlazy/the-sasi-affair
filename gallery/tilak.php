<section class="section album-header" id="tilak">
    <div class="container">
        <div class="row">
            <div class="col-md-6 section-header">
                <img src="images/genda-vector.png" alt="" />
                <!-- <img src="images/logo-new.png" alt="" id="logo" /> -->
            </div>

            <div class="col-md-6 section-header-text">
                <h1>Tilak Ceremony</h1>
                <p>The ceremony is the first step towards strengthening the new relationship between the two families.
                    The significance of the ceremony lies in the fact that both the families celebrate their new bond
                    with joy and merriment</p>
            </div>
        </div>
    </div>
</section>
<section class="gallery-tilak main-album-section mb-5">
    <div class="container">
        <div class="row grid-gallery-main">
            <div class="col-md-4" class="grid-gallery">
                <img src="images/cover/tilak-cover/cover-1.webp" class="grid-gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/cover/tilak-cover/cover-2.webp" class="grid-gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/cover/tilak-cover/cover-3.webp" class="grid-gallery-img">
            </div>
        </div>

        <div class="row grid-gallery-main">
            <div class="col-md-4" class="grid-gallery">
                <img src="images/cover/tilak-cover/cover-4.webp" class="grid-gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/cover/tilak-cover/cover-5.webp" class="grid-gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/cover/tilak-cover/cover-6.webp" class="grid-gallery-img">
            </div>
        </div>
        <!-- <center>
            <table>
                <tr>
                    <td rowspan="2" colspan="2"><img src="images/cover/tilak-cover/cover-1.webp" class="big"></td>
                    <td><img src="images/cover/tilak-cover/cover-2.webp" class="small"></td>
                </tr>
                <tr>
                    <td><img src="images/cover/tilak-cover/cover-3.webp" class="small"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><img src="images/cover/tilak-cover/cover-4.webp" class="small"></td>
                    <td rowspan="2" colspan="2"><img src="images/cover/tilak-cover/cover-5.webp" class="big"></td>
                </tr>
                <tr>
                    <td><img src="images/cover/tilak-cover/cover-6.webp" class="small"></td>
                </tr>
            </table>
        </center> -->

        <a href="gallery/view_all/tilak_gallery.php" class="col-md-12 view-all-button" style="text-decoration: none;">
            <p>View All</p>
        </a>


        <!-- <div class="modal fade " id="tilakModal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div id="carouselExampleControlsTilak" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/tilak/IMG_2619.webp" class="d-block  w-100" alt="">
                            </div>
                            <?php
                            $all_files = glob("images/tilak/*.*");
                            for ($i = 0; $i < count($all_files); $i++) {
                                $image_name = $all_files[$i];
                                $supported_format = array('gif', 'jpg', 'jpeg', 'png', 'webp');
                                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                if (in_array($ext, $supported_format)) {
                            ?>

                            <div class="carousel-item">
                                <?php echo '<img data-slide-to="' . $image_name . '" class="d-block  img-fluid w-100" src="' . $image_name . '" alt="' . $image_name . '"/>' ?>
                            </div>
                            <?php
                                } else {
                                    return $image_name;
                                }
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsTilak" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsTilak" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>