<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/blog.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&display=swap" rel="stylesheet">
    <title>Un stagiaire, un blog</title>
</head>
<body>
    <h1>UN STAGIAIRE, UN BLOG</h1>
    <section id="pres">
        <div id="svg">
           <a id="aPropos" href="/">A propos</a>
        </div>
        <div id="profPres">
            <div id="cadre">
                <p>UN</p>
                <p>STAGIAIRE,</p>
                <p>UN</p>
                <p>BLOG</p>
            </div>
            <div id="info">
                <p id="name">TAÏS JUHEL</p>
                <p>Etudiant en informatique - Ynov Campus Nantes</p>
            </div>
        </div>
    </section>
    <article>
        <h2>Une brève première idée</h2>
        <p>En 3ème, j'ai effectué le traditionnel stage de découverte à Next Decision. Au court de ce stage, j'ai confectionné un petit logiciel de gestion à partir d'Excel qui a servi par la suite à l'entreprise qui m'avait accueilli. Ce fut une courte expérience (1 semaine), mais elle m'a permis de confirmer le domaine d'activité dans lequel je souhaitais m'orienter plus tard… l'informatique !</p>
    </article>
    <nav id="exp">
        <a href="?societe=mismo" id="mismo" class="<?php if($_GET['societe']=='mismo') echo 'ongletChoix1'; ?>"">Mismo</a>
        <a href="?societe=germe" id="germe" class="<?php if($_GET['societe']=='germe') echo 'ongletChoix2'; ?>"">Germe</a>
    </nav>
    <?php 
        if($_GET['societe']=='mismo'){
            include '_mismo.php';
        }elseif($_GET['societe']=='germe'){
            include '_germe.php';
        }
    ?>
</body>
</html>