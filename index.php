<html>
<head>

    <meta charset="UTF-8">
    <title>SongOrganizer 2.0</title>
</head>


<body>

<?php
// Save to file
if (isset($_POST['submit'])){
    $thingsToAdd = $_POST['SongName']  . "," . $_POST['Artist'] . "," . $_POST['PlaybackID'] . ";";
    $file = fopen("songs.txt", "wb") or die("Unable to open file!");
    fwrite($file, $thingsToAdd);
    fclose($file);
}
?>

<form action="index.php" method="POST">
    <p><b>Add a New Song</b></p>
    <p>Song Name: <input type="text" name="SongName"/></p>
    <p>Artist: <input type="text" name="Artist"/></p>
    <p>Playback ID: <input type="text" name="PlaybackID"/></p>


    <p>
        <input type="submit" name="submit"
               value="Add Song to List"/>
    </p>
</form>


</body>

</html>