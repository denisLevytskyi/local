<?php
namespace Models;
use Logic;

class ProductModel {
	public function get_product_registration ($art, $code, $name, $desk, $foto) {
		$connection = Logic\Connection::get_connection();
		$request = "INSERT INTO products (article, code, name, description, foto) VALUES ('$art', '$code', '$name', '$desk', '$foto')";
		$rezult = mysqli_query($connection, $request);
		if ( $rezult == 1 ) {
			return true;
		}
	}
}