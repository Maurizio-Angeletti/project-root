


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= url_to('home') ?>">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url_to('index_announcements') ?>">Indice Annunci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url_to('new_announcement') ?>">Crea Annunci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url_to('index_users') ?>">Lista Utenti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= url_to('counter') ?>">Counter</a>
        </li>
        
        
      </ul>

      

      <div class="dropdown navbar-nav me-5 ms-auto mb-2 mb-lg-0">
        <?php if (auth()->loggedIn()): ?>

        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          <?= esc(auth()->user()->name) ?>
        </button>
        <ul class="dropdown-menu">
          <li class="">
            <a class="dropdown-item" href="<?= url_to("logout") ?>">Logout</a>
          </li>
          <li class="">
            <a class="dropdown-item" href="<?= url_to("set_password") ?>">Modifica <br> Password</a>
          </li>

          
        </ul>

        <?php else: ?>
          
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Guest
          </button>
          <ul class="dropdown-menu">
            <li class="">
              <a class="dropdown-item" href="<?= url_to("login") ?>">Login</a>
            </li>

            <li class="">
              <a class="dropdown-item" href="<?= url_to("register") ?>">Registrati</a>
            </li>
          </ul>
          

        <?php endif; ?>
          
      
      </div>
      
    </div>
  </div>
</nav>