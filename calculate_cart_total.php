<?php
function calculate_cart_total( $cart_object ) { 

    $lock = 0;
	$basket = 0;
	$mudguards = 0;
	$helmet = 0;
	$lightset = 0;
	$minipump = 0;
	$puncture = 0;
     
    foreach ( $cart_object->cart_contents as $key => $value ) {                   
        if( isset( $value[ "wccpf_add_lock_20" ] ) && ( $value[ "wccpf_add_lock_20" ] == "yes" ) ) {
			$lock=20;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $lock );
        }  
        if( isset( $value[ "wccpf_add_basket_15" ] ) && ( $value[ "wccpf_add_basket_15" ] == "yes" ) ) {
			$basket=15;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $basket );
        }	
        if( isset( $value[ "wccpf_add_mudguards_14" ] ) && ( $value[ "wccpf_add_mudguards_14" ] == "yes" ) ) {
			$mudguards=14;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $mudguards );
        }
        if( isset( $value[ "wccpf_add_helmet_28" ] ) && ( $value[ "wccpf_add_helmet_28" ] == "yes" ) ) {
			$helmet=28;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $helmet );
        }
        if( isset( $value[ "wccpf_add_light_set_17" ] ) && ( $value[ "wccpf_add_light_set_17" ] == "yes" ) ) {
			$lightset=17;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $lightset );
        }
        if( isset( $value[ "wccpf_add_mini_pump_750" ] ) && ( $value[ "wccpf_add_mini_pump_750" ] == "yes" ) ) {
			$minipump=7.50;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $minipump );
        }
        if( isset( $value[ "wccpf_add_puncture_repair_kit_220" ] ) && ( $value[ "wccpf_add_puncture_repair_kit_220" ] == "yes" ) ) {
			$puncture=2.20;
            $orgPrice = floatval( $value['data']->price );
            $value['data']->price = ( $orgPrice + $puncture );
        }		
    }
}
?>