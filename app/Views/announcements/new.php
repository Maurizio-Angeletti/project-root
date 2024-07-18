<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>New Announcement<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">

            <?php if (session()->has("errors")): ?>
                <ul>
                    <?php foreach(session("errors") as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <a href="<?= url_to('AnnouncementController::index') ?>">Torna all'indice annunci</a>            

            <h2 class="mt-5">CREA UN NUOVO ANNUNCIO</h2>

            <?= form_open("announcement/create") ?>

            <?= $this->include("components/announcements-form") ?>
            
            <button class="btn btn-primary" type="submit">Crea Annuncio</button>
            
        </div>
    <?= $this->endSection() ?>

      
