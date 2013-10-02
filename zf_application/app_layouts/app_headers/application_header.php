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
        <?php
        
            /**
             * This loads all the SEO files depending on whether the SEO ability
             * of the framework has been enabled or not. If the SEO ability is
             * enabled then the SEO files are view specific if and only if they
             * exist in the particular view.
             */
            Zf_GenerateSEO::zf_load_seo();    
            
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
            <?php
                /**
                 * THIS IS THE DEFAULT WAY OF LOADING YOUR LOGO TO ANY VIEW OF
                 * THE APPLICATION
                 * 
                 * This method expects an array of data which controls the look
                 * and feel of the logo.
                 * 
                 */
                $zf_logo_data = array(
                    'width'       => '300px',
                    'height'      => '75px',
                    'alt' => 'Zilas PHP Framework Logo',
                    'style'       => '',
                    'id'          => ''
                );
                
                Zf_LoadImages::zf_loadLogo($zf_logo_data);
            ?>
            <br>
        </div>
        <!--This is the end of the page's header section-->
        
        <!-- This is the start of the page's content section -->
        <div class="zf_content_body">
  