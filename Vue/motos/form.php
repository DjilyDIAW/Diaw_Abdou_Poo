<!-- Formulaire pour ajouter une moto -->
<form method="POST" action="<?php echo BASE_URL; ?>/moto/add" enctype="multipart/form-data">
    <input type="text" name="marque" placeholder="Marque" required>
    <input type="text" name="modele" placeholder="Modèle" required>
    <select name="type" required>
        <option value="Enduro">Enduro</option>
        <option value="Custom">Custom</option>
        <option value="Sportive">Sportive</option>
        <option value="Roadster">Roadster</option>
    </select>
    <input type="file" name="image">
    <button type="submit">Ajouter</button>
</form>