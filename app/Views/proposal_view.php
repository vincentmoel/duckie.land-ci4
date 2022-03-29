<?= $this->extend('layout/main-no-jumbotron'); ?>



<?= $this->section('content'); ?>
<div class="wrapper m-bottom-100px">
    <div class="title mb-3">
        <h1>Proposal</h1>
    </div>

    <div class="new-proposal-wrapper">
        <div class="field-title">

            <input type="text" class="w-100 mb-2 input-title"  placeholder="Title (proposal in one sentence)">
        </div>
        <div class="field-desc">
            <input type="text" class="w-100 mb-4 input-desc" placeholder="Tell more about your proposal (optional)">
        </div>
    </div>


    <div class="my-card w-100 mx-auto">
        <div class="card-header p-4" style="border-bottom: 1px solid #D0D7DE;">
            <h2>Action</h2>
        </div>
        <div class="card-content p-4">
            <select class="form-select form-select-lg p-0 mb-3" aria-label=".form-select-lg example">
                <option selected disabled class="bg-white text-center">Duration :</option>
                <option value="1" class="bg-white text-dark text-center">1d</option>
                <option value="2" class="bg-white text-dark text-center">3d</option>
                <option value="3" class="bg-white text-dark text-center">5d</option>
                <option value="3" class="bg-white text-dark text-center">1w</option>
                <option value="3" class="bg-white text-dark text-center">3w</option>
                <option value="3" class="bg-white text-dark text-center">5w</option>
            </select>

            <button class="bg-color-white-t08 w-100 color-white button-normal border-radius-10">Please, fill title</button>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>