<?php
class User_order extends CI_Model {

// *****USER NAV PARTIAL**********

// —> On page load: <————————————

// Count the quantity of items in the shopping cart to display in nav
  public function cart_count()
  {
    // find out the sum of all the quantities of the ideas are associated with the cart
    $count = $this->db->query("SELECT SUM(quantity) AS 'number' FROM shopping_cart_has_ideas WHERE shopping_cart_id = ?", array($this->session->userdata('shopping_cart_id')))->row_array();
    
    // insert that number into the shopping cart
    $query = "UPDATE shopping_cart SET product_count = ? WHERE id = ?;";
    $value = array($count['number'], $this->session->userdata('shopping_cart_id'));
    $this->db->query($query, $value);

    // pull the shopping cart count into the session data
    $val = $this->db->query("SELECT product_count FROM shopping_cart WHERE shopping_cart.id = ?;", array($this->session->userdata('shopping_cart_id')))->row_array();
    $this->session->set_userdata('product_count', $val['product_count']);
  }

// *****USER PRODUCT PAGE**********

// -> User interaction <————————————

// On purchase, update the shopping cart table with the id and number picked
  
  public function purchase($id)
  {
    // put the item and the count and the shopping cart id into the shopping cart has ideas
    $query = "INSERT INTO shopping_cart_has_ideas (shopping_cart_id, idea_id, quantity) VALUES (?,?,?)";
    $values = array($this->session->userdata('shopping_cart_id'), $id, $this->input->post('quantity'));
    $this->db->query($query, $values);
  }
// Count the quantity of items in the shopping cart to display in nav 


// *****USER ORDER PAGE**********

// POST: Update the quantity of an idea in the cart
  public function update($post, $id)
         {
            $query = "UPDATE shopping_cart_has_ideas SET quantity = ? WHERE idea_id = ?;";
            $values = array($post['quantity'], $id);
            $this->db->query($query, $values);
        }

// Delete an idea from the cart, GET the refreshed total
  public function destroy($id)
         {
            $query = "DELETE FROM shopping_cart_has_ideas WHERE idea_id = ?;";
            $value = array($id); 
            $this->db->query($query, $value);
        }


// POST: The form information from the shipping address

// POST: If same as shipping, fill the billing address with the same id as the shipping address. Else fill the shipping table and populate that field with the new ID.

// Get the stripe token into the database

        public function show_idea($id)
         {
            $query = "SELECT * FROM ideas WHERE id = ?";
            $values = array($id);
            return $this->db->query($query, $values)->row_array();
        }

// —> On page load: <————————————

// Select the information from the shopping cart joined with ideas (price) to populate the table
      public function idea_grab()
      {
        return $this->db->query("SELECT ideas.id, ideas.name, ideas.price, shopping_cart_has_ideas.quantity
          FROM ideas
          LEFT JOIN shopping_cart_has_ideas
            ON ideas.id = shopping_cart_has_ideas.idea_id
          LEFT JOIN shopping_cart
            ON shopping_cart_has_ideas.shopping_cart_id = shopping_cart.id
          WHERE shopping_cart.id = ?;", array($this->session->userdata('shopping_cart_id')))->result_array();

      }

// Fill out the dropdown state list on the purchase page
     public function state_grab()
     {
          return $this->db->query('SELECT name FROM states')->result_array();
     }

// -> User interaction <————————————

// Insert address into db upon purchase
    public function checkout($post)
     {
         
         $query = "INSERT INTO addresses(first_name, last_name, address, address_2, city, state_id, zip, created_at, updated_at)
            VALUES (?,?,?,?,?,?,?,NOW(), NOW())";
         $values = array($post['first_name'], $post['last_name'], $post['address'], $post['address_2'], $post['city'], $post['state_id'], $post['zip']); 
         $this->db->query($query, $values);     
     }
}
?>