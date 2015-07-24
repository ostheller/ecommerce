<?php
class Admin_idea extends CI_Model {

// *****ADMIN PRODUCTS DASHBOARD**********
public function products_dash($limit, $offset, $sort_by, $sort_order)
{
	$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'name', 'description', 'inventory', 'sold');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'id';
// —> On page load: <————————————
//this one works great!
$query="SELECT images.location AS 'image', ideas.id AS 'id', ideas.name AS 'name', ideas.description AS 'description', ideas.inventory AS 'inventory', ideas.number_sold AS 'sold', FROM ideas_has_images inner join ideas ON ideas_has_images.idea_id = ideas.id inner join images ON ideas_has_images.image_id= images.id";
//need to figure out how to add order by and pass through the $sort_order and $sort_by - right now I get an error... :(
$values=array($limit, $offset);
$results['products']=$this->db->query($query, $values)->result_array();
$query='SELECT ideas.id from ideas';
$results['num_rows'] = $this->db->query($query);
$rusults['num_rows'] = count($results['num_rows']);
	// var_dump($results);
	// die('success?');
	return $results;
// Select default picture for display

// -> User interaction <————————————

// Select the second (or third, or fourth) 9? items further back in time
}
public function add_idea($post)
{
// *****ADMIN ADD PRODUCT**********

// —> On page load: <————————————
	if($post['task'] == 'add')
	{
		$query='SELECT name from categories';
		$results['categories']=$this->db->query($query);
		$query='SELECT name from tags';
		$results['tags']=$this->db->query($query);
		return $results;
	}
	else if($post['task'] == 'add_idea')
	{
		//$query="INSERT INTO ideas.name, ideas.description, categories.name,".<?if(? >." categories"
	}

}


// -> User interaction <————————————

// Upload a file to our assets folder and update the images database

// POST the edits to the form

// Assign tags to an item

// Create tags

// Assign tags to categories


// *****ADMIN VIEW/EDIT PRODUCT**********

// —> On page load: <————————————

// Select the current data for that product id to populate the fields for editing

// -> User interaction <————————————

// Upload a file to our assets folder and update the images database

// POST the edits to the form

// Assign tags to an item

// Create tags

// Assign tags to categories
}
?>