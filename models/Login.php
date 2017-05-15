<?php

class Login extends DataBase
{
    private $db;
    private $email;
    private $password;

    /**
     * Login constructor.
     * @param $email
     * @param $password
     */
    public function __construct($email = null, $password = null)
    {
        $this->db = parent::getDataBase();
        $this->email= $email;
        $this->password = $password;
    }

    /**
     * @return PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function checkUser()
    {
        $query = $this->getDb()->prepare("SELECT id FROM person WHERE email=:email AND password=:password");
        $query->bindValue(":email", $this->getEmail(), PDO::PARAM_STR);
        $query->bindValue(":password", sha1($this->getPassword()), PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetchAll(PDO::FETCH_COLUMN, 0);
        $ile = count($user);
        if ($ile == 1) {
            $key = sha1("" . $_SERVER['HTTP_USER_AGENT'] . "" . $user[0] . "solllee");
            $_SESSION['salt'] = $key;
            $_SESSION['person'] = $user[0];
            return true;
        }
        return false;
    }


}