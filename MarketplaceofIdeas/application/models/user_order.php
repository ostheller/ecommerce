<?php
class User_order extends CI_Model {

// *****USER NAV PARTIAL**********

// —> On page load: <————————————

// Count the quantity of items in the shopping cart to display in nav


// *****USER PRODUCT PAGE**********

// -> User interaction <————————————

// On purchase, update the shopping cart table with the id and number picked

// Count the quantity of items in the shopping cart to display in nav 


// *****USER ORDER PAGE**********

// —> On page load: <————————————

// Select the information from the shopping cart joined with ideas (price) to populate the table

// -> User interaction <————————————

// POST: Update the quantity of an idea in the cart, GET the refreshed total

// Delete an idea from the cart, GET the refreshed total

// POST: The form information from the shipping address

// POST: If same as shipping, fill the billing address with the same id as the shipping address. Else fill the shipping table and populate that field with the new ID.

// Get the stripe token into the database

}
?>