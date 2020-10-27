<?php
class db {
    private $host = 'localhost';
    private $user ='root';
    private $password = '';
    private $database = 'comida';

    public function connect_mysql() {
        $con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        mysqli_set_charset($con, 'utf8');

        if (mysqli_connect_errno()) {
            echo "Ocorreu um erro ao enviar seu quiz amiguinho!<br>".mysqli_connect_error();
        }
        return $con;
    }
}
//host =