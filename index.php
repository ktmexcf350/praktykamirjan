<?php
include 'dbconnection.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/style.css" />
    <script src="script.js" defer></script>




    <form action="api.php" method="post" id="loginForm">
        <div>
            <label for="imie">imię:</label>
            <input id="imie" name="imie" type="text" autocomplete="imie" placeholder="imie" required><br>
        </div>


        <div>
            <label for="nazwisko">nazwisko:</label>
            <input id="nazwisko" name="nazwisko" type="text" placeholder="nazwisko" autocomplete="nazwisko"
                required><br>
        </div>


        <div>
            <label for="email">email:</label>
            <input id="email" name="email" type="email" autocomplete="email" placeholder="email" required><br>
        </div>


        <div>
            <label for="password">password:</label>
            <input id="password" name="password" type="text" placeholder="password" autocomplete="current-password">
            <br>
            <button type="submit">Prześlij dane</button>
        </div>
    </form>
    <?php
    echo (int)isset($mysqli)

    ?>
    <!-- <div id="error1"></div>
        <div id="error2"></div>
        <div id="php"></div>        
        <ul id="usersList"></ul>
        
        <div class="maincontent"> -->
    <footer>
    </footer>
    </body>

</html>