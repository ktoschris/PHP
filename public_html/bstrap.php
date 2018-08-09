<?php
//session_start();

require 'Routing/Router.php';
require 'Routing/Request.php';
require 'database/Connection.php';
require 'database/QuerryBuilder.php';

//$tasks=fetchAllTasks($pdo);
return new QuerryBuilder(connection::make());