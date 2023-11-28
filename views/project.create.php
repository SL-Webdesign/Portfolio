<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Création de projet</h4>
        </div>
    </div>
    <form action="/project/store"method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label" for="title">Titre</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="date">Date de réalisation</label>
                <input type="datetime-local" class="form-control" name="date" id="date">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="category_id">Catégorie</label>
                <select class="form-select" name="category_id">
                    <option> Sélectionner une catégorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['label'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Selectionner des images</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple name="images[]">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-end">
                <button type="submit" class="btn btn-success btn-sm">Enregistrer</button>
            </div>
        </div>
    </form>
</div>