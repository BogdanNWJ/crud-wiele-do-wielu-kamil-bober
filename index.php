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

           $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373173", "k9GUvMpjAd", "sql7373173");
           $result1 = $conn->query("SELECT id_krzyz, autor, tytul FROM krzyz, autorzy, tytuly WHERE krzyz.id_autor=autorzy.id_autor AND krzyz.id_tytul=tytuly.id_tytul");
            
           echo("<table class='tabelka' border=1");
           echo("<tr>
           <th>ID Książki</th>
           <th>Autor</th>
           <th>Tytuł</th>
           </tr>");

           while($row=$result1->fetch_assoc() ){
               echo("<tr>");
               echo("<td>".$row['id_krzyz']."</td>");
               echo("<td>".$row['autor']."</td>");
               echo("<td>".$row['tytul']."</td>");
          
               echo("</tr>");
           }
          ?>
    </div>
</main>
<nav>


</nav>

<footer></footer>
</body>
<script src="main.js"></script>
</html>