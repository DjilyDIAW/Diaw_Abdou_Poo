<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<h1>Annonce : <?php echo($moto->getMarque());?></h1>
<a href="index.php?controller=moto&action=list">Retour sur le listing</a><br>
<img src="<?php echo(is_null($moto->getImage()) ? 'public/img/no-picture.png':
    'public/img/'.$moto->getImage())?>" alt="image de <?php echo($moto->getImage());?>">

<ul>
    <li><u>Modele :</u> <?php echo($moto->getModele());  ?></li>

    <li><u>Type :</u> <?php echo($moto->getType()); ?></li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
