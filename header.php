<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?> | <?php bloginfo('description'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
    <!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print.css" type="text/css" media="print" />-->

    <meta name="robots" content="index,follow" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
</head>

<body>

    <div id="kontainer">

        <div id="kopf">
            <h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
        </div><!-- /kopf -->

        <div id="mitte">
<!-- ende header -->
