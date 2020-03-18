<?php
namespace WeDevs\PM_Pro\Modules\custom_fields\core;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Load general WP action hook
 */
class Actions {
    /**
     * This plugin's instance.
     *
     * @var CoBlocks_Accordion_IE_Support
     */
    private static $instance;

    /**
     * Registers the plugin.
     */
    public static function instance() {
         if ( !self::$instance ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * The Constructor.
     */
    public function __construct() {
        add_action('pm-activation-custom_fields', [ $this, 'create_table' ] );

    }

    function create_table() {
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;

        //Crate custom field table
        $custom_field = $wpdb->prefix . 'pm_custom_fields';

        $sql1 = "CREATE TABLE IF NOT EXISTS {$custom_field} (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `project_id` int(11) DEFAULT NULL,
          `title` varchar(100) DEFAULT NULL,
          `description` text,
          `type` varchar(50) DEFAULT NULL,
          `optional_value` text,
          `order` int(11) DEFAULT 0,
          -- `created_at` timestamp NULL DEFAULT NULL,
          -- `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `project_id` (`project_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

        dbDelta( $sql1 );

        //Crate task custom field table
        $task_custom_field = $wpdb->prefix . 'pm_task_custom_fields';

        $sql2 = "CREATE TABLE IF NOT EXISTS {$task_custom_field} (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `field_id` int(11) DEFAULT NULL,
          `project_id` int(11) DEFAULT NULL,
          `list_id` int(11) DEFAULT NULL,
          `task_id` int(11) DEFAULT NULL,
          `value` text,
          `color` varchar(30) DEFAULT NULL,
          -- `created_at` timestamp NULL DEFAULT NULL,
          -- `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `field_id` (`field_id`),
          KEY `project_id` (`project_id`),
          KEY `list_id` (`list_id`),
          KEY `task_id` (`task_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

        dbDelta( $sql2 );
    }
}
