<div class="col-lg-12">
		        <table class="table-hover table-bordered">
					<thead>
						<tr>
							<th>Item</th>
							<th>Price</th>
							<th colspan=2>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
				<?php $total_price = 0; 
					foreach ($all_ideas as  $idea) {?>					
					<tr>
						<td><?=$idea['name'] ?></td>
						<td>$<?=$idea['price'] ?></td>
						<form><td><textarea name="quantity" class="quan" placeholder='<?=$idea['quantity'] ?>'  rows="1" cols="2"></textarea></td></form>
						<td>
							<a href="/remove/<?= $idea['id'] ?>"><i class="fa fa-fw fa-trash"></i></a>
						</td>
						<td>$<?php $total = number_format($idea['price'] * $idea['quantity'], 2);
						echo $total;?></td>
						<?php $total_price += $total;?>
					</tr>
				<?php } ?>
					<tr>
						<td colspan='4'></td>
						<td>$<?= number_format($total_price, 2)?></td>
					</tr>	
					</tbody>
				</table>
			</div>