<?php

/**
 * -----------------------------------------------------------------------------
 * THIS IS THE ZILAS PHP FRAMEWORK, CORE CONFIGURATION FILE. ALL DEFAULT
 * CONFIGURATIONS ARE IN THIS PARTICULAR FILE.
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  12th/August/2013  Time: 12:15 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 */


/**
 * -----------------------------------------------------------------------------
 * HERE WE REQUIRE THE APPLICATION SETTINGS FILE, WHICH IS SET BY THE DEVELPOER
 * -----------------------------------------------------------------------------
 * 
 */
require_once 'zf_application/zf_application_settings.php'; 

class Zf_Configurations {
    
    /**
     * -------------------------------------------------------------------------
     * STORES AN ARRAY OF A COLLECTION OF APPLICATION DEFAULT PATHS
     * -------------------------------------------------------------------------
     * 
     * @var string array
     * @access private
     * 
     */
    private static $zf_defaultpaths;
    
    
    /**
     * -------------------------------------------------------------------------
     * STORES AN ARRAY CONTAINING THE STATUS OF THE APPLICATION
     * -------------------------------------------------------------------------
     * 
     * @var string array
     * @access private
     * 
     */
    private static $zf_applicationstatus;
    
    
    /**
     * -------------------------------------------------------------------------
     * STORES AN ARRAY CONTAINING DEFAULT SETTINGS OF THE APPLICATION
     * -------------------------------------------------------------------------
     * 
     * @var string array
     * @access private
     * 
     */
    private static $zf_applicationdefaults;
    
    
    /**
     * -------------------------------------------------------------------------
     * STORES AN ARRAY CONTAINING BREADCRUMBS SETTINGS FOR THE APPLICATION
     * -------------------------------------------------------------------------
     * 
     * @var string array
     * @access private
     * 
     */
    private static $zf_applicationbreadcrumbs;
    
    
    
    

    /**
     * -------------------------------------------------------------------------
     * THIS THE CLASS CONSTRUCTOR, IT RUNS BY DEFAULT WHENEVER THE CLASS IS
     * INITIALISED.
     * -------------------------------------------------------------------------
     * 
     */
    public function __construct() {
        
    }
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS A STATIC METHOD THAT RETURNS AN ARRAY HOLDING ALL THE APPLICATION
     * PATHS.
     * -------------------------------------------------------------------------
     *
     * @var    string array
     * @access public 
     */
    public static function Zf_ConfigurationPaths(){
        
        self::$zf_defaultpaths = array(
            
            'zf_application'   => APPLICATION_FOLDER,
            'application_name' => APPLICATION_NAME,
            'application_logo' => APPLICATION_LOGO
            
        );
        
        return self::$zf_defaultpaths;
    }
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS A STATIC METHOD THAT RETURNS AN ARRAY HOLDING ALL THE APPLICATION
     * PATHS.
     * -------------------------------------------------------------------------
     *
     * @var    string array
     * @access public 
     */
    public static function Zf_ApplicationStatus(){
        
        self::$zf_applicationstatus = array(
            
            'application_status'     => APPLICATION_STATUS,
            'construction_indicator' => CONSTRUCTION_INDICATOR,
            'default_controller'     => DEFAULT_CONTROLLER
            
        );
        
        return self::$zf_applicationstatus;
    }
    
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS A STATIC METHOD THAT RETURNS AN ARRAY HOLDING ALL DEFAULT SETTINGS
     * OF THE ZILAS BASED APPLICATION.
     * -------------------------------------------------------------------------
     *
     * @var    string array
     * @access public 
     */
    public static function Zf_ApplicationDefaults(){
        
        self::$zf_applicationdefaults = array(
            
            'application_seo'         => APPLICATION_SEO,
            'application_caching'     => APPLICATION_CACHING,
            'application_urlencrypt'  => APPLICATION_URLENCRYPT,
            'application_encryption'  => APPLICATION_ENCRYPTION,
            'application_decryption'  => APPLICATION_DECRYPTION,
            'security_key'            => ENCRYPTION_DECRYPTIION_KEY
            
        );
        
        return self::$zf_applicationdefaults;
    }
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS A STATIC METHOD THAT RETURNS AN ARRAY HOLDING ALL DEFAULT SETTINGS
     * OF THE ZILAS BASED APPLICATION.
     * -------------------------------------------------------------------------
     *
     * @var    string array
     * @access public 
     */
    public static function Zf_ApplicationBreadcrumbs(){
        
        self::$zf_applicationbreadcrumbs = array(
            
            'application_breadcrumbs'    => APPLICATION_BREADCRUMBS,
            'breadcrumbs_symbol'         => BREADCRUMBS_SYMBOL
            
        );
        
        return self::$zf_applicationbreadcrumbs;
    }
    
    
    

}

?>
