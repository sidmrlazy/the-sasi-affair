<section class="gallery-tilak mb-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/tilak-cover/cover-1.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/tilak-cover/cover-2.jpg" class="card-img-top" alt="...">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/tilak-cover/cover-3.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/tilak-cover/cover-4.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/tilak-cover/cover-5.jpg" class="card-img-top" alt="...">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/cover/tilak-cover/cover-6.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <a href="" data-bs-toggle="modal" data-bs-target="#tilakModal" class="col-md-12 view-all-button">
            <p>View All</p>
        </a>


        <div class="modal fade " id="tilakModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php
                                $all_files = glob("images/tilak/*.*");
                                for ($i = 0; $i < count($all_files); $i++) {
                                    $image_name = $all_files[$i];
                                    $supported_format = array('gif', 'jpg', 'jpeg', 'png');
                                    $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                    if (in_array($ext, $supported_format)) {

                                        echo '<img data-slide-to="' . $image_name . '"d-block class="w-100" src="' . $image_name . '" alt="' . $image_name . '" />'
                                            . "<br /><br />";
                                    } else {
                                        return $image_name;
                                    }
                                }
                                ?>
                            </div>
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