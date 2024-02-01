<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Administration </title>

        <!--------------CSS-------------->
        <link rel="stylesheet" href="/CSS/layout-basics.css" />
        <link rel="stylesheet" type="text/css" href="/CSS/admin.css">
        <link rel="stylesheet" type="text/css" href="/CSS/navbar-adm.css">
    </head>


    <body>
        <main>
            <div id = "menus" >
                <div id="side-bar">
                    <button type="button" id="button_Products" onclick="reloadProducts()"> Products </button>
                    <button type="button" id="button_AddProducts" onclick="clickAddProducts()"> Add Product </button>
                    <button type="button" id="button_Statistics" onclick="clickStatistics()"> Statistics </button>
                </div>
                
                <div id="info-box">
                    <div id="product-list">
                        <h1 id="h1">PRODUCTS</h1>

                        <div id="products-list">
                        <h2>Change Price</h2>
                        <form action="change_price.php" method="post">
                            <label for="album_id">Album ID:</label>
                            <input type="text" name="album_id" required>
                            
                            <label for="price">Price:</label>
                            <input type="text" name="price" required>
                            
                            <label for="day">Day:</label>
                            <input type="date" name="day" required>
                            
                            <input type="submit" value="Add Price History">
                        </form>
                        </div>


                        <div id="product-details">
                            <h1>PRODUCT DETAILS</h1>
                            <ul id="details"></ul>
                        </div>

                    </div>






                <div id="add-product">
                    <h1>ADD PRODUCT</h1>
                    <h2>Create Genre</h2>
                    <form action="create_genre.php" method="post">
                        <label for="genre">Genre:</label>
                        <input type="text" name="genre" required>
                        <input type="submit" value="Submit">
                    </form>

                    <h2>Create Artist</h2>
                    <form action="create_artist.php" method="post">
                        <label for="artist">Artist:</label>
                        <input type="text" name="artist" required>
                        <label for="country">Country:</label>
                        <input type="text" name="country" required>
                        <input type="submit" value="Submit">
                    </form>

                    <h2>Create Album</h2>
                    <form action="create_album.php" method="post">
                        <label for="title">Title:</label>
                        <input type="text" name="title" required>
                        <label for="stock">Stock:</label>
                        <input type="text" name="stock" required>
                        <label for="releaseyear">Release Date:</label>
                        <input type="date" name="releaseyear">
                        <input type="submit" value="Submit">
                    </form>

                    <h2>Assign Album Price</h2>
                        <form action="change_price.php" method="post">
                            <label for="album_id">Album ID:</label>
                            <input type="text" name="album_id" required>
                            <label for="price">Price:</label>
                            <input type="text" name="price" required>   
                            <label for="day">Day:</label>
                            <input type="date" name="day" required>   
                            <input type="submit" value="Submit">
                        </form>

                        <h2>Assign Album Genre</h2>
                        <form action="assign_album_genre.php" method="post">
                            <label for="album_id">Album ID:</label>
                            <input type="text" name="album_id" required>
                            <label for="genre">Genre:</label>
                            <input type="text" name="genre" required>     
                            <input type="submit" value="Submit">
                        </form>


                    <h2>Create Song</h2>
                    <form action="create_song.php" method="post">
                        <label for="song">Song:</label>
                        <input type="text" name="song" required>
                        <input type="submit" value="Submit">
                    </form>

                    <h2>Assign Song Genre</h2>
                    <form action="assign_song_genre.php" method="post">
                        <label for="song">Song:</label>
                        <input type="text" name="song" required>
                        <label for="genre">Genre:</label>
                        <input type="text" name="genre" required>
                        <input type="submit" value="Submit">
                    </form>

                    <h2>Assign Song Artist</h2>
                    <form action="assign_song_artist.php" method="post">
                        <label for="song">Song:</label>
                        <input type="text" name="song" required>
                        <label for="artist">Artist:</label>
                        <input type="text" name="artist" required>
                        <input type="submit" value="Submit">
                    </form>

                    <h2>Assign Song to Album</h2>
                    <form action="assign_song_album.php" method="post">
                        <label for="song">Song:</label>
                        <input type="text" name="song" required>
                        <label for="album">Album:</label>
                        <input type="text" name="album" required>
                        <input type="submit" value="Submit">
                    </form>

                </div>
                    
                <div id="stats">
                    <h1>STATISTICS</h1>
                </div>
                
            </div>

            </div>


            <a href = "logout.php" >
                <button id="logout">
                    Click here to Logout 
                </button>
            </a>
        </main>
        <!----------------- JS ---------------->
        <script src="/JS/admin.js"> </script>
    </body>
</html>