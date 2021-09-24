<?php
    function ds_dummy_deactivate() {
        global $wpdb;
        delete_option('ds_dummy_version');
        delete_option('ds_dummy_description');
    }
