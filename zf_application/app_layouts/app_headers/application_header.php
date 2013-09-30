<?php

/**
 * -----------------------------------------------------------------------------
 * THIS IS THE APPLICATION GENERAL HEADER THAT IS RENDERED WHEN THE APPLICATION
 * IS ENABLED AND IS NOT UNDER CONSTRUCTION OR WHEN THE APPLICATION UNDER  
 * CONSTRUCTION AND THE CONSTRUCTION INDICATOR IS SET TO CUSTOM
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  16th/September/2013  Time: 16:00 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 * 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>The Zilas PHP Framework</title>
        
        <!--Meta tags utilised specifically by Zilas PHP Framework goes in this section-->
        <meta name="description" content="Zilas PHP Framework is an open, easy and most secure. First in Africa">
        <meta name="keywords" content="Zilas PHP Framework, Zilas PHP, Zilas Framework, PHP Framework, Secure, Open, Easy, African Framework">
        <meta name="author" content="Mathew Juma O (Athias Avians)">
        <meta charset="UTF-8">
            
        <?php
            
            /**
             * This is loads all the CSS and Javascript files that are global to
             * the application and even those that are specific to a given view 
             * of the application
             */
            
            Zf_ClientAutoload::Zf_loadCssScriptsFonts($zf_currentController, $zf_targetView);
        
        
        ?>    
            
            
    </head>
    <body>
        
        <!--This is the start of the page's header section-->
        <div class="zf_content_header">
            Header goes here.<br>
        </div>
        <!--This is the end of the page's header section-->
        
        <!-- This is the start of the page's content section -->
        <div class="zf_content_body">
  