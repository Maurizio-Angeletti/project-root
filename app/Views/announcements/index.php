<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>index<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            <p><?= session("message") ?></p>
            <a href="<?= url_to("AnnouncementController::new") ?>">Crea un nuovo annucnio</a>
            <h1>INDICE ANNUNCI</h1>

            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($announcements as $announcement): ?>
                        <tr>
                            <th scope="row"><?= $announcement->id ?></th>
                            <td><?= esc($announcement->title) ?></td>
                            <td><?= esc($announcement->description) ?></td>
                            <td><?= esc($announcement->price) ?></td>
                            <td><a class="btn btn-primary" href="<?= url_to("show_announcement", $announcement->id) ?>" role="button">Apri annuncio</a></td>
                            <td><a class="btn btn-secondary" href="<?= url_to("edit_announcement", $announcement->id) ?>" role="button">Modifica annuncio</a></td>
                            <td><a class="btn btn-danger" href="<?= url_to("delete_announcement", $announcement->id) ?>" role="button">Elimina annuncio</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    <?= $this->endSection() ?>