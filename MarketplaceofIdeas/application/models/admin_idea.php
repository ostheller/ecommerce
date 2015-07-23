<?php
class Admin_idea extends CI_Model {

// *****ADMIN PRODUCTS DASHBOARD**********
public function products_dash()
{
// —> On page load: <————————————
//this one works great!
$query="SELECT images.location AS 'image', ideas.id AS 'id', ideas.name AS 'name', ideas.description AS 'description', ideas.inventory AS 'inventory', ideas.number_sold AS 'sold', FROM ideas_has_images inner join ideas ON ideas_has_images.idea_id = ideas.id inner join images ON ideas_has_images.image_id= images.id";
	$results=$this->db->query($query)->result_array();
			// var_dump($results);
			// die('success?');
			return $results;
}


// Select default picture for display

// -> User interaction <————————————

// Select the second (or third, or fourth) 9? items further back in time


// *****ADMIN VIEW/EDIT PRODUCT**********

// —> On page load: <————————————

// Select the current data for that product id to populate the fields for editing

// -> User interaction <————————————

// Upload a file to our assets folder and update the images database

// POST the edits to the form

// Assign tags to an item

// Create tags

// Assign tags to categories


// *****ADMIN ADD PRODUCT**********

// —> On page load: <————————————

// -> User interaction <————————————

// Upload a file to our assets folder and update the images database

// POST the edits to the form

// Assign tags to an item

// Create tags

// Assign tags to categories
}
?>