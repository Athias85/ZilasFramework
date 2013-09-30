<?php

/**
 * -----------------------------------------------------------------------------
 * THIS IS THE ADMINISTRATION CONTROLLER, ESSENTIAL FOR ROUTING AND EXECUTING ALL ACTIONS
 * THAT RELATE TO INDEX MODELS AND VIEWS.
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  14th/August/2013  Time: 11:00 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013 (sunday)
 * 
 */

class AdministrationController extends Zf_Controller {
   
    
    public $zf_defaultAction = "dashboard";



    public function __construct() {
        
        /**
         * CALL THE CONSTRUCTOR OF THE PARENT CLASS.
         */
        parent::__construct();
        
        echo "This is the administration controller<br>";
        
    }

    
    /**
     * This is the index action for the controller
     */
    public function actionIndex(){
        
        Zf_View::zf_displayView('index');
        
    }
    
    
    
    /**
     * This is the login action for the controller
     */
    public function actionDashboard(){
        
        Zf_View::zf_displayView('dashboard');
        
    }
    

}
?>
