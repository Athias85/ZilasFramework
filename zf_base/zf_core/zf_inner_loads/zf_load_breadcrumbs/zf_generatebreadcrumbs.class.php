<?php

/**
 * -----------------------------------------------------------------------------
 * THIS CLASS FILE IS ESSENTIAL FOR GENERATING THE BREADCRUMBS DEPENDING ON THE
 * SECTION OF THE APPLICATION BEING ACCESSED.
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  25th/September/2013  Time: 17:30 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 * 
 */

class Zf_GenerateBreadCrumbs {
    
    
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
     * THIS IS STATIC METHOD THAT IS RESPONSIBLE FOR LOADING BREADCRUMBS
     * BASED ON THE LOCATION OF VISIT AND WHETHER BREADCRUMBS ARE SET IN THAT
     * PARTICULAR VIEW.
     * -------------------------------------------------------------------------
     */
    public static function zf_load_breadcrumbs(){
        
        echo "Here we generate all application breadcrumbs";
        
    }
    
}

?>

