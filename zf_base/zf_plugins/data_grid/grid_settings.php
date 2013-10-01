<?php
// we are assuming that database connection are already set
if($zf_table != NULL){
    $db_conf = array();
    $db_conf["type"]     = DATABASE_TYPE; // mysql,oci8(for oracle),mssql,postgres,sybase
    $db_conf["server"]   = HOST;
    $db_conf["user"]     = USERNAME;
    $db_conf["password"] = PASSWORD;
    $db_conf["database"] = DATABASE_NAME;

    // include and create object
    include PLUGINS_DIR."data_grid/lib/inc/jqgrid.php";
    $g = new jqgrid($db_conf);

    $g->set_options($zf_gridSettings);

    $g->set_actions($zf_tableActions);
    
    

    // set database table for CRUD operations
    $g->table = $zf_table;
    
    // pass the cooked columns to grid
    if($zf_tableColumns != NULL){
        $g->set_columns($zf_tableColumns);
    }
    
    // render grid and get html/js output
    $zf_generateTable = $g->render("list1");
}
?>