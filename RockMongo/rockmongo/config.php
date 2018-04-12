<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

$MONGO_HOST = getenv('MONGO_HOST');
$MONGO_PORT = getenv('MONGO_PORT');
$MONGO_HOST = "mongo";
$MONGO_PORT = 27017;
$MONGO_NAME = "$MONGO_HOST:$MONGO_PORT";

/**
* Configuration of MongoDB servers
* 
* @see more details at http://rockmongo.com/wiki/configuration?lang=en_us
*/
$MONGO["servers"][$i]["mongo_name"] = $MONGO_NAME;
$MONGO["servers"][$i]["mongo_host"] = $MONGO_HOST;
$MONGO["servers"][$i]["mongo_port"] = $MONGO_PORT;
$MONGO["servers"][$i]["mongo_timeout"] = 0;
$MONGO["servers"][$i]["mongo_auth"] = false;

$ADMIN_USER = 'admin';
$ADMIN_PASS = 'admin';

$ENV_ADMIN_UER=getenv('ADMIN_USER');
if(!empty($ENV_ADMIN_UER)){
    $ADMIN_USER=$ENV_ADMIN_UER;
    $ADMIN_PASS=getenv('ADMIN_PASS');
}

$MONGO["servers"][$i]["control_auth"] = true;//enable control users, works only if mongo_auth=false
$MONGO["servers"][$i]["control_users"][$ADMIN_USER] = $ADMIN_PASS;//one of control users ["USERNAME"]=PASSWORD, works only if mongo_auth=false

$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//whether hide the system collections

$i ++;

?>