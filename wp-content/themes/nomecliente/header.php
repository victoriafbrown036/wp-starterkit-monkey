<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
*/ 
?>
<?php
/****************************************************
* HEADER IMPORTER + GOOGLE TAG MANAGER
****************************************************/    
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <?php 
        /**********************
        GOOGLE TAG MANAGER (1 di 2)
        **********************/
        ?><?php include(locate_template( 'wp-assets/template-parts/tracking-snippets/google-tag-manager-head.php' )); ?>
        <?php 
        /**********************
        HEAD + GOOGLE TAG MANAGER
        **********************/
        ?><?php include(locate_template( 'wp-assets/template-parts/header/head.php' )); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php 
        /**********************
        GOOGLE TAG MANAGER (2 di 2)
        **********************/
        ?><?php include(locate_template( 'wp-assets/template-parts/tracking-snippets/google-tag-manager-body.php' )); ?>
        <?php 
        /**********************
        HEADER + MENU
        **********************/
        ?><?php include(locate_template( 'wp-assets/template-parts/header/header.php' )); ?>