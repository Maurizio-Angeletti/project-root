<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>index<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            <p><?= session("message") ?></p>
            <a href="">link</a>
            <h1>INDICE UTENTI</h1>

            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col">NOME</th>
                    <th scope="col">Email</th>
                    <th scope="col">stato</th>
                    <th scope="col">inserito il </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <th scope="row"><?= $user->id ?></th>
                            <td><?= esc($user->name) ?></td>
                            <td><?= esc($user->getEmail()) ?></td>
                            <td><?= esc($user->isActivated()) ? 'attivo' : 'non attivo' ?></td>
                            <td><?= date('j/n/Y', strtotime(esc($user->created_at))) ?></td>
                            <!-- <td><a class="btn btn-primary" href="" role="button">Apri annuncio</a></td>
                            <td><a class="btn btn-secondary" href="" role="button">Modifica annuncio</a></td>
                            <td><a class="btn btn-danger" href="" role="button">Elimina annuncio</a></td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            

            <?= $pager->links('default','my_full') ?>

            


        </div>
        
    <?= $this->endSection() ?>