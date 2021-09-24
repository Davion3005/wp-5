<?php
    function ds_dummy_deactivate() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'options';

        $wpdb->update(
            $table_name,
            ['autoload' => 'no'],
            ['option_name' => 'ds_dummy_version'],
            '%s',
            '%s'
        );

        $wpdb->update(
            $table_name,
            ['autoload' => 'no'],
            ['option_name' => 'ds_dummy_description'],
            '%s',
            '%s'
        );
    }
