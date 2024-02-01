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