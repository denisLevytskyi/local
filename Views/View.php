<?php
namespace Views;

class View {
	public function view_login () {
		require_once "Templates/login.php";
	}

	public function view_main () {
		require_once "Templates/main.php";
	}

	public function view_error () {
		require_once "Templates/error.php";
	}

	public function view_sign1 () {
		require_once "Templates/sign1.php";
	}

	public function view_sign2 () {
		require_once "Templates/sign2.php";
	}

	public function view_edit_auth () {
		require_once "Templates/editAuth.php";
	}

	public function view_add_product () {
		require_once "Templates/addProduct.php";
	}

	public function view_product_list () {
		require_once "Templates/productList.php";
	}

	public function view_product () {
		require_once "Templates/product.php";
	}

	public function view_reset () {
		require_once "Templates/reset.php";
	}

	public function view_price_setter () {
		require_once "Templates/priceSetter.php";
	}

	public function view_price_list () {
		require_once "Templates/priceList.php";
	}

	public function view_unika () {
		require_once "Templates/unika.php";
	}

	public function view_check_list () {
		require_once "Templates/checkList.php";
	}

	public function view_check () {
		require_once "Templates/check.php";
	}
	
	public function view_staff () {
		require_once "Templates/staff.php";
	}
	
	public function view_branch () {
		require_once "Templates/branch.php";
	}
	
	public function view_balance () {
		require_once "Templates/balance.php";
	}

	public function view_ksef () {
		require_once "Templates/ksef.php";
	}

	public function view_admin () {
		require_once "Templates/admin.php";
	}
}