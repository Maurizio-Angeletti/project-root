<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>
        <?php if (auth()->loggedIn()) : ?>
            <div class="container">
                <h1>BENVENUTO <?= esc(auth()->user()->name) ?></h1>
            </div>
        <?php else : ?>
            <div class="container">
                <h1>BENVENUTO GUEST</h1>
            </div>
        <?php endif; ?>
    
        
    <?= $this->endSection() ?>