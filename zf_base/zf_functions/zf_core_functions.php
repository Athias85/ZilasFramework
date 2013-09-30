<?php

/**
 * -----------------------------------------------------------------------------
 * THIS IS THE ZILAS CORE FUNCTIONS FILE, WHICH IS ESSENTIAL FOR ALL THE DEFAULT
 * APPLICATION FUNCTIONS THAT ARE NECESSARY FOR THE FRAMEWORK TO RUN PROPERLY
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  12th/August/2013  Time: 09:30 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 * 
 */


class Zf_Core_Functions {
    
    /**
     * -----------------------------------------------------------------------------
     * Responsible for sanitizing and spliting the URL passed and then it returns an
     * array with the URL parts as the array values.
     * -----------------------------------------------------------------------------
     */
    public static function Zf_URLSanitize() {

        /**
         * IF A URL HAS BEEN SET, GET IT FOR SANITIZATION
         */
        $zf_url = isset($_GET['url']) ? $_GET['url'] : null;


        /**
         * REMOVE THE LAST FORWARD SLASH "/" FROM THE URL
         */
        $zf_url = rtrim($zf_url, '/');


        /**
         * FILTER THE URL TO ONLY REMAIN WITH CLEAN URL
         */
        $zf_url = filter_var($zf_url, FILTER_SANITIZE_URL);


        /**
         * SPLIT THE URL, WITH "/" AS THE DELIMITER WHILE RETURNING EACH PART INTO
         * AN ARRAY
         */
        $zf_url = explode('/', $zf_url);

        //print_r($zf_url); echo "<br><br>"; //This is strictly for debugging purposes.


        /**
         * RETURNS AN ARRAY OF THE URL PARTS.
         */
        return $zf_url;
    }
    
    
}





?>
