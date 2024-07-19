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
            
          </ul>
          


          <div class="dropdown navbar-nav me-5 ms-auto mb-2 mb-lg-0">
            <?php if (auth()->loggedIn()): ?>

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              <?php esc(auth()->user()->name) ?>
            </button>
            <ul class="dropdown-menu">
              <li class="">
                <a class="dropdown-item" href="<?= url_to("logout") ?>">Logout</a>
              </li>
            </ul>

            <?php else: ?>
              
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
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
              
            
          </ul>
        </div>
      </div>
    </nav>