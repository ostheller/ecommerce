<?php
class User_idea extends CI_Model {

// *****USER LANDING PAGE**********

// —> On page load: <————————————

// Create a new user
	public function new_user()
	{
		$this->db->query("INSERT INTO shopping_cart (product_count) VALUES (?);", array(0));
		$id = $this->db->insert_id();
		$this->session->set_userdata('shopping_cart_id', $id);
		$this->db->query("INSERT INTO users (shopping_cart_id, user_level_id, created_at, updated_at) VALUES (?,?,?,?);", array($this->session->userdata('shopping_cart_id'), 1, 'NOW()', 'NOW()'));
		$id = $this->db->insert_id();
		$this->session->set_userdata('user_id', $id);
	}

// Select the image, text and description for the featured images !!!! I have done this manually at this point	

// Select the images for the categories !!!! I have done this manually at this point

// -> User interaction <————————————

// Select all tags with specified category

	public function category_index($id) 
	{
		return $this->db->query("SELECT tags.id, tags.name, images.location, images.alt_text
			FROM tags
			LEFT JOIN tags_has_images
				ON tags.id = tags_has_images.tag_id 
			LEFT JOIN images
				ON tags_has_images.image_id = images.id
			LEFT JOIN categories
				ON tags.category_id = categories.id
			WHERE categories.name = ?
			ORDER BY tags.name ASC;", array($id))->result_array();
	}

// *****USER BROWSING PAGE**********

// —> On page load: <————————————

// Select items with NO APPLIED SORTING OR SEARCHING

	public function browsing_index() 
	{
		return $this->db->query("SELECT *
			FROM ideas
			ORDER BY name ASC;")->result_array();
	}

// Select the items with a specified tag

	public function browsing_show($id) 
	{
		return $this->db->query("SELECT ideas.name, ideas.id
			FROM ideas
			LEFT JOIN ideas_has_tags
				ON ideas.id = ideas_has_tags.idea_id
			LEFT JOIN tags 
				ON ideas_has_tags.tag_id = tags.id
			WHERE tags.name = ?;", array($id))->result_array();
	}

// -> User interaction <————————————

// Select items containing the searched keyword (in tag or text)
	public function search($post)
	{
		$keyword = implode($post);
		$keyword = "%".$keyword."%";
		$query = "SELECT ideas.id, ideas.name
			FROM ideas
			LEFT JOIN ideas_has_tags
				ON ideas.id = ideas_has_tags.idea_id
			LEFT JOIN tags 
				ON ideas_has_tags.tag_id = tags.id
			WHERE tags.name LIKE '$keyword'
			OR ideas.description LIKE '$keyword'
			OR ideas.name LIKE '$keyword'
			GROUP BY ideas.name";
		$search = $this->db->query($query)->result_array();
		return $search;
	}

// Sort by Price

	public function pull_by_price() {
		return $this->db->query('SELECT * FROM ideas ORDER BY price DESC')->result_array();
	}

	public function pull_by_sell_count() {
		return $this->db->query('SELECT * FROM ideas ORDER BY number_sold')->result_array();
	}

// *****USER PRODUCT PAGE**********

// —> On page load: <————————————

// Select the pictures of the product
	public function fetch_img($id) 
	{
		return $this->db->query("SELECT *
			FROM images
			LEFT JOIN ideas_has_images
				ON ideas_has_images.image_id = images.id
			LEFT JOIN ideas
				ON ideas.id = ideas_has_images.idea_id
			WHERE ideas.id = ?;", array($id))->result_array();
	}
// Select the information of the product for display
	public function show($id) 
	{
		return $this->db->query("SELECT *
			FROM ideas
			WHERE ideas.id = ?;", array($id))->row_array();
	}
// Select 5? other ideas with the same subject tag (similar/related ideas) and get images for them. The id of the idea should be put in the <img>, so we can redirect to that product page immediately onclick.

	public function fetch_related($id) 
	{
		$subject = $this->db->query("SELECT tags.id 
			FROM tags
			LEFT JOIN categories
				ON tags.category_id = categories.id
			LEFT JOIN ideas_has_tags
				ON tags.id = ideas_has_tags.tag_id
			LEFT JOIN ideas
				ON ideas_has_tags.idea_id = ideas.id
			WHERE ideas.id = ? 
				AND categories.id = 2;", array($id))->result();
		$subject_id = $subject[0]->id;
		return $this->db->query("SELECT ideas.* 
			FROM ideas
			LEFT JOIN ideas_has_tags
				ON ideas.id = ideas_has_tags.idea_id
			LEFT JOIN tags
				ON tags.id = ideas_has_tags.tag_id
			WHERE tags.id = $subject_id;")->result_array();
	}
}
?>