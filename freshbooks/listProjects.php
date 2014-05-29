<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Project.php";

//new Client object
$project = new FreshBooks_Project();

//listing function definition void   listing  ( &$rows,  &$resultInfo, [ $page = 1], [ $perPage = 25], [ $filters = array()])
//get projects, 25 per page, page 1, where project belong to client id 3
$project->listing($rows,$resultInfo,1,25,array('client_id'=>0));

//dump result data
print_r($rows);
print_r($resultInfo);