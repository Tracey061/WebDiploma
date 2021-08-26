<form action="displayingProductsStart&Limit.php" method="post">
    <fieldset>
        <legend>Limit</legend>
        <label for="start">where do you want to start from:</label>        
        <input type="number" name="start" id="start">
        <label for="rownumber">Rows to dispay:</label> 
        <input type="number" name="rownumber" id="rownumber">
        <input type="submit" name="display" value="Display Rows">
    </fieldset>
</form>
<h2>The totla number of search: <?= $count ?></h2>