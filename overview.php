<html>
<head>

    <meta charset="UTF-8">
    <title>SongOrganizer 2.0</title>
</head>


<body>

<?php

$SongArray = file("songs.txt");
$SongImplode = implode("-", $SongArray);



?>

<table>
    <th>SongName</th><th>Artist</th><th>PlaybackID</th>
<?php
$i = 0;
foreach ($SongArray as $key => $songInfo) {
    $explodedArray = explode(",", $SongImplode);
    echo "<tr><td>" . $songInfo[0] . "</td>";
    echo "<td>" . $songInfo[1] . "</td>";
    echo "<td>" . $songInfo[2] . "</td></tr>";
    $i++;
}

var_dump($explodedArray);


?>
</table>

</body>

</html>