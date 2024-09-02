<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>index users<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            <p><?= session("message") ?></p>
            <a href="<?= url_to("AnnouncementController::new") ?>">Crea un nuovo annucnio</a>
            <h1>INDICE UTENTI</h1>


            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Attivo</th>
                    <th scope="col">creato il</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <th scope="row"><?= $user->id ?></th>
                            <td><?= esc($user->name) ?></td>
                            <td><?= esc($user->email) ?></td>
                            <td><?= $user->active == 1 ? 'Attivo' : 'Non attivo' ?></td>
                            <td><?= date('d/m/Y', strtotime($user->created_at)) ?></td> <!-- In questo modo formattiamo la data di creazione dell’user -->
                            <!-- <td><a class="btn btn-primary" href="" role="button">Dettaglio User</a></td>
                            <td><a class="btn btn-secondary" href="" role="button">Modifica User</a></td>
                            <td><a class="btn btn-danger" href="" role="button">Elimina User</a></td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

           
            <?= $pager->links('default', 'my_full') ?>




        </div>

    <?= $this->endSection() ?>