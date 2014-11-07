<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>

<?php
    $js_lang = array(
        'delete' => __('Delete', 'bender_black'),
        'cancel' => __('Cancel', 'bender_black')
    );

    osc_enqueue_script('jquery');
    osc_enqueue_script('jquery-ui');
    osc_register_script('global-theme-js', osc_current_web_theme_js_url('global.js'), 'jquery');
    osc_register_script('delete-user-js', osc_current_web_theme_js_url('delete_user.js'), 'jquery-ui');
    osc_enqueue_script('global-theme-js');
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title><?php echo meta_title() ; ?></title>
<meta name="title" content="<?php echo osc_esc_html(meta_title()); ?>" />
<?php if( meta_description() != '' ) { ?>
<meta name="description" content="<?php echo osc_esc_html(meta_description()); ?>  Buy and sell Used Guitars and Guitar Accessories for FREE." />
<?php } ?>
<?php if( meta_keywords() != '' ) { ?>
<meta name="keywords" content="<?php echo osc_esc_html(meta_keywords()); ?>" />
<?php } ?>
<?php if( osc_get_canonical() != '' ) { ?>
<!-- canonical -->
<link rel="canonical" href="<?php echo osc_get_canonical(); ?>"/>
<!-- /canonical -->
<?php } ?>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Expires" content="Fri, Jan 01 1970 00:00:00 GMT" />

<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- favicon -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-57x57.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-114x114.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-72x72.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-144x144.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-60x60.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-120x120.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-76x76.png'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo osc_current_web_theme_url('favicon/apple-touch-icon-152x152.png'); ?>" />
<link rel="icon" type="image/png" href="<?php echo osc_current_web_theme_url('favicon/favicon-196x196.png" sizes="196x196'); ?>" />
<link rel="icon" type="image/png" href="<?php echo osc_current_web_theme_url('favicon/favicon-96x96.png" sizes="96x96'); ?>" />
<link rel="icon" type="image/png" href="<?php echo osc_current_web_theme_url('favicon/favicon-32x32.png" sizes="32x32'); ?>" />
<link rel="icon" type="image/png" href="<?php echo osc_current_web_theme_url('favicon/favicon-16x16.png" sizes="16x16'); ?>" />
<link rel="icon" type="image/png" href="<?php echo osc_current_web_theme_url('favicon/favicon-128.png" sizes="128x128'); ?>" />
<!-- /favicon -->

<link href="<?php echo osc_current_web_theme_url('js/jquery-ui/jquery-ui-1.10.2.custom.min.css') ; ?>?<?php echo rand(0, pow(10, 5)); ?>" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var bender_black = window.bender_black || {};
    bender_black.base_url = '<?php echo osc_base_url(true); ?>';
    bender_black.langs = <?php echo json_encode($js_lang); ?>;
    bender_black.fancybox_prev = '<?php echo osc_esc_js( __('Previous image','bender_black')) ?>';
    bender_black.fancybox_next = '<?php echo osc_esc_js( __('Next image','bender_black')) ?>';
    bender_black.fancybox_closeBtn = '<?php echo osc_esc_js( __('Close','bender_black')) ?>';
</script>
<link href="<?php echo osc_current_web_theme_url('css/custom.css') ; ?>?<?php echo rand(0, pow(10, 5)); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo osc_current_web_theme_url('css/main.css') ; ?>?<?php echo rand(0, pow(10, 5)); ?>" rel="stylesheet" type="text/css" />
<?php osc_run_hook('header') ; ?>