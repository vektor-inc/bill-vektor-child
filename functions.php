<?php

add_filter( 'item_price_print_digits', 'item_price_print_digits_change' );
function item_price_print_digits_change( $digits ) {
	// 小数点以下の桁数
	$digits = 2;
	return $digits;
}
