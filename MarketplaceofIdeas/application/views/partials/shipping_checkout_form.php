<form action='/address/shipping' id="shipping" method='post'>
						<div class='row'>
						<h3>Shipping Information</h3>
					</div>
						<div class='row'>
							<label>First Name:</label>
							<input type='text' name='shippingfirstname' placeholder="<?= $address['first_name'] ?>"> 
						</div>

						<div class='row'>
							<label>Last Name:</label>
							<input type='text' name='shippinglastname' placeholder="<?= $address['last_name'] ?>">
						</div>
						<div class='row'>
							<label>Address:</label>
							<input type='text' name='shippingaddress' placeholder="<?= $address['address'] ?>">>
						</div>
						<div class='row'>
							<label>Address 2:</label>
							<input type='text' name='shippingaddress2' placeholder="<?= $address['address_2'] ?>">>
						</div>
						<div class='row'>
							<label>City:</label>
							<input type='text' name='shippingcity' placeholder="<?= $address['city'] ?>"> >
						</div>
						<div class='row'>
							<label>State</label>
							<select name='shippingstate'>
								<option></option>
								<?php foreach ($states as $state) {?>
									<option value='<?=$state['id']?>'><?=$state['name']?></option>
								<?php }?>	
							</select>
						</div>
						<div class='row'>
						<label>Zip Code</label>
						<input type='text' name='shippingzip' placeholder="<?= $address['zip'] ?>">>
						</div>
						<input type="submit" value="Looks great!">
					</div>
				</form>