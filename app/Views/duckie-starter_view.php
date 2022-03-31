<?= $this->extend('layout/main-no-jumbotron'); ?>



<?= $this->section('content'); ?>


<div class="wrapper">
    <div class="title d-flex justify-content-between mb-3">
        <div class="">
            <h2>Membership</h2>
        </div>
        <div>
            <h2>APY 10%</h2>
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
                <div class="progress-bar-starter grey-bar flex-fill border-radius-25 " style="height: 8px;" >
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


<?= $this->endSection(); ?>