<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Edit Announcement<?= $this->endSection() ?>

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

            <p><?= session("message") ?></p>

            <a href="<?= url_to('AnnouncementController::index') ?>">Torna all'indice annunci</a>            

            <h2 class="mt-5">MODIFICA L'ANNUNCIO</h2>

            <?= form_open("/announcement/update" . $announcement->id) ?>

            <?= $this->include("components/announcements-form") ?>
            
            <button class="btn btn-primary" type="submit">Modifica</button>
            
        </div>
    <?= $this->endSection() ?>

      
