<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Maintenance Mode | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo PMG_MAINT_URL; ?>css/style.css" />
</head>
<body <?php body_class('maint'); ?>>
    <div class="wrap">
        <img src="<?php echo PMG_MAINT_URL; ?>img/logo.png" alt="Performance Media Group" title="Performance Media Group" />
        <p><?php _e('We are doing some routine maintenance.  Check back in a bit!'); ?></p>
    </div>
</body>
