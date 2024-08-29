<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= url_to('home') ?>">Home</a>
        <button class="navbar-toggler" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= url_to('index_announcements') ?>">Indice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url_to('new_announcement') ?>">Crea Annunci</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url_to('set_password') ?>">modifica password</a>
            </li>
            
          </ul>
          
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0"">
          <?php if (auth()->loggedIn()): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= url_to("logout") ?>">Logout</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
               <a class="nav-link" href="<?= url_to("login") ?>">Login</a>
            </li>
          <?php endif; ?>
            
          </ul>
        </div>
      </div>
    </nav>