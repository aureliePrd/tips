<!-- https://docs.gravityforms.com/gform_address_types/
https://www.jezweb.info/australian-address-format-gravity-forms/ -->

<?php 
add_filter( 'gform_address_types', 'australian_address_type' );
function australian_address_type( $address_types ) {
    $address_types['australia'] = array(
        'label'       => 'Australian',
        'country'     => 'Australia',
        'zip_label'   => 'Postcode',
        'state_label' => 'State',
        'states'      => array(
            'ACT' => 'Australian Capital Territory',
            'NT'  => 'Northern Territory',
            'NSW' => 'New South Wales',
            'QLD' => 'Queensland',
            'SA'  => 'South Australia',
            'TAS' => 'Tasmania',
            'VIC' => 'Victoria',
            'WA'  => 'Western Australia',
        )
    );
 
    return $address_types;
}


?>