<?php

/**
 * -----------------------------------------------------------------------------
 * THIS IS THE APPLICATION SETTINGS FILE. ALL THE SETTINGS ARE DONE ON THIS 
 * FILES BY THE APPLICATION DEVELOPER. 
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  12th/August/2013  Time: 12:20 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 * 
 */


/**
 * -----------------------------------------------------------------------------
 * THESE ARE CONSTANTS FOR CONFIGURING, APPLICATION FOLDER PATH, APPLICATION
 * NAME, and ALSO APPLICATION LOGO PATH
 * -----------------------------------------------------------------------------
 */
    @define('APPLICATION_FOLDER'    , 'http://localhost/MyProjects/ZilasFramework/');
    @define('APPLICATION_NAME'      , 'Zilas PHP - Framework');
    @define('APPLICATION_LOGO'      , 'http://localhost/MyProjects/ZilasFramework/zf_client/zf_app_global/app_global_files/app_global_images/logo.png');
    @define('APPLICATION_COPYRIGHT' , 'Zilas PHP Framework &copy; '.date('Y'));
    
    
/**
 * -----------------------------------------------------------------------------
 * THIS CONSTANT HOLDS THE STATUS OF THE APPLICATION i.e Enabled or Disabled
 * -----------------------------------------------------------------------------
 */
    @define('APPLICATION_STATUS'    , 'enabled');
 
    
/**
 * -----------------------------------------------------------------------------
 * THIS CONSTANT HOLDS THE CONSTRUCTION INDICATOR i.e default or custom
 * -----------------------------------------------------------------------------
 */
    @define('CONSTRUCTION_INDICATOR', 'default');
    
    
/**
 * -----------------------------------------------------------------------------
 * THIS CONSTANT HOLDS DEFAULT APPLICATION CONTROLLER, WHICH IS THE ENTRY
 * CONTROLLER IF THE "first" URL PARAMETER IS EMPTY.
 * -----------------------------------------------------------------------------
 */
    @define('DEFAULT_CONTROLLER'    , 'index-controller');
    
    
/**
 * -----------------------------------------------------------------------------
 * THESE ARE CONSTANTS FOR CONFIGURING COMMON APPLICATION DEFAULTS, can either
 * be "enabled" or "disabled". 
 * -----------------------------------------------------------------------------
 */
    @define('APPLICATION_SEO'        , 'enabled');
    @define('APPLICATION_CACHING'    , 'disabled');
    @define('APPLICATION_URLENCRYPT' , 'enabled');
    @define('APPLICATION_ENCRYPTION' , 'enabled');
    @define('APPLICATION_DECRYPTION' , 'enabled');
    
    
/**
 * -----------------------------------------------------------------------------
 * THESE ARE CONSTANTS FOR CONFIGURING DEFAULT APPEAREANCE OF BREADCRUMBS, can 
 * either be "enabled" or "disabled". 
 * -----------------------------------------------------------------------------
 */
    @define('APPLICATION_BREADCRUMBS' ,  'enabled');
    @define('BREADCRUMBS_SYMBOL'      ,  ' >> ');
    
    
 /**
  * -----------------------------------------------------------------------------
  * THESE ARE CONSTANTS FOR DATABASE CONFIGURATION, THESE DETAILS CAN BE CHANGED
  * DEPENDING ON THE DATABASE CONNECTION ESTABLISHED 
  * -----------------------------------------------------------------------------
  */  
    @define("DATABASE_HOST"      ,     "127.0.0.1");
    @define("DATABASE_USERNAME"  ,     "root");
    @define("DATABASE_PASSWORD"  ,     "root");
    /**
     * USE VALID DATABASE DRIVER INCLUDING: access, ado_access, ado_mssql, db2,
     *  fbsql (FrontBase), firebird, ibase, idap, informix, mssql, mysql, odbc,
     *  odbc_db2, odbc_mssql, odbc_oracle, oracle, oci8, pdo, postgres,
     *  postgres7,  postgres8, postgres9,  postgres64, sqlanywhere, sqlite, 
     *  vfp (Visual Fox Pro)
     */
    @define("DATABASE_DRIVER"    ,     "mysql");  
    @define("DATABASE_NAME"      ,     "inventory");
    @define("CHARACTER_SET"      ,     "utf8");
    @define("CONNECTION_TYPE"    ,     false);
    @define("DATABASE_DEBUG"     ,     false);
     

?>
