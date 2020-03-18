<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd20832930c31cbc11bbb5e36f548a1c
{
    public static $files = array (
        '79feec08db5b22408f1f1b1999b03d8e' => __DIR__ . '/../..' . '/bootstrap/loaders.php',
        'd7374495655f6480e38534390fd18fb6' => __DIR__ . '/../..' . '/core/Update/Wedevs_Updater.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeDevs\\PM_Pro\\Modules\\' => 22,
            'WeDevs\\PM_Pro\\Core\\' => 19,
            'WeDevs\\PM_Pro\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeDevs\\PM_Pro\\Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
        'WeDevs\\PM_Pro\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'WeDevs\\PM_Pro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Create_PM_Pro_Migrations_Table' => __DIR__ . '/../..' . '/db/migrations/create_pm_pro_migrations_table.php',
        'PM_Pro_Create_Table' => __DIR__ . '/../..' . '/db/Create_Table.php',
        'ProSeeder' => __DIR__ . '/../..' . '/db/seeds/ProSeeder.php',
        'WeDevs\\PM_Pro\\Calendar\\Controllers\\Calendar_Controller' => __DIR__ . '/../..' . '/src/Calendar/Controllers/Calendar_Controller.php',
        'WeDevs\\PM_Pro\\Calendar\\Transformers\\Calendar_Transformer' => __DIR__ . '/../..' . '/src/Calendar/Transformers/Calendar_Transformer.php',
        'WeDevs\\PM_Pro\\Common\\Traits\\Transformer_Manager' => __DIR__ . '/../..' . '/src/Common/Traits/Transformer_Manager.php',
        'WeDevs\\PM_Pro\\Common\\Transformers\\Meta_Transformer' => __DIR__ . '/../..' . '/src/Common/Transformers/Meta_Transformer.php',
        'WeDevs\\PM_Pro\\Core\\Config\\Config' => __DIR__ . '/../..' . '/core/Config/Config.php',
        'WeDevs\\PM_Pro\\Core\\Database\\Abstract_Migration' => __DIR__ . '/../..' . '/core/Database/Abstract_Migration.php',
        'WeDevs\\PM_Pro\\Core\\Database\\Migrater' => __DIR__ . '/../..' . '/core/Database/Migrater.php',
        'WeDevs\\PM_Pro\\Core\\Database\\Migration' => __DIR__ . '/../..' . '/core/Database/Migration.php',
        'WeDevs\\PM_Pro\\Core\\Database\\Migration_Model' => __DIR__ . '/../..' . '/core/Database/Migration_Model.php',
        'WeDevs\\PM_Pro\\Core\\Database\\Model_Observer' => __DIR__ . '/../..' . '/core/Database/Model_Observer.php',
        'WeDevs\\PM_Pro\\Core\\Exceptions\\Class_Not_Found' => __DIR__ . '/../..' . '/core/Exceptions/Class_Not_Found.php',
        'WeDevs\\PM_Pro\\Core\\Exceptions\\Invalid_Route_Handler' => __DIR__ . '/../..' . '/core/Exceptions/Invalid_Route_Handler.php',
        'WeDevs\\PM_Pro\\Core\\Exceptions\\Undefined_Method_Call' => __DIR__ . '/../..' . '/core/Exceptions/Undefined_Method_Call.php',
        'WeDevs\\PM_Pro\\Core\\File_System\\File_System' => __DIR__ . '/../..' . '/core/File_System/File_System.php',
        'WeDevs\\PM_Pro\\Core\\Integrations\\Slack' => __DIR__ . '/../..' . '/core/Integrations/Slack.php',
        'WeDevs\\PM_Pro\\Core\\Notifications\\Emails\\Comment_Mention_Notification' => __DIR__ . '/../..' . '/core/Notifications/Emails/Comment_Mention_Notification.php',
        'WeDevs\\PM_Pro\\Core\\Notifications\\Emails\\Daily_Digest' => __DIR__ . '/../..' . '/core/Notifications/Emails/Daily_Digest.php',
        'WeDevs\\PM_Pro\\Core\\Notifications\\Notification' => __DIR__ . '/../..' . '/core/Notifications/Notification.php',
        'WeDevs\\PM_Pro\\Core\\Permissions\\Abstract_Permission' => __DIR__ . '/../..' . '/core/Permissions/Abstract_Permission.php',
        'WeDevs\\PM_Pro\\Core\\Permissions\\Administrator' => __DIR__ . '/../..' . '/core/Permissions/Administrator.php',
        'WeDevs\\PM_Pro\\Core\\Permissions\\Permission' => __DIR__ . '/../..' . '/core/Permissions/Permission.php',
        'WeDevs\\PM_Pro\\Core\\Rewrites\\Rewrite' => __DIR__ . '/../..' . '/core/Rewrites/Rewrite.php',
        'WeDevs\\PM_Pro\\Core\\Router\\Router' => __DIR__ . '/../..' . '/core/Router/Router.php',
        'WeDevs\\PM_Pro\\Core\\Router\\Uri_Parser' => __DIR__ . '/../..' . '/core/Router/Uri_Parser.php',
        'WeDevs\\PM_Pro\\Core\\Router\\WP_Router' => __DIR__ . '/../..' . '/core/Router/WP_Router.php',
        'WeDevs\\PM_Pro\\Core\\Sanitizer\\Abstract_Sanitizer' => __DIR__ . '/../..' . '/core/Sanitizer/Abstract_Sanitizer.php',
        'WeDevs\\PM_Pro\\Core\\Sanitizer\\Sanitizer' => __DIR__ . '/../..' . '/core/Sanitizer/Sanitizer.php',
        'WeDevs\\PM_Pro\\Core\\Shortcodes\\PM_Shortcode' => __DIR__ . '/../..' . '/core/Shortcodes/PM_Shortcode.php',
        'WeDevs\\PM_Pro\\Core\\Singletonable' => __DIR__ . '/../..' . '/core/Singletonable.php',
        'WeDevs\\PM_Pro\\Core\\Textdomain\\Textdomain' => __DIR__ . '/../..' . '/core/Textdomain/Textdomain.php',
        'WeDevs\\PM_Pro\\Core\\Update\\Update' => __DIR__ . '/../..' . '/core/Update/Update.php',
        'WeDevs\\PM_Pro\\Core\\Upgrades\\Upgrade' => __DIR__ . '/../..' . '/core/Upgrades/Upgrade.php',
        'WeDevs\\PM_Pro\\Core\\Upgrades\\Upgrade_0_2' => __DIR__ . '/../..' . '/core/Upgrades/Upgrade_0_2.php',
        'WeDevs\\PM_Pro\\Core\\Upgrades\\Upgrade_0_3' => __DIR__ . '/../..' . '/core/Upgrades/Upgrade_0_3.php',
        'WeDevs\\PM_Pro\\Core\\Validator\\Abstract_Validator' => __DIR__ . '/../..' . '/core/Validator/Abstract_Validator.php',
        'WeDevs\\PM_Pro\\Core\\Validator\\Validator' => __DIR__ . '/../..' . '/core/Validator/Validator.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Active' => __DIR__ . '/../..' . '/core/WP/Active.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Deactive' => __DIR__ . '/../..' . '/core/WP/Deactive.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Enqueue_Scripts' => __DIR__ . '/../..' . '/core/WP/Enqueue_Scripts.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Frontend' => __DIR__ . '/../..' . '/core/WP/Frontend.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Integrations' => __DIR__ . '/../..' . '/core/WP/Integrations.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Menu' => __DIR__ . '/../..' . '/core/WP/Menu.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Output' => __DIR__ . '/../..' . '/core/WP/Output.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Register_Scripts' => __DIR__ . '/../..' . '/core/WP/Register_Scripts.php',
        'WeDevs\\PM_Pro\\Core\\WP\\Shortcodes' => __DIR__ . '/../..' . '/core/WP/Shortcodes.php',
        'WeDevs\\PM_Pro\\Duplicate\\Controllers\\Duplicate' => __DIR__ . '/../..' . '/src/Duplicate/Controllers/Duplicate.php',
        'WeDevs\\PM_Pro\\Duplicate\\Controllers\\Duplicate_Controller' => __DIR__ . '/../..' . '/src/Duplicate/Controllers/Duplicate_Controller.php',
        'WeDevs\\PM_Pro\\File\\Controllers\\File_Controller' => __DIR__ . '/../..' . '/src/File/Controllers/File_Controller.php',
        'WeDevs\\PM_Pro\\File\\Models\\File' => __DIR__ . '/../..' . '/src/File/Models/File.php',
        'WeDevs\\PM_Pro\\File\\Transformers\\File_Transformer' => __DIR__ . '/../..' . '/src/File/Transformers/File_Transformer.php',
        'WeDevs\\PM_Pro\\Integrations\\Controllers\\Integrations_Controller' => __DIR__ . '/../..' . '/src/Integrations/Controllers/Integrations_Controller.php',
        'WeDevs\\PM_Pro\\Integrations\\Helpers\\Intg_helper' => __DIR__ . '/../..' . '/src/Integrations/Helpers/Intg_helper.php',
        'WeDevs\\PM_Pro\\Integrations\\Models\\Integrations' => __DIR__ . '/../..' . '/src/Integrations/Models/Integrations.php',
        'WeDevs\\PM_Pro\\Label\\Controllers\\Task_Label_Controller' => __DIR__ . '/../..' . '/src/Label/Controllers/Task_Label_Controller.php',
        'WeDevs\\PM_Pro\\Label\\Models\\Label' => __DIR__ . '/../..' . '/src/Label/Models/Label.php',
        'WeDevs\\PM_Pro\\Label\\Models\\Task_Label_Task' => __DIR__ . '/../..' . '/src/Label/Models/Task_Label_Task.php',
        'WeDevs\\PM_Pro\\Label\\Transformers\\Label_Transformer' => __DIR__ . '/../..' . '/src/Label/Transformers/Label_Transformer.php',
        'WeDevs\\PM_Pro\\Module_Lists\\Controllers\\Module_Lists_Controller' => __DIR__ . '/../..' . '/src/Module_Lists/Controllers/Module_Lists_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\Gantt\\src\\Models\\Gantt' => __DIR__ . '/../..' . '/modules/gantt/src/Models/Gantt.php',
        'WeDevs\\PM_Pro\\Modules\\Gantt\\src\\Transformers\\Link_Transformer' => __DIR__ . '/../..' . '/modules/gantt/src/Transformers/Link_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\core\\Actions' => __DIR__ . '/../..' . '/modules/custom_fields/core/Actions.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\core\\Filters' => __DIR__ . '/../..' . '/modules/custom_fields/core/Filters.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\core\\Scripts\\Scripts' => __DIR__ . '/../..' . '/modules/custom_fields/core/Scripts/Scripts.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\src\\Controllers\\Custom_Field_Controller' => __DIR__ . '/../..' . '/modules/custom_fields/src/Controllers/Custom_Field_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\src\\Models\\Custom_Field' => __DIR__ . '/../..' . '/modules/custom_fields/src/Models/Custom_Field.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\src\\Models\\Task_Custom_Field' => __DIR__ . '/../..' . '/modules/custom_fields/src/Models/Task_Custom_Field.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\src\\Transformers\\Custom_Field_Transformer' => __DIR__ . '/../..' . '/modules/custom_fields/src/Transformers/Custom_Field_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\custom_fields\\src\\Transformers\\Task_Custom_Field_Transformer' => __DIR__ . '/../..' . '/modules/custom_fields/src/Transformers/Task_Custom_Field_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\gantt\\core\\Permissions\\Gantt' => __DIR__ . '/../..' . '/modules/gantt/core/Permission/Permission.php',
        'WeDevs\\PM_Pro\\Modules\\gantt\\db\\migrations\\Create_Gantt_Chart_Links_Table' => __DIR__ . '/../..' . '/modules/gantt/db/migrations/create_gantt_chart_links_table.php',
        'WeDevs\\PM_Pro\\Modules\\gantt\\src\\Controllers\\Gantt_Controller' => __DIR__ . '/../..' . '/modules/gantt/src/Controllers/Gantt_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\gantt\\src\\Validators\\Gantt_Validator' => __DIR__ . '/../..' . '/modules/gantt/src/Validators/Gantt_Validator.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\core\\PDF\\PDF' => __DIR__ . '/../..' . '/modules/invoice/core/PDF/PDF.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\core\\Paypal\\Paypal' => __DIR__ . '/../..' . '/modules/invoice/core/Paypal/Paypal.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\core\\Permission\\Payment' => __DIR__ . '/../..' . '/modules/invoice/core/Permission/Payment.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\db\\migrations\\Create_Invoice_Table' => __DIR__ . '/../..' . '/modules/invoice/db/migrations/create_invoicce_table.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\includes\\Shortcodes' => __DIR__ . '/../..' . '/modules/invoice/includes/Shortcodes.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\includes\\shortcodes\\Invoice' => __DIR__ . '/../..' . '/modules/invoice/includes/shortcodes/Invoice.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\src\\Controllers\\Invoice_Controller' => __DIR__ . '/../..' . '/modules/invoice/src/Controllers/Invoice_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\src\\Models\\Invoice' => __DIR__ . '/../..' . '/modules/invoice/src/Models/Invoice.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\src\\Transformers\\Invoice_Meta_Transformer' => __DIR__ . '/../..' . '/modules/invoice/src/Transformers/Invoice_Meta_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\invoice\\src\\Transformers\\Invoice_Transformer' => __DIR__ . '/../..' . '/modules/invoice/src/Transformers/Invoice_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\kanboard\\core\\Permissions\\Kanboard' => __DIR__ . '/../..' . '/modules/kanboard/core/Permission/Permission.php',
        'WeDevs\\PM_Pro\\Modules\\kanboard\\src\\Controllers\\Kanboard_Controller' => __DIR__ . '/../..' . '/modules/kanboard/src/Controllers/Kanboard_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\kanboard\\src\\Models\\Kanboard' => __DIR__ . '/../..' . '/modules/kanboard/src/Models/Kanboard.php',
        'WeDevs\\PM_Pro\\Modules\\kanboard\\src\\Models\\Kanboard_Boardable' => __DIR__ . '/../..' . '/modules/kanboard/src/Models/Kanboard_Boardable.php',
        'WeDevs\\PM_Pro\\Modules\\kanboard\\src\\Transformers\\Kanboard_Transformer' => __DIR__ . '/../..' . '/modules/kanboard/src/Transformers/Kanboard_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\kanboard\\src\\Validators\\Kanboard_Validator' => __DIR__ . '/../..' . '/modules/kanboard/src/Validators/Kanboard_Validator.php',
        'WeDevs\\PM_Pro\\Modules\\pm_buddypress\\src\\PM_BP_Group_Extension' => __DIR__ . '/../..' . '/modules/pm_buddypress/src/PM_BP_Group_Extension.php',
        'WeDevs\\PM_Pro\\Modules\\stripe\\src\\Controllers\\Stripe_Controller' => __DIR__ . '/../..' . '/modules/stripe/src/Controllers/Stripe_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\Permissions\\Create_Sub_Task' => __DIR__ . '/../..' . '/modules/sub_tasks/Permissions/Create_Sub_Task.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\Permissions\\Edit_Sub_Task' => __DIR__ . '/../..' . '/modules/sub_tasks/Permissions/Edit_Sub_Task.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\src\\Controllers\\Sub_Tasks_Controller' => __DIR__ . '/../..' . '/modules/sub_tasks/src/Controllers/Sub_Tasks_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\src\\Models\\Sub_Tasks' => __DIR__ . '/../..' . '/modules/sub_tasks/src/Models/Sub_Tasks.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\src\\Transformers\\Sub_Task_Transformer' => __DIR__ . '/../..' . '/modules/sub_tasks/src/Transformers/Sub_Task_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\src\\Validators\\Create_Sub_Task' => __DIR__ . '/../..' . '/modules/sub_tasks/src/Validators/Create_Sub_Task.php',
        'WeDevs\\PM_Pro\\Modules\\sub_tasks\\src\\Validators\\Update_Sub_Task' => __DIR__ . '/../..' . '/modules/sub_tasks/src/Validators/Update_Sub_Task.php',
        'WeDevs\\PM_Pro\\Modules\\task_recurring\\CreateRecurrentTasks' => __DIR__ . '/../..' . '/modules/task_recurring/CreateRecurrentTasks.php',
        'WeDevs\\PM_Pro\\Modules\\task_recurring\\FormatRecurrenceData' => __DIR__ . '/../..' . '/modules/task_recurring/FormatRecurrenceData.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\core\\Permissions\\Time_Add' => __DIR__ . '/../..' . '/modules/time_tracker/core/Permissions/Time_Add.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\core\\Permissions\\Time_Delete' => __DIR__ . '/../..' . '/modules/time_tracker/core/Permissions/Time_Delete.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\core\\Permissions\\Time_Start' => __DIR__ . '/../..' . '/modules/time_tracker/core/Permissions/Time_Start.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\core\\Permissions\\Time_Stop' => __DIR__ . '/../..' . '/modules/time_tracker/core/Permissions/Time_Stop.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\db\\migrations\\Create_Time_Tracker_Table' => __DIR__ . '/../..' . '/modules/time_tracker/db/migrations/create_time_tracker_table.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\libs\\Report_Summary' => __DIR__ . '/../..' . '/modules/time_tracker/libs/Report_Summary.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\libs\\Report_Users' => __DIR__ . '/../..' . '/modules/time_tracker/libs/Report_Users.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\libs\\Reports' => __DIR__ . '/../..' . '/modules/time_tracker/libs/Reports.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\src\\Controllers\\Time_Tracker_Controller' => __DIR__ . '/../..' . '/modules/time_tracker/src/Controllers/Time_Tracker_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\src\\Models\\Time_Tracker' => __DIR__ . '/../..' . '/modules/time_tracker/src/Models/Time_Tracker.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\src\\Transformers\\New_Time_Tracker_Transformer' => __DIR__ . '/../..' . '/modules/time_tracker/src/Transformers/New_Time_Tracker_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\src\\Transformers\\Time_Tracker_Transformer' => __DIR__ . '/../..' . '/modules/time_tracker/src/Transformers/Time_Tracker_Transformer.php',
        'WeDevs\\PM_Pro\\Modules\\time_tracker\\src\\Validators\\Time_Tracker_Validator' => __DIR__ . '/../..' . '/modules/time_tracker/src/Validators/Time_Tracker_Validator.php',
        'WeDevs\\PM_Pro\\Modules\\woo_project\\src\\Controllers\\Woo_Project_Controller' => __DIR__ . '/../..' . '/modules/woo_project/src/Controllers/Woo_Project_Controller.php',
        'WeDevs\\PM_Pro\\Modules\\woo_project\\src\\Transformers\\Product_Transformer' => __DIR__ . '/../..' . '/modules/woo_project/src/Transformers/Product_Transformer.php',
        'WeDevs\\PM_Pro\\Reports\\Controllers\\Reports_Controller' => __DIR__ . '/../..' . '/src/Reports/Controllers/Reports_Controller.php',
        'WeDevs\\PM_Pro\\Reports\\Transformers\\Project_Transformer' => __DIR__ . '/../..' . '/src/Reports/Transformers/Project_Transformer.php',
        'WeDevs\\PM_Pro\\Reports\\Transformers\\Task_Lists_Transformer' => __DIR__ . '/../..' . '/src/Reports/Transformers/Task_Lists_Transformer.php',
        'WeDevs\\PM_Pro\\Search\\Controllers\\Search_Controller' => __DIR__ . '/../..' . '/src/Search/Controllers/Search_Controller.php',
        'WeDevs\\PM_Pro\\Settings\\Controllers\\Settings_Controller' => __DIR__ . '/../..' . '/src/Settings/Controllers/Settings_Controller.php',
        'WeDevs\\PM_Pro\\Update\\Controllers\\Update_Controller' => __DIR__ . '/../..' . '/src/Update/Controllers/Update_Controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd20832930c31cbc11bbb5e36f548a1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd20832930c31cbc11bbb5e36f548a1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd20832930c31cbc11bbb5e36f548a1c::$classMap;

        }, null, ClassLoader::class);
    }
}
