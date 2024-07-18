<?= $this->extend('layouts/layout-main') ?>

<?= $this->section("title") ?>Show <?= $announcement->id ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <?= $this->include("components/nav-bar") ?>

    <div class="container">

        <a href="<?= site_url('/announcements/index') ?>">Ritorna all'indice annunci</a>

        <p><?= session("success") ?></p>

        <h1><?= esc($announcement->title) ?></h1>
        <p><?= esc($announcement->description) ?></p>
        <p><?= esc($announcement->price) ?></p>

    </div>

    
<?= $this->endSection() ?>