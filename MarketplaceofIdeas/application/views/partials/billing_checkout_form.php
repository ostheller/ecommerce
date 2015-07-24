<div id='hideme'>
<div class='row'>
	<label>First Name:</label>
	<input type='text' name='billingfirstname' placeholder="<?= $same['first_name'] ?>"> 
</div>
<div class='row'>
	<label>Last Name:</label>
	<input type='text' name='billinglastname' placeholder="<?= $same['last_name'] ?>">
</div>
<div class='row'>
	<label>Adress:</label>
	<input type='text' name='billingaddress' placeholder="<?= $same['address'] ?>">
</div>
<div class='row'>
	<label>Address 2:</label>
	<input type='text' name='billingaddress2' placeholder="<?= $same['address_2'] ?>">
</div>
<div class='row'>
	<label>City:</label>
	<input type='text' name='billingcity' placeholder = "<?= $same['city'] ?>">
</div>
<div class='row'>
	<label>State</label>
	<select name='billingstate'>
		<option></option>
	<?php foreach ($states as $state) {?>
		<option value="<?=$state['id']?>"><?=$state['name']?></option>
	<?php }?>	
	</select>
</div>
<div class='row'>
<label>Zip Code</label>
<input type='text' name='billingzip' placeholder = "<?= $same['zip'] ?>">
</div>
<input type="submit" value="Edit">
</form>
</div>