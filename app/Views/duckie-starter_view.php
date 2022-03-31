<?= $this->extend('layout/main-no-jumbotron'); ?>



<?= $this->section('content'); ?>


<div class="wrapper">
    <div class="membership mb-5">

        <div class="title d-flex justify-content-between mb-3">
            <div class="">
                <h2>Membership</h2>
            </div>
            <div>
                <h2 class="font-weight-normal">APY 10%</h2>
            </div>
        </div>
        <div class="text-center mb-4">
            <button class="button button-pills-lg border-radius-50">Connect Wallet</button>
        </div>

        <div class="content">
            <div class="stake-wrapper bg-color-white-t08 border-radius-25 p-4">
                <a href="" class="mb-3"><i class="bi bi-question-circle-fill"></i> How to stake</a>
                <div class="stake-grade">
                    <div class="d-lg-flex justify-content-around">
                        <div class="bronze text-center">
                            <div class="tier-title">
                                <h3>Bronze</h3>
                                <span>20 000 NFTB</span>
                            </div>

                            <button class="button-wallet-tier button button-pills border-radius-50 bg-color-white-t08">
                                <span>Connect Wallet</span>
                            </button>
                        </div>

                        <div class="silver text-center">
                            <div class="tier-title">
                                <h3>Bronze</h3>
                                <span>20 000 NFTB</span>
                            </div>

                            <button class="button-wallet-tier button button-pills border-radius-50 bg-color-white-t08">
                                <span>Connect Wallet</span>
                            </button>
                        </div>

                        <div class="gold text-center">
                            <div class="tier-title">
                                <h3>Bronze</h3>
                                <span>20 000 NFTB</span>
                            </div>

                            <button class="button-wallet-tier button button-pills border-radius-50 bg-color-white-t08">
                                <span>Connect Wallet</span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="progress-status d-flex position-relative">
                    <div class="position-relative d-none-991" style="top: -5px;">
                        <span>You staked amount: NFTB</span>
                    </div>
                    <div class="progress-bar-starter grey-bar flex-fill border-radius-25 " style="height: 8px;">
                        <div class="loaded-bar-starter green-bar w-75 border-radius-25 " style="height: 8px;"></div>
                        <div class="box-progress bg-color-grey rounded d-inline-block p-2 position-relative" style="top: -25px;">
                            <span class="text-light">0,00</span>
                        </div>
                        <div class="checkpoint-ball d-flex justify-content-around">

                            <div class="checkpoint-duckie" data-checkpoint="1"></div>
                            <div class="checkpoint-duckie" data-checkpoint="2"></div>
                            <div class="checkpoint-duckie" data-checkpoint="3"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="upcoming-projects mb-5">
        <div class="title">
            <h2>Upcoming Projects</h2>
        </div>

        <div class="content">
            <div class="row">

                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                
                
                




            </div>
        </div>

    </div>

    <div class="previous-project mb-5">
        <div class="title">
            <h2>Previous Projects</h2>
        </div>

        <div class="content">
            <div class="row">

                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="col-xl-4 col-lg-6 col-md-6 py-3">
                    <div class="my-card project-card bg-color-white-t08" style="border: none;">
                        <div>
                            <img src="/asset/img/dummy-image.jpg" class="card-cover-img card-img-top" alt="...">
                            <img src="/asset/img/logo-dummy.png" class="position-absolute" style="top: 30px; left:30px; height:50px">
                            <div class="total-raise position-absolute border-radius-50 bg-color-black-3">
                                <span class="text-white" style="font-size: 14px;">Total Raise: $80,000</span>
                            </div>
                            
                            <div class="sold-out position-absolute rounded">
                                <span class="text-white font-weight-bold" style="font-size: 14px;">SOLD OUT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body-content mb-4">
                                <div class="card-date d-flex mb-3">
                                    <img src="/asset/img/icons/facebook.png" class="align-self-center mr-2" style="height:25px;">
                                    <span class="align-self-center text-white">INO</span>
                                    <span class="align-self-center ml-auto text-white">February 21, 2022</span>
                                </div>
                                <h3 class="card-title" style="font-size:34px">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                            <div class="card-button text-center ">
                                <button class="button-detail border-radius-50">Details</button>
                            </div>
                        </div>

                    </div>
                </section>
                
                




            </div>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>