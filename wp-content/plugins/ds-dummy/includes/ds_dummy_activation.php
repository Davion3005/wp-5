<?php
    function ds_dummy_activate() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'ds_dummy_options';
        $ds_dummy_version = "1.0";
        $ds_dummy_description = [
            'name' => 'DS dummy plugin',
            'description' => 'The very first plugin that I have ever created.',
            'author' => 'DanhNC',
        ];

        // Create table in DB
        if ($wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") != $table_name) {
            $sql = "CREATE TABLE `" . $table_name . "` (
            `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
            `name` varchar(50) DEFAULT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
            dbDelta($sql);
        }

        // Add options
        add_option("ds_dummy_version", $ds_dummy_version);
        add_option("ds_dummy_description", $ds_dummy_description);
    }
