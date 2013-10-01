<?php

/**
 * -----------------------------------------------------------------------------
 * THIS CLASS FILE IS ESSENTIAL FOR LOADING ALL THE SEO FILES. IT DIGS INTO A 
 * SPECIFIED SEO FILE AND INCLUDES IT TO THE NECESSARY HEADER SECTION>
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  1st/October/2013  Time: 16:40 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 * 
 */

class Zf_GenerateSEO{
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS THE CLASS CONSTRUCTOR, IT RUNS BY DEFAULT WHENEVER THE CLASS IS
     * INITIALISED.
     * -------------------------------------------------------------------------
     * 
     */
    public function __construct() {
        
        parent::__construct();
            
    }
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS STATIC METHOD THAT IS RESPONSIBLE FOR GENERATING THE SEO FOR A 
     * GIVEN VIEW
     * -------------------------------------------------------------------------
     */
    public static function zf_load_seo(){
        
        /**
         * Check to see that SEO capability of the framework has been enabled.
         */
        $zf_seo_status = Zf_Configurations::Zf_ApplicationDefaults();
        
        $zf_applicationStatus   = Zf_Configurations::Zf_ApplicationStatus();
        
        if($zf_seo_status['application_seo'] == 'enabled'){
            
            
            
            $current_controller = Zf_Core_Functions::Zf_URLSanitize();
            
            $zf_controller = $current_controller[0];
            
            /**
             * --------------------------------------------------------------------
             * IN THIS SECTION, WE TRY TO LOCATE THE VALID "view_files" DIRECTORY
             * TO BE SCANNED AND EXECUTED DEPENDING ON THE RUNNING CONTROLLER
             * --------------------------------------------------------------------
             * 
             */
            if (($zf_applicationStatus['application_status'] === 'disabled') && ($zf_applicationStatus['construction_indicator'] == 'default')) {

                /**
                 * This is the "view_files" directory for the default construction
                 * view
                 */
                $zf_seo_view = ASSETS_VIEWS . "zf_default_construction" . DS . "view_client" . DS ."zf_view_global" . DS . "view_files" . DS . "zf_seo.php";
                
            } else if (($zf_applicationStatus['application_status'] === 'disabled') && ($zf_applicationStatus['construction_indicator'] == 'custom')) {

                /**
                 * This is the "view_files" directory for the custom construction
                 * view
                 */
                $zf_seo_view = APP_VIEWS_ASSETS . "zf_custom_construction" . DS . "view_client" . DS ."zf_view_global" . DS . "view_files" . DS . "zf_seo.php";
                
            } else {

                    $zf_seo_view = APP_VIEWS . $zf_controller . DS . "view_client" . DS ."zf_view_global" . DS . "view_files" . DS . "zf_seo.php";
                
            }
            
            /**
             * If SEO has been enabled, then we check for the availability of 
             * the seo file in the view, if yes, we load it, if no, we load the 
             * SEO file from the global application view.
             */
            if(file_exists($zf_seo_view)){
                
                require_once $zf_seo_view;
                
            }else{
                
                /**
                 * If SEO has been disabled then we take the default SEO File from
                 * the global application view.
                 */
                
                $zf_seo_file = ZF_APP_GLOBAL . "app_global_files" . DS . "app_global_seo" . DS . "zf_seo.php";

                /**
                 * Require the global SEO file
                 */
                require_once $zf_seo_file;
                
            }
            
        }else{
            
            /**
             * If SEO has been disabled then we take the default SEO File from
             * the global application view.
             */
            $zf_seo_file = ZF_APP_GLOBAL . "app_global_files" . DS . "app_global_seo" . DS . "zf_seo.php" ;
            
            /**
             * Require the global SEO file
             */
            require_once $zf_seo_file;
            
        }
        
        
    }
   
    
}

?>

