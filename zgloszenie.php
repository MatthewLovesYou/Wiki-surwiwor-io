<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survivor.io wiki</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <main>
        <nav id="paseknawigacji">
            <a href="Glowna.html"><div class="navprzycisk" id="glowna">
                <h2>Strona główna</h2>
            </div></a>
            <a href=""><div class="navprzycisk" id="wyroznionyartykul">
                <h4>Wyróżniony artykuł</h4>
            </div></a>
            <a href="nawigacja.html"><div class="navprzycisk" id="nawigacja">
                <h4>Wyszukaj artykuł</h4>
            </div></a>
            <a href="zgloszenie.php"><div class="navprzycisk" id="zgloszenie"> 
                <h4>zgłoś problem</h4>
            </div></a>
        </nav>
        <article class="artykul">
            <form action="zgloszenie.php" method="post">
                <label for="uzytkownik">Nazwa użytkownika </label>
                <input type="text" name="uzytkownik" id="uzytkownik"> <br>
                <label for="problem">Opisz problem </label>
                <input type="text" name="problem" id="problem"><br>
                <input type="submit" value="Zgłoś"><br>
            </form>
            <?php

            ?>
        </article>
    </main>
</body>
</html>