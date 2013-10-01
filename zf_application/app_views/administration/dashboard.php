<?php
    $modelFolder = "administration"; $modelFile = "index";
    $zf_controller->Zf_loadModel($modelFolder, $modelFile);
    
    echo "This is the dashboard view, executed by dashboard action of the administration controller";
    
    $zf_controller->zf_targetModel->buildQueries();
    
    echo "<hr>";
    echo "<h3>Widget Loading Section</h3>";
    
    
    /**
     * This how a widget is called into a view.
     * That's by passing a the widget folder name and the target widget file.
     * The third parameter can be data being passed into the widget.
     */
    Zf_ApplicationWidgets::zf_load_widget("menus", "mainmenu.php", "products");
    echo "<hr>";
    
    
    echo "<h3>Data Encryption/Decryption Section</h3>";
    
    /**
     * This is the standard way of encrypting and decrypting data within a View,
     * a Model or a Controller in Zilas PHP Framework.
     * 
     */
    
    $zf_data_to_be_encrypted = "Zilas Framework 2013";
    
    echo "<strong>Original Data:</strong> ".$zf_data_to_be_encrypted."<br>"; 
    
    $zf_encrypetd_data = Zf_SecureData::zf_encode_data($zf_data_to_be_encrypted);
    echo "<strong>Encrypted Data:</strong> ". $zf_encrypetd_data."<br>";
    
    $zf_decrypetd_data = Zf_SecureData::zf_decode_data($zf_encrypetd_data);
    echo "<strong>Decrypted Data:</strong> ". $zf_decrypetd_data;
    
    
    echo "<hr>";
    echo "<h3>Link Generation Section</h3>";
    
    /**
     * This is the standard way of generating an internal link within a View,
     * a Model or a Controller in Zilas PHP Framework.
     * 
     * This method expects 1 parameter which is an array as follows:
     * 1st element = Name of the link i.e what is seen on browser
     * 2nd element = The target controller for the link
     * 3rd element = The target action for the link
     * 4th element = The target parameter feed for the link 
     * 5th element = The title of the link if any is provided
     * 6th element = The CSS style that affects the internal link if any 
     * 7th element = id selector of the internal link if any.
     * 
     * NB: If the array is completely empty, then a dead link is automatically 
     * generated depending on the URL elements present in the current link.
     */
    $zf_internal_link = array(
        'name'       => 'Gilo',
        'controller' => 'Administration',
        'action'     => 'index',
        'parameter'  => 'Avians',
        'title'      => 'Gilos page',
        'style'      => 'active_link',
        'id'         => 'Administration'
        
    );
    
    echo "<strong>Internal Link: </strong>";
    Zf_GenerateLinks::zf_internal_link($zf_internal_link);
    echo "<br><br>";
    
    /**
     * This is the standard way of generating an external link within a View,
     * a Model or a Controller in Zilas PHP Framework.
     * 
     * This method expects 1 parameter which is an array as follows:
     * 1st element = Name of the link i.e what is seen on browser
     * 2nd element = The link to the target external site
     * 3rd element = The title of the external link
     * 4th element = The target window of opening the external link
     * 5th element = The CSS style that affects the external link if any 
     * 6th element = id selector of the external link if any.
     * 
     * NB: If the array is completely empty, then an error is generated of 
     * an invalid external link.
     */
    $zf_external_link = array(
        'name'   => 'Follow Us on Facebook',
        'link'   => 'http://www.facebook.com', //Always ensure that the external link starts with http:// or https://
        'title'  => 'My Facebook',
        'target' => '_blank',
        'style'  => '',
        'id'     => ''
    );
    
    echo "<strong>External Link: </strong>";
    Zf_GenerateLinks::zf_external_link($zf_external_link);
    
    echo "<br><hr>";
    echo "<h3>Breadcrumbs Generation Section</h3>";
    
    /**
     * This is the standard way of generating breadcrumbs in zilas framework
     */
    Zf_BreadCrumbs::zf_load_breadcrumbs();
    
    
    
    echo "<br><hr>";
    echo "<h3>Breadcrumbs Generation Section</h3>";
    
    /**
     * This is the standard way of generating SEO in zilas framework
     */
    Zf_GenerateSEO::zf_load_seo();

?>
