<?php
/**
 * This file loads in all the files for this plugin
 */

 // load in all teh required inc files.
 $includes_files = glob( plugin_dir_path( __FILE__ ) . '*.php' );

 // if we have any includes files.
 if ( !empty( $includes_files ) ) {

    // loop thhrough each file
    foreach ( $includes_files as $includes_file) {
      // if this file in the loop is this file we are now in then ignore.
      if (strpos( $includes_file, 'loader.php' ) !== false) {
        continue; // move to the next file
      }

      // require this file in the plugin
      require_once( $includes_file );
    }
 }