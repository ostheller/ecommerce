 <?php
class Admin_order extends CI_Model {

// *****ADMIN LOGIN PAGE********** (I'm not sure which controller this belongs on)

// —> On page load: <————————————

// N/A

// -> User interaction <————————————

// Validate the POST data, either return errors or move to the orders dashboard


// *****ADMIN CREATE ADMIN PAGE********** (I'm not sure which controller this belongs on)

// —> On page load: <————————————

// N/A

// -> User interaction <————————————

// Validate the POST data, either return errors or move to the orders dashboard


// *****ADMIN ORDERS DASHBOARD**********

// —> On page load: <————————————

// Select orders (id, name, created_at, billing, total, status), with the most recent at the top (DESC)

// -> User interaction <————————————

// Search by customer name, id, etc.

// Update order status

// Select the second (or third, or fourth) 9? items further back in time


// *****ADMIN VIEW ORDER**********

		//function orders_dash($limit, $offset)

// —> On page load: <————————————

// Select addresses, items, order status, total cost

// -> User interaction <————————————

			//{
				//results query
				//$query="";
				//$orders=$this->db->query($query)->result array()->limit($limit, $offset)
				//return $orders;
			//}

// N/A

}
?>