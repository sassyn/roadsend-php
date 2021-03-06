<?

// initialize the php-pdo extension by registering it and 
// running top level definition files
re_register_extension('pdo','php-pdo','1.0.0');

// PDO, PDOStatement, PDOException
require('pdo_class.php');

// individual db driver implementations
foreach (PDO::DB_DRIVER_LIST as $driver) {
   require($driver.'.php');
}

?>