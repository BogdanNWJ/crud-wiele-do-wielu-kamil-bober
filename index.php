<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

<div class="cont">
    <div class="head"><h1>1 Kamil Bober gr1</h1><h3>Autor</h3>
          <form action="insert1.php" method="post">
              <input type="text" name="autor" >
              <input type="submit" value="Zapisz">
          </form>
          <h3>Tytuł</h3>
          <form action="insert2.php" method="post" >
              <input type="text" name="tytul" >
              <input type="submit" value="Zapisz">   
              </form>
              <h3>lista</h3>
         <?php
          $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373173", "k9GUvMpjAd", "sql7373173");
           $result2 = $conn->query("SELECT * FROM autorzy");

           echo("<form action='insert3.php' method='POST'  >");
           echo("<select name='auts'>");
           while($row=$result2->fetch_assoc() ){
           echo("<option value='".$row['id_autor']."'>".$row['autor']."</option>");
           }
           echo("</select>");

           $result3 = $conn->query("SELECT * FROM tytuly");

           echo("<select name='tyts'>");
           while($row=$result3->fetch_assoc() ){
           echo("<option value='".$row['id_tytul']."'>".$row['tytul']."</option>");
           }           
           echo("</select>");

           echo("<input type='submit' value='Zapisz'>");
           echo("</form>");
         ?></div>
    <div class="main">
          <?php
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
    <div class="ins">
          
          
   </div>
   <div class="d"></div>
        
    </div>
    
</body>
</html>