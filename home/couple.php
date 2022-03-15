<!-- Samiksha Image Modal -->
<div class="modal fade" id="samikshaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-l">
        <div class="modal-content">
            <div class="modal-body modal-main-image">
                <!-- <img src="images/cover/bride.jpg" alt="" class="img-fluid"> -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/cover/bride.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/cover/bride.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/cover/bride.jpg" class="d-block w-100" alt="">
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


<!-- Siddharth Image Modal Section -->
<div class="modal fade" id="siddharthModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

            <div class="modal-body modal-main-image">
                <!-- <img src="images/cover/groom.jpg" alt="" class="img-fluid"> -->
                <div id="carouselExampleControlsGroom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/cover/groom.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/cover/groom.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/cover/groom.jpg" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsGroom"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsGroom"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 couple" data-bs-toggle="modal" data-bs-target="#samikshaModal">
                <div class="couple-content">
                    <img src="images/cover/bride.jpg" alt="">
                    <h1>Samiksha (Sa)</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

            <!-- <div class="col-md-6 couple">
                <div class="couple-content">
                    <img src="images/logo-new.png" alt="">
                </div>
            </div> -->
            <div class="col-md-6 couple" data-bs-toggle="modal" data-bs-target="#siddharthModal">
                <div class="couple-content">
                    <img src="images/cover/groom.jpg" alt="">
                    <h1>Siddharth (Si)</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>


        </div>
    </div>
</section>