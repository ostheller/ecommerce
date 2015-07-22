<?php
class User_idea extends CI_Model {

// *****USER LANDING PAGE**********

// —> On page load: <————————————

// Select the image, text and description for the featured images

// Select the images for the categories

// -> User interaction <————————————

// Select all tags with specified category

	public function category_index($id) 
	{
		return $this->db->query("SELECT tags.name
			FROM tags 
			LEFT JOIN categories
				ON tags.category_id = categories.id
			WHERE categories.name = ?
			ORDER BY tags.name ASC;", array($id))->result_array();
	}


// The id of the idea should be put in the <img>, so we can redirect to that product page immediately onclick.


// *****USER BROWSING PAGE**********

// —> On page load: <————————————

// Select the first 9? items with specified tag

	public function index($id) 
	{
		return $this->db->query("SELECT ideas.name
			FROM ideas
			LEFT JOIN ideas_have_tags
				ON ideas.id = ideas_have_tags.idea_id
			LEFT JOIN tags 
				ON ideas_have_tags.tag_id = tags.id
			LEFT JOIN categories
				tags.category
			ON ideas.id = ideas_has_images.idea_id = images.idea_id
			WHERE id = ?;", array($id))->row_array();
	}

// -> User interaction <————————————

// Select items containing the searched keyword (in tag or text)

// Select all tags with specified category

// Select the second (or third, or fourth) 9? items with specified tag 

// Select the first 9? items sorted by price

// Select the first 9? items sorted by number_sold


// *****USER PRODUCT PAGE**********

// —> On page load: <————————————

// Select the images of the product

// Select the information of the product for display

// Select 5? other ideas with the same subject tag (similar/related ideas) and get images for them. The id of the idea should be put in the <img>, so we can redirect to that product page immediately onclick.

}
?>