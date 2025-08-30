<?php if (!defined('ABSPATH')) exit; ?>
<div class="wrap">
    <h1><?php esc_html_e('Theme Settings', 'ct-custom'); ?></h1>

    <form method="post" action="options.php">
        <?php
        settings_fields('ct_theme_settings_group');
        do_settings_sections('ct_theme_settings_page');
        submit_button(__('Save Settings', 'ct-custom'));
        ?>
    </form>
</div>
