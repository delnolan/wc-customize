<?php
function calculate_cart_total( $cart_object ) { 
    /* additional price that has to be added */
    $lock = 0;
	$basket = 0;
	$mudguards = 0;
	$helmet = 0;
	$lightset = 0;
	$minipump = 0;
	$puncture = 0;
     
    foreach ( $cart_object->cart_contents as $key => $value ) {                   
        /* Check for the value ( or it could be any condition logic ) */
        /* Each custom field's key would be prefixed with `wccpf_` */
        if( isset( $value[ "wccpf_add_lock_20" ] ) && ( $value[ "wccpf_add_lock_20" ] == "yes" ) ) {
            // change the price
			$lock=20;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $lock );
        }  
        if( isset( $value[ "wccpf_add_basket_15" ] ) && ( $value[ "wccpf_add_basket_15" ] == "yes" ) ) {
            // change the price
			$basket=15;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $basket );
        }	
        if( isset( $value[ "wccpf_add_mudguards_14" ] ) && ( $value[ "wccpf_add_mudguards_14" ] == "yes" ) ) {
            // change the price
			$mudguards=14;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $mudguards );
        }
        if( isset( $value[ "wccpf_add_helmet_28" ] ) && ( $value[ "wccpf_add_helmet_28" ] == "yes" ) ) {
            // change the price
			$helmet=28;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $helmet );
        }
        if( isset( $value[ "wccpf_add_light_set_17" ] ) && ( $value[ "wccpf_add_light_set_17" ] == "yes" ) ) {
            // change the price
			$lightset=17;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $lightset );
        }
        if( isset( $value[ "wccpf_add_mini_pump_750" ] ) && ( $value[ "wccpf_add_mini_pump_750" ] == "yes" ) ) {
            // change the price
			$minipump=7.50;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $minipump );
        }
        if( isset( $value[ "wccpf_add_puncture_repair_kit_220" ] ) && ( $value[ "wccpf_add_puncture_repair_kit_220" ] == "yes" ) ) {
            // change the price
			$puncture=2.20;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $puncture );
        }		
    }
}
?>