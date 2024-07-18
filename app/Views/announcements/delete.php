<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Delete<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            <h1>Sei sicuro di voler cancellare questo annuncio?</h1>
            <div class="my-5">
                <h4><?= $announcement->title ?></h4>
                <p><?= $announcement->description ?></p>
                <?= $announcement->price ?>
            </div>
            
            
            <?= form_open("/announcement/delete" .$announcement->id) ?>

            <input type="hidden" name="_method" value="DELETE">

            <button class="btn btn-danger" type="submit">cancella</button>
        </div>
        
    <?= $this->endSection() ?>