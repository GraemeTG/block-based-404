<?php
/**
 * 
 *  This file loads the necessary settings and renders settings in the wp admin.
 *  Gives the user a setting so they can choose which page they want to use as their 404 page.
 * 
 */

/**
 * This function registers the setting for choosing which page is the 404 editing page
 */
 function gtg_bb404_register_404_page_setting() {

    // register the setting in WP.
    register_setting (
      'general',
      'gtg_bbfof_404_page',
    );

 }

 add_action ( 'admin_init', 'gtg_bb404_register_404_page_setting' );


 /**
  * Adds 
  */
  function gtg_bbfof_404_page_setting() {
    
    add_settings_field (
      'gtg-bbfof-page-id',
      __( '404 Page', 'gtg-block-based-404' ),
      'gtg_bbfof_page_id_setting_output',
      'general',
      'default',
      array (
        'label_for' => 'gtg-bbfof-page-id',
      )
    );
  }


  add_action ( 'admin_init', 'gtg_bbfof_404_page_setting' );


  function gtg_bbfof_page_id_setting_output() {

    ?>
    <input type="number" name="<?php echo esc_attr( 'gtg_bbfof_404_page'); ?>
    "id="<?php echo esc_attr( 'gtg_bbfof_404_page' ); ?>
    "class="regular-text" value="<?php echo esc_attr( get_option( 'gtg_bbfof_404_page' ) ); ?>" />

    <p class="description"><?php esc_html_e( 'Enter page id of the page you wish to use for your editable 404 template.', 'gtg-block-based-404' ); ?></p>
    <?php
    
  }
