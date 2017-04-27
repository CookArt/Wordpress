<?php
/*
Element Description: US Info recent product
*/
 
// Element Class 
class USinfoRecentProduct {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'usinfo_recent_product_mapping' ) );
        add_shortcode( 'usinfo_recent_product', array( $this, 'usinfo_recent_product_html' ) );
    }
     
    // Element Mapping
    public function usinfo_recent_product_mapping() {
         
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
         
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('US info recent products', 'text-domain'),
                'base' => 'usinfo_recent_product',
                'description' => __('Afficher les produits les plus récents', 'text-domain'), 
                'category' => __('US info', 'text-domain'),   
                'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',            
                'params' => array(   
                         
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'title-class',
                        'heading' => __( 'Title', 'text-domain' ),
                        'param_name' => 'title',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Title', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),  
                     
                    array(
                        'type' => 'textarea',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Text', 'text-domain' ),
                        'param_name' => 'text',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Text', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),                      
                        
                ),
            )
        );                                
        
    }
     
     
    // Element HTML
    public function usinfo_recent_product_html( $atts ) {
         
        // Params extraction
        extract(shortcode_atts(array(
                    'title'   => '',
                    'text' => '',
                ), $atts ) );
         
        ob_start();
        ?>

        <div class="recent-overall">
            <h1><?php echo $title ?></h1>
        </div>   
         
        <?php
            $countdown = ob_get_contents();
            ob_end_clean();
            return $countdown;
         
    }
     
} // End Element Class
 
 
// Element Class Init
new USinfoRecentProduct();