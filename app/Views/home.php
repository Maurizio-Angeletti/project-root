<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">

            <?php if (auth()->loggedIn()): ?>
                <h1>BENVENUTO <span class="text-uppercase"><?= esc(auth()->user()->name) ?></span>  </h1>
            <?php else: ?>
                <h1>BENVENUTO GUEST</h1>
            <?php endif; ?>


        </div>
        
    <?= $this->endSection() ?>