<?php

/**
 * -----------------------------------------------------------------------------
 * THIS IS THE CORE MODEL FOR ZILAS PHP FRAMEWORK. ITS IS THE MAIN BRIDEG 
 * BETWEEN THE MODELS AND THE DATABASE ABSTRACTION CLASSES.
 * 
 * THIS CLASS MUST BE EXTENDED BY ALL THE OTHER MODELS USED IN THE APPLICATION.
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  14th/August/2013  Time: 11:20 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013 (sunday)
 * 
 */


class Zf_Model extends Zf_QueryGenerator {
    
    /**
     *This is property that is used to instantiate the ADODB library for 
     * database transaction processing.
     * 
     * @var type protected
     */
    protected $Zf_AdoDB;
    
    /**
     * -------------------------------------------------------------------------
     * THIS THE CLASS CONSTRUCTOR, IT RUNS BY DEFAULT WHENEVER THE CLASS IS
     * INITIALISED.
     * -------------------------------------------------------------------------
     * 
     */
    public function __construct() {
        
        parent::__construct();
        
        $databasetype = 'mysql'; 
        $server = 'localhost';
        $user   = 'root';
        $password = 'root';
        $database = 'inventory';

        $this->Zf_AdoDB = ADONewConnection($databasetype); 
        $this->Zf_AdoDB->debug = false; 
        $this->Zf_AdoDB->Connect($server, $user, $password, $database);
            
    }

}
?>
