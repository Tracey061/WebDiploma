<form action="insertCategories.php" method="POST">
    <p>
        <label for="CompanyName">Company Name:</label>
        <input type="text" name="CategoryName" id="CategoryName" required>
    </p>

    <p>
        <label for="Description">Description:</label>
        <textarea name="Description" id="Description" ></textarea>
    </p>

    <p><input type="submit" name="submit" value="Insert Category"></p>
    <p><?= $message ?></p>
</form>