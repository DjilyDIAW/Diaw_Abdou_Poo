<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<h1>Liste des motos</h1>
<a href="index.php?controller=car&action=add">
<button class="btn btn-success">Ajouter une moto</button>
</a>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Type</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach($motos as $moto){
    ?>
    <tr>
        <th scope="row"><?php echo($moto->getId());?></th>
        <td><?php echo(htmlspecialchars($moto->getMarque()));?></td>
        <td><?php echo($moto->getModele());?></td>
        <td><?php echo($moto->getType());?></td>
        <td>
            <img style="max-height: 100px" class="img-thumbnail" src="<?php echo(is_null($moto->getImage()) ? 'public/img/no-picture.jpg':
                'public/img/'.$moto->getImage())?>" alt="image de <?php echo($moto->getImage());?>">
        </td>
        <td>
            <a href="index.php?controller=moto&action=detail&id=<?php echo($moto->getId());?>">Voir la <?php echo($moto->getModele());?> </a><br>
            <a href="index.php?controller=moto&action=delete&id=<?php echo($moto->getId());?>">Supprimer la <?php echo($moto->getModele());?> </a>

        </td>
    </tr>
    <?php
        }
    ?>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
