<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            <h1>BENVENUTO NEL SITO</h1>
        </div>
        
    <?= $this->endSection() ?>