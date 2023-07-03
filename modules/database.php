<?php
class database
 {
    protected $db;

    public function __construct()
 {
    if (empty($this->db)) {
        $this->db = new PDO( 'sqlite: database.db' );

    }else{
        die('db alredy open');
    }
 }
    public function creat_table()
 {
    $this->db->exec("CREATE TABLE users (
        id       INTEGER PRIMARY KEY,
        login    TEXT,
        password TEXT,
        [F.I.O]  INTEGER
    );");
 }
    public function set_users( $login, $password, $name )
 {
        $this->db->query( "INSERT INTO `users` (`login`, `password`, `F.I.O`) VALUES('$login', '$password', '$name')" );
    }

    public function get_logi_pass( $login )
 {
        $result = $this->db->query( "SELECT * FROM `users` WHERE `login` = '$login'" )->fetchAll( PDO::FETCH_ASSOC );
        foreach ( $result as $key ) {
            return [ $key[ 'login' ], $key[ 'password' ] ];

        }
    }
}