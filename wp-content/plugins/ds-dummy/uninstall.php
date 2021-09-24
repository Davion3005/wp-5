<?php
    if(!defined('WP_UNINSTALL_PLUGIN')){
        exit();
    }
    ds_dummy_uninstall();

    function ds_dummy_uninstall(){
        global $wpdb;
        delete_option('ds_dummy_version');
        delete_option('ds_dummy_description');


        $table_name = $wpdb->prefix . 'ds_dummy_options';
        $sql = 'DROP TABLE IF EXISTS ' . $table_name;
        $wpdb->query($sql);

    }


