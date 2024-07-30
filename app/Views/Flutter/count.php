<?= $this->extend('layouts/layout-main') ?>

<?= $this->section('title') ?>Count<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include("components/nav-bar") ?>

<div class="container">
    <h1>COUNT BUTTON</h1>

    <button type="button" class="btn btn-primary" id="button-count">count</button>
    <p class="count" id="p-count">0</p>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seleziona il bottone e il paragrafo
            const button = document.getElementById('button-count');
            const pCount = document.getElementById('p-count');

            // Aggiungi un evento di clic al bottone
            button.addEventListener('click', function() {
                // Ottieni il valore corrente del paragrafo
                let count = parseInt(pCount.textContent);

                // Incrementa il valore di 1
                count += 1;

                // Aggiorna il contenuto del paragrafo
                pCount.textContent = count;

               
            });
        });

        
    </script>
</div>
<?= $this->endSection() ?>
