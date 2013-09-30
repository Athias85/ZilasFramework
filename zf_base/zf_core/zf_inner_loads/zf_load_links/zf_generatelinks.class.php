<?php

/**
 * -----------------------------------------------------------------------------
 * THIS CLASS FILE IS ESSENTIAL FOR LOADING ALL THE EXTERNAL APPLICATION LINKS
 * BY ACCEPTING THE VARIOUS ASPECTS OF A DEFAULT LINK.
 * -----------------------------------------------------------------------------
 *
 * @author Mathew Juma O. (ATHIAS AVIANS) <mathew@headsafrica.com>
 * @time  25th/September/2013  Time: 16:40 EMT
 * @link http://www.zilasframework.com/
 * @copyright Copyright &copy; 2013 Zilas Software LLC
 * @license http://www.zilasframework.com/license/
 * @version 1.01 Final
 * @since version 1.01 Final - 11th/August/2013
 * 
 */

class Zf_GenerateLinks{
    
    
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
     * THIS IS STATIC METHOD THAT IS RESPONSIBLE FOR GENERATING THE STANDARD
     * EXTERNAL LINK
     * -------------------------------------------------------------------------
     */
    public static function zf_external_link($zf_link_data = NULL){
        
        /**
         * Check to see that link data is not emtpy
         */
        if(empty($zf_link_data) || !is_array($zf_link_data) || $zf_link_data == NULL){
            
            echo "<code><strong>External Link Error:</strong> Missing Data Array</code> ";
            
        }else{
            
            $zf_external_link =  $zf_link_data['link'];
            echo "<a href='{$zf_external_link}' title='{$zf_link_data['title']}' target='{$zf_link_data['target']}' class='{$zf_link_data['style']}' id='{$zf_link_data['id']}' >{$zf_link_data['name']}</a>";
            
        }
        
    }
    
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS STATIC METHOD THAT IS RESPONSIBLE FOR GENERATING THE STANDARD
     * INTERNAL LINK
     * -------------------------------------------------------------------------
     */
    public static function zf_internal_link($zf_link_data = NULL){
        
        $url_encryption_status = Zf_Configurations::Zf_ApplicationDefaults();
        
        if(empty($zf_link_data) && !is_array($zf_link_data)){
            
            $zf_current_url = Zf_Core_Functions::Zf_URLSanitize();
            
            if(empty($zf_current_url[2]) && (!empty($zf_current_url[1]))){
                
               $zf_internal_link = ZF_ROOT_PATH. $zf_current_url[0] . DS .$zf_current_url[1] . DS ."#";
               echo "<a href='{$zf_internal_link}' title='Dead Link'>{$zf_current_url[0]} ". DS ." {$zf_current_url[1]}". DS ."#</a> ";
                
            }else if(empty($zf_current_url[1]) && (!empty($zf_current_url[0]))){
                
               $zf_internal_link = ZF_ROOT_PATH. $zf_current_url[0]. DS ."#";
               echo "<a href='{$zf_internal_link}' title='Dead Link'>{$zf_current_url[0]}". DS ."#</a> ";
                
            }else if(empty($zf_current_url[0])){
                
               $zf_internal_link = ZF_ROOT_PATH. DS ."#";
               $zf_current_url = explode("-", DEFAULT_CONTROLLER);
               echo "<a href='{$zf_internal_link}' title='Dead Link'>{$zf_current_url[0]}". DS ."#</a> ";
                
            }else{
                
               $zf_internal_link = ZF_ROOT_PATH. $zf_current_url[0] . DS .$zf_current_url[1] . DS .$zf_current_url[2] . DS . "#";
               echo "<a href='{$zf_internal_link}' title='Dead Link'>{$zf_current_url[0]} {$zf_current_url[1]}". DS ."#</a> ";
                
            }
            
            
        }else{
            
                if(is_array($zf_link_data) && !empty($zf_link_data)){
                    
                        if(($zf_link_data['name'] == '') || empty($zf_link_data['name'])){

                            /**
                             * This ensures that a link cannot miss a name
                             */
                            echo "<code>You cannot have a link without a name!!</code>";

                        }else{

                            if (($zf_link_data['parameter'] != "") || !empty($zf_link_data['parameter'])) {

                                /**
                                 * Check to see that a parameter can not be specified without a 
                                 * controller or an action.
                                 */
                                if(empty($zf_link_data['controller'])){

                                    /**
                                     * This ensures that a link with a parameter cannot miss
                                     * a controller.
                                     */
                                    echo "<code><strong>Internal Link Error:</strong> Missing Controller</code> ";

                                }else if(empty($zf_link_data['action'])){

                                    /**
                                     * This ensures that a link with a parameter cannot miss
                                     * an action.
                                     */
                                    echo "<code><strong>Internal Link Error:</strong> Missing Action</code>";

                                }else{

                                    /**
                                     * Here we check if URL encryption has been enabled. if yes, then we 
                                     * need to encrypt our URL's "$zf_parameter", if no, then we pass
                                     *  our raw URL.
                                     */

                                    if ($url_encryption_status['application_urlencrypt'] === "enabled") {

                                        /**
                                         * Ensure that the link is not shown if encryption is disables
                                         */
                                        if($url_encryption_status['application_encryption'] == "disabled"){

                                            /**
                                             * This ensures that you cannot encrypt your links
                                             * without enabling application encryption.
                                             */
                                            echo "<code>You must enable <strong>application encryption</strong> to be able to encrypt your link parameters.</code>";

                                        }else{

                                            $zf_internal_link = ZF_ROOT_PATH . $zf_link_data['controller'] . DS . $zf_link_data['action'] . DS . Zf_SecureData::zf_encode_data($zf_link_data['parameter']);
                                            echo "<a href='{$zf_internal_link}' title='{$zf_link_data['title']}' class='{$zf_link_data['style']}' id='{$zf_link_data['id']}' >{$zf_link_data['name']}</a>";

                                        }

                                    } else {

                                        $zf_internal_link = ZF_ROOT_PATH . $zf_link_data['controller'] . DS . $zf_link_data['action'] . DS . $zf_link_data['parameter'];
                                        echo "<a href='{$zf_internal_link}' title='{$zf_link_data['title']}' class='{$zf_link_data['style']}' id='{$zf_link_data['id']}' >{$zf_link_data['name']}</a>";

                                    }

                                }

                            } else if (($zf_link_data['action'] != "") || !empty($zf_link_data['action'])) {

                                /**
                                 * Checks to see that an action can not be specified without a 
                                 * controller.
                                 */
                                if(empty($zf_link_data['controller'])){

                                    /**
                                     * This ensures that a link with an action cannot miss a
                                     * controller.
                                     */
                                    echo "<code><strong>Internal Link Error:</strong> Missing Controller</code> ";

                                }else{

                                    $zf_internal_link = ZF_ROOT_PATH . $zf_link_data['controller'] . DS . $zf_link_data['action'];
                                    echo "<a href='{$zf_internal_link}' title='{$zf_link_data['title']}' class='{$zf_link_data['style']}' id='{$zf_link_data['id']}' >{$zf_link_data['name']}</a>";

                                }

                            }else if(($zf_link_data['controller'] != "") || !empty($zf_link_data['controller'])) {

                                $zf_internal_link = ZF_ROOT_PATH . $zf_link_data['controller'];
                                echo "<a href='{$zf_internal_link}' title='{$zf_link_data['title']}' class='{$zf_link_data['style']}' id='{$zf_link_data['id']}' >{$zf_link_data['name']}</a>";

                            } 

                       }
            
                }else{
                    
                    /**
                     * This will automatically direct a link with an empty array
                     * to the home page by default.
                     */
                    $zf_internal_link = ZF_ROOT_PATH;
                    echo "<a href='{$zf_internal_link}' title=' ".APPLICATION_NAME." '  >Home</a>";

                } 
        
        }
        
    }
    
    
    /**
     * -------------------------------------------------------------------------
     * THIS IS STATIC METHOD THAT IS RESPONSIBLE FOR GENERATING THE STANDARD
     * INTERNAL LINK THAT USES AN IMAGE AS A LINK.
     * -------------------------------------------------------------------------
     */
    public static function zf_image_link($zf_link_data = NULL){
        
        echo "This will help in generating image links";
        
    }
    
}

?>

