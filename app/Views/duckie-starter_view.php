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
            <a href=""><i class="bi bi-question-circle-fill"></i> How to stake</a>
            <div class="d-flex">
                <div>
                    <span>You staked amount: NFTB</span>
                </div>
                <div class="button-small bg-color-white-t08 d-inline-block">
                    <span>0,00</span>
                </div>
                <div class="stake-grade d-flex justify-content-between">
                    <div class="bronze">
                        <div class="text text-center">
                            <h3>Bronze</h3>
                            <span>20 000 NFTB</span>
                        </div>

                        <div class="button button-pills border-radius-50 bg-color-white-t08 text-center">
                            <span>Connect Wallet</span>
                        </div>
                    </div>

                    <div class="silver">
                        <div class="text text-center">
                            <h3>Bronze</h3>
                            <span>20 000 NFTB</span>
                        </div>

                        <div class="button button-pills border-radius-50 bg-color-white-t08 text-center">
                            <span>Connect Wallet</span>
                        </div>
                    </div>

                    <div class="gold">
                        <div class="text text-center">
                            <h3>Bronze</h3>
                            <span>20 000 NFTB</span>
                        </div>

                        <div class="button button-pills border-radius-50 bg-color-white-t08 text-center">
                            <span>Connect Wallet</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>