<?php
/*
Plugin Name: Webico Maps embed Flatsome Addons
Plugin URI: https://www.webico.vn
Description: Plugin được chia sẻ bởi Webico teams. Plugin tạo timeline cho flatsome hoặc theme bất kỳ
Contributors: Tran Binh, Webico
Installation:From your WordPress dashboard=1. Visit 'Plugins > Add New'=2. Search for WBC Maps.=3. Activate WBC Maps from your Plugins page.Cài đặt plugin -> Vào đăng post timeline -> Vào flatsome UX Builder chọn element WBC Maps và cấu hình tương ứngSử dụng shortcode [wbc-timline cat='']== Changelog === 1.0.0 =*  Khởi tạo plugin
Version: 1.0.0
Author: Webico Teams
Text Domain: webico
Domain Path: /languages
Tags: Webico.vn, Tran Binh, Flatsome Addons
Tested up to: 3.9.8
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://www.webico.vn

 Plugin được chia sẻ bởi Webico teams.

*/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
define('WBC_FL_Maps_Addons_DIR', plugin_dir_path(__FILE__));
define('WBC_FL_Maps_Addons_URL', plugins_url('/', __FILE__));
class WBC_FL_Maps_Addons
{
    /**
     * WBC_FL_Maps_Addons constructor.
     */
    public function __construct()
    {
        add_action('ux_builder_setup', array($this, 'ux_builder_element'));
        $this->includes();
    }
    public function includes()
    {

    }
    public function ux_builder_element()
    {
        include(WBC_FL_Maps_Addons_DIR . '/inc/builder/wbc-maps.php' );
    }
}
function wbc_fl_maps_addons_run()
{
    new WBC_FL_Maps_Addons();
}
add_action('after_setup_theme', 'wbc_fl_maps_addons_run');


require_once (WBC_FL_Maps_Addons_DIR. '/inc/shortcodes/wbc-maps.php');
