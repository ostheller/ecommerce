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

	public function orders_dash($limit, $offset, $sort_by, $sort_order)

// —> On page load: <————————————

// Select addresses, items, order status, total cost

// -> User interaction <————————————

			{
				//$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
				//$sort_columns = array('id', 'name', 'date', 'billing_address', 'total');
				//$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';
				//---using ternary operator for above it is just shorthand of an if statement
				// ----results query----//
				//---make sure the query data is set to match keys used in admin_orders_dash OR change key names in admin_orders_dash;
				//$query="";//make sure to use the $sort_by and $sort_order in the $values???
				//$results['orders']=$this->db->query($query)->result_array()->limit($limit, $offset)
				//$query=''FOR ROW COUNT
				//$results['num_rows']=$this->db->($query)->result();
				//return $results;
			//}
		//public function status($post)
	//{
		//Query to update the status of selected order
	}

// N/A

}
?>