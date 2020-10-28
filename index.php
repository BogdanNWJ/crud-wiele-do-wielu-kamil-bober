<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIELE DO WIELU</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <header><h1>Kamil Bober gr1</h1></header>
    <main>
    <?php
        $servername = "sql7.freemysqlhosting.net";
        $username = "sql7373173";
        $password = "k9GUvMpjAd";
        $dbname = "sql7373173";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $result = $conn->query("SELECT * FROM ");

        echo("<table class='tabelka' border=1>");
            echo("<tr>
            <th class='lp'>ID</th>
            <th>Nazwisko</th>
            <th>Tytul</th>
            </tr>");

            while($row=$result->fetch_assoc() ){
                echo("<tr>");
                echo("<td>".$row['id']."</td>");
                echo("<td>".$row['autor']."</td>");
                echo("<td>".$row['tytul']."</td>");
                echo("</tr>");
            }

        echo("</table>");
        
    ?>
    </div>
</main>
<nav>


</nav>

<footer></footer>
</body>
<script src="main.js"></script>
</html>