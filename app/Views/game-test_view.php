<?= $this->extend('layout/main-no-jumbotron'); ?>

<?= $this->section('content'); ?>

<div class="wrapper m-bottom-100px">
    <div class="img-wrapper" style="text-align: center;">
        <img src="asset/img/battle-ingame.jpg" alt="" style="width: 75%;">

    </div>

    <div class="btn-wrapper text-center ">
        <button class="cmn-btn mt-5 btn-download mb-4" data-id="windows"><i class="fab fa-windows"></i> Windows Download</button>
        <button class="cmn-btn cm-color-diff btn-download" data-id="os"><i class="far fa-hdd"></i> MacOs Download</button>
    </div>
</div>

<?= $this->endSection(); ?>