<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>set password<?= $this->endSection() ?>

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
            

           

            <?= form_open("set-password") ?>
            
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="password" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required>
                    <label for="password"><?= lang('Auth.password') ?></label>
                </div>

                <!-- Password (Again) -->
                <div class="form-floating mb-5">
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required>
                    <label for="password_confirm"><?= lang('Auth.passwordConfirm') ?></label>
                </div>

                <div class="d-grid col-12 col-md-8 mx-auto m-3">
                            <button type="submit" class="btn btn-primary btn-block">Modifica</button>
                </div>

            </form>
        </div>
    <?= $this->endSection() ?>

      
