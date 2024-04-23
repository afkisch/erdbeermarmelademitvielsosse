<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="my_stlye.css">
    <meta charset = "UTF-8">
<head>
</head>
<body>
    <?php
        if(!isset($_GET['query'])){
            die("<h1 id=fehler>Kein Suchwort angegeben. Bitte versuche es erneut</h1>");
        }
        $conn = mysqli_connect();
        if(!$conn){
            die("<h1 id=fehler>Verbindung mit Server fehlgeschlagen</h1>");
        }
        $esc = mysqli_real_escape_string($conn, $_GET['query']);
        $select = 'langer Text :);';
        $query = sprintf($select, $esc);
        $ergebnis = mysqli_query($conn, $query);
    ?>

    <table border = "1">
        <tr>
            <th>1000</th>
            <th>mal</th>
            <th>berührt</th>
        </tr>
        <?php
            while($reihe = mysqli_fetch_assoc($ergebnis)){
                echo "<tr>";
                echo "<td>".$reihe['id']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>
