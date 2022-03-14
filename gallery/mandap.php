<section class="gallery-tilak mb-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/mandap-cover/cover1.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/mandap-cover/cover2.jpg" class="card-img-top" alt="...">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/mandap-cover/cover3.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/mandap-cover/cover4.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/mandap-cover/cover5.jpg" class="card-img-top" alt="...">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/mandap-cover/cover6.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <a href="" data-bs-toggle="modal" data-bs-target="#mandap" class="col-md-12 view-all-button">
            <p>View All</p>
        </a>


        <div class="modal fade " id="mandap">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner active">
                            <div class="carousel-item active">
                                <img src="images/mandap/IMG_2005.jpg" class="d-block img-fluid  w-100" alt="">
                            </div>
                            <?php
                            $all_files = glob("images/mandap/*.*");
                            for ($i = 0; $i < count($all_files); $i++) {
                                $image_name = $all_files[$i];
                                $supported_format = array('gif', 'jpg', 'jpeg', 'png');
                                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                if (in_array($ext, $supported_format)) {
                                    // $file_name= explode("/",$image_name);
                            ?>


                            <div class="carousel-item">
                                <?php

                                        echo '<img data-slide-to="' . $image_name . '" class="d-block img-fluid w-100" src="' . $image_name . '" alt="' . $image_name . '"/>'
                                        ?>
                            </div>
                            <?php
                                } else {
                                    return $image_name;
                                }
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>