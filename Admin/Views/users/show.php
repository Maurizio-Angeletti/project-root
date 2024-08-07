<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>user <?= $user->id ?><?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            

            <div class="row mb-5">
                <div class="col-3 mx-auto">
                    <p><?= session("message") ?></p>
                    <h1>Card utente id: <?=$user->id?></h1>
                </div>
            </div>
            

            <div class="row">
                <div class="col-8 mx-auto">
                  
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nome: <?= esc($user->name) ?></li>
                            <li class="list-group-item">Email: <?= esc($user->getEmail()) ?></li>
                            <li class="list-group-item"> Data Registrazione: <?= date('j/n/Y', strtotime(esc($user->created_at))) ?> -  <?= $user->created_at->humanize() ?></li>
                        </ul>
                    </div>

                    <?= form_open('admin/user/'. $user->id . "/toggle-ban") ?>

                        <button class="btn btn-primary"><?= $user->isBanned() ? "Togli ban" : "Banna" ?></button>
                    </form>
                </div>
            </div>
           

        </div>
        
    <?= $this->endSection() ?>