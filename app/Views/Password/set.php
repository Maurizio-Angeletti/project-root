<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Set Password<?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <?= $this->include("components/nav-bar") ?>

        <div class="container">

            <?php if (session()->has("errors")): ?>
                <ul class="mt-5 p-0">
                    <?php foreach(session("errors") as $error): ?>
                        <li class="alert alert-danger d-flex align-items-center" role="alert"> 
                            <div>
                                <?= $error ?>
                            </div>
                        </li>
                        
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            

            <p><?= session("message") ?></p>


            <h2 class="mt-5">Modifica la Password</h2>

            <?= form_open('','class="" id="" novalidate')?>
            
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required> <!-- l'attributo required blocca il form quindi non vengono viste le session e nostra solo il messaggio e mostra solo il messaggio del primo campo con required mancante !   -->
                <label for="floatingPasswordInput"><?= lang('Auth.password') ?></label>
            </div>

            <!-- Password (Again) -->
            <div class="form-floating mb-5">
                <input type="password" class="form-control" id="floatingPasswordConfirmInput" name="password_confirmation" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required>
                <label for="floatingPasswordConfirmInput"><?= lang('Auth.passwordConfirm') ?></label>
            </div>

                <button class="btn btn-primary" type="submit">Modifica</button>

            </form>
            
          
            
        </div>
    <?= $this->endSection() ?>

      
