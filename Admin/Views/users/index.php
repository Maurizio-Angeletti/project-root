<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>index<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">
            

            <div class="row mb-5">
                <div class="col-3 mx-auto">
                    <p><?= session("message") ?></p>
                    <h1>INDICE UTENTI</h1>
                </div>
            </div>
            

            <div class="row">
                <div class="col-8 mx-auto">
                  

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Stato</th>
                            <th scope="col">Bannato</th>
                            <th scope="col">Inserito Il </th>
                            
                            

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
                                    <!-- usiamo l'helper creato in admin/helpers/admin_helper -->
                                    <td><?= yesno($user->isBanned()) ?></td>  
                                    <td><?= date('j/n/Y', strtotime($user->created_at)) ?> - <?= $user->created_at->humanize() ?></td>
                                    <td> <td><a class="btn btn-primary" href="<?= url_to("show_user", $user->id) ?>" role="button">dettaglio User</a></td></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                
            </div>
           

            
            <div class="row">
                <div class="col-6 mx-auto">
                    <?= $pager->links('default','my_full') ?>
                </div>
                
            </div>
            

            


        </div>
        
    <?= $this->endSection() ?>