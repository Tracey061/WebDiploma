<form action="insertProduct.php" method="post">
	
	<fieldset>
		<legend>Product Details</legend>
			
		<p>
			<label for="productName">Product Name:</label>
			<input type="text" name="productName" id="productName" required>
		</p>

		<p>
			<label for="supplier">Supplier:</label>
			<select name="supplier" id="supplier">
				<?php foreach($supplierRows as $row):
					$supplierId = $row["SupplierId"];
					$companyName = $row["CompanyName"];
					?>
					<option value="<?= $supplierId?>"><?= $companyName?></option>
				<?php endforeach ?>
			</select>
		</p>

		<p>
			<label for="category">Category:</label>
			<select name="category" id="category">
				<?php foreach($categoryRows as $row):
					$categoryId = $row["CategoryId"];
					$categoryName = $row["CategoryName"];
					?>
				<option value="<?= $categoryId?>"><?= $categoryName?></option>
				<?php endforeach ?>
			</select>
		</p>

		<p>
			<label for="qtyPerUnit">Quantity per unit: </label>
			<input type="text" name="qtyPerUnit" id="qtyPerUnit">
		</p>

		<p>
			<label for="unitPrice">Price: $</label>
			<input type="text" name="unitPrice" id="unitPrice">
		</p>

		<p>
			<label for="unitsInStock">Units in stock: </label>
			<input type="number" name="unitsInStock" id="unitsInStock">
		</p>
		
		<p>
			<label for="unitsOnOrder">Units on order: </label>
			<input type="number" name="unitsOnOrder" id="unitsOnOrder">
		</p>

		<p>
			<label for="reorderLevel">Reorder level: </label>
			<input type="number" name="reorderLevel" id="reorderLevel">
		</p>

		<p>
			<label for="discontinued">Discontinued: </label>
			<input type="checkbox" name="discontinued" id="discontinued">
		</p>
		
		<p>
			<input type="submit" value="Insert New Product" name="submit">
		</p>
		
		<p><?= $message ?></p>
	</fieldset>
</form>