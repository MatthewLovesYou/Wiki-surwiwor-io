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
                <label for="uzytkownik">Nazwa użytkownika </label> <br>
                <input type="text" name="uzytkownik" id="uzytkownik"> <br> <br>
                <label for="problem">Opisz problem </label><br>
                <textarea id="problem" name="problem" rows="4" cols="50"></textarea><br><br>
                <input type="submit" value="Zgłoś"><br>
            </form>
            <?php
                $pol=mysqli_connect("localhost","root","","zgloszenia");
                $uzytkownik=$_POST['uzytkownik'];
                $zgloszenie=$_POST['problem'];
                
                $kom= mysqli_query($pol,"INSERT INTO formulasz (`nazwa_uzytkownika`,`problem`) VALUES ('$uzytkownik','$zgloszenie')");
                
                mysqli_close($pol);
            ?>
        </article>
    </main>
</body>
</html>