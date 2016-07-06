<?php
    define( "DB_SERVER",   getenv('OPENSHIFT_MYSQL_DB_HOST').":".getenv('OPENSHIFT_MYSQL_DB_PORT'));
    define( "DB_USER",      getenv('OPENSHIFT_MYSQL_DB_USERNAME')); 
    define( "DB_PASSWORD",  getenv('OPENSHIFT_MYSQL_DB_PASSWORD')); 
    define( "DB_DATABASE",  "torneo" ); 

    echo DB_SERVER;


 ?>