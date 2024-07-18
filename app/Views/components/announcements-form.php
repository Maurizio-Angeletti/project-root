<div class="form-floating mb-3">
    <input type="text" name="title" id="title" class="form-control" placeholder="titolo" value="<?= old('title', esc($announcement->title)) ?>">
    <label for="title">Titolo</label>
</div>
<div class="form-floating mb-3">
    <textarea name="description" id="description" class="form-control" placeholder="descrizione"><?= old('description', esc($announcement->description)) ?></textarea>
    <label for="title">Descrizione</label>
</div>
<div class="form-floating mb-3">
    <input type="number" name="price" id="price"class="form-control" placeholder="prezzo" value="<?= old('price', esc($announcement->price)) ?>">
    <label for="title">Prezzo</label>
</div>