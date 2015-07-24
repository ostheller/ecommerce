<?php
class Admin_order extends CI_Model {

// *****ADMIN LOGIN PAGE********** (I'm not sure which controller this belongs on)
	public function login_user($post)
	{
		// var_dump($post);
		// die('reached model');
		$query='SELECT user_id FROM admins where email = ? AND password = ?';
		$values=array($post['email'], $post['password']);
		$user=$this->db->query($query, $values)->row_array();
		// var_dump($user);
		// die('what rcvd?');
		if($user != null)
		{
			$query="SELECT orders.id AS 'id', addresses.first_name AS 'name', orders.created_at AS 'date', CONCAT(addresses.address, addresses.address_2, ', ', addresses.city, ', ', states.name, ' ', addresses.zip) AS 'billing_address', orders.total_price AS 'total', order_statuses.status as 'status' FROM orders left join addresses ON orders.billing_address_id = addresses.id left join order_statuses ON orders.order_status_id= order_statuses.id left join states ON addresses.state_id=states.id";
			$results=$this->db->query($query)->result_array();
			// var_dump($results);
			// die('success?');
			return $results;
		}
		else if($user==NULL)
		{
			$this->session->set_flashdata('errors', 'Please check your login information');
			// var_dump($this->session->flashdata('errors'));
			// die('reached else if user is null');
			return $this->session->flashdata;
		}
	}

// *****ADMIN ORDERS DASHBOARD**********
// hmmm... I'm repeating my query hear just with more perameter so we can sort... any thoughts on eliminating this repetition?
	public function orders_dash($limit, $offset, $sort_by, $sort_order)
	{
		// die('reached model orders_dash()');
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'name', 'date', 'billing_address', 'total');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';
//	---using ternary operator for above, it is just shorthand of an if statement
	//----results query----//
//---make sure the query data is set to match keys used in admin_orders_dash OR change key names in admin_orders_dash;
		$query="SELECT orders.id AS 'id', addresses.first_name AS 'name', orders.created_at AS 'date', CONCAT(addresses.address, addresses.address_2, ', ', addresses.city, ', ', states.name, ' ', addresses.zip) AS 'billing_address', orders.total_price AS 'total', order_statuses.status as 'status' FROM orders left join addresses ON orders.billing_address_id = addresses.id left join order_statuses ON orders.order_status_id= order_statuses.id left join states ON addresses.state_id=states.id LIMIT ? OFFSET  ?";
//ORDER BY = ? ? needs to go in query  and $sort_by, $sort_order, needs to go in $values array BUT I give up, I can not get the sort by and order by to escape the string... Molly & Jess -> any ideas?
		$values=array( $limit, $offset);
			// $results=$this->db->query($query)->result_array();;//make sure to use the $sort_by and $sort_order in the $values???
		$results['orders']=$this->db->query($query, $values)->result_array();
			// var_dump($results['orders']);
			// die('what did we get');
		$query='SELECT orders.id from orders';//FOR ROW COUNT need for pagination
		$results['num_rows']=$this->db->query($query)->result();
		$results['num_rows']=count($results['num_rows']);
		// var_dump($results['num_rows']);
		// die('what?');

		$query="SELECT status AS 'option' from order_statuses";
		$results['status_options']=$this->db->query($query)->result_array();
		// var_dump($results);
		// die('what did we get?');
		return $results;

	}
	public function change_status($post)
	{
// this query is not quite right yet... I promise I've been working all night on this... I feel like I have accomplished so little :( -aadi
		$query="UPDATE orders LEFT JOIN order_statuses ON orders.order_status_id = order_statuses.id WHERE orders.id = ? AND order_statuses.id LIKE ?";
		$values=array($post['orderId'], $post['status']);
		$this->db->query($query, $values);
	}
// *****ADMIN VIEW ORDER**********
// // —> On page load: <————————————

// // Select addresses, items, order status, total cost
// // -> User interaction <————————————
// N/A

// *****ADMIN CREATE ADMIN PAGE********** (I'm not sure which controller this belongs on)

// —> On page load: <————————————

// N/A

// -> User interaction <————————————

// Validate the POST data, either return errors or move to the orders dashboard
}
?>