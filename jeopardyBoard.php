<?php 

session_start();

?>

<html> 
<head>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <div class = "tableDiv">
        <div class = "leaderboardplayer">
            <h3 class = "blinking">Top 10 Leaderboard:</h3>
                fgdnkgndl - 4000pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts<br>
                dsjdkfjsdkfj - 3420pts
        </div>
        <div class = "leaderboardplayer">
            Player - Score
        </div>
    </div>
    <div class = "tableDiv">
        <table>
            <tr>
                <th>Board Games</th>
                <th>Movies</th>
                <th>Pop Music</th>
                <th>Soda Brands</th>
                <th>Popular Books</th>
            </tr>
            <tr>
                <td><a href = "BoardGames/b100.php">100</a></td>
                <td><a href = "Movies/m100.php">100</a></td>
                <td><a href = "Pop Music/pop100.php">100</a></td>
                <td><a href = "SodaBrands/s100.php">100</a></td>
                <td><a href = "PopularBooks/book100.php">100</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b200.php">200</a></td>
                <td><a href = "Movies/m200.php">200</a></td>
                <td><a href = "Pop Music/pop200.php">200</a></td>
                <td><a href = "SodaBrands/s200.php">200</a></td>
                <td><a href = "PopularBooks/book200.php">200</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b300.php">300</a></td>
                <td><a href = "Movies/m300.php">300</a></td>
                <td><a href = "Pop Music/pop300.php">300</a></td>
                <td><a href = "SodaBrands/s300.php">300</a></td>
                <td><a href = "PopularBooks/book300.php">300</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b400.php">400</a></td>
                <td><a href = "Movies/m400.php">400</a></td>
                <td><a href = "Pop Music/pop400.php">400</a></td>
                <td><a href = "SodaBrands/s400.php">400</a></td>
                <td><a href = "PopularBooks/book400.php">400</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b500.php">500</a></td>
                <td><a href = "Movies/m500.php">500</a></td>
                <td><a href = "Pop Music/pop500.php">500</a></td>
                <td><a href = "SodaBrands/s500.php">500</a></td>
                <td><a href = "PopularBooks/book500.php">500</a></td>
            </tr>
        </table>
    </div>

    /*show name and points of the player*/
    <?php 
        echo "<h1>{$_SESSION["username"]}</h1>";
        echo "<h1>{$_SESSION["score"]}</h1>";
    
    ?>
<body>
</html>