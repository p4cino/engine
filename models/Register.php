<?php

class Register extends DataBase
{
    private $db;
    private $email;
    private $password1, $password2;
    private $name, $surname;

    /**
     * Register constructor.
     * @param $email
     * @param $password1
     * @param $password2
     * @param $name
     * @param $surname
     */
    public function __construct($email, $password1, $password2, $name, $surname)
    {
        $this->db = parent::getDataBase();
        $this->email = $email;
        $this->password1 = $password1;
        $this->password2 = $password2;
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return trim($this->email);
    }

    /**
     * @return mixed
     */
    public function getPassword1()
    {
        return trim($this->password1);
    }

    /**
     * @return mixed
     */
    public function getPassword2()
    {
        return trim($this->password2);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return trim($this->name);
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return trim($this->surname);
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        return $this->db;
    }

    public function registerUser()
    {
        $zap = $this->getDb()->prepare("SELECT email FROM person WHERE email=:email");
        $zap->bindValue(":email", $this->getEmail(), PDO::PARAM_STR);
        $zap->execute();
        $user = $zap->fetchAll(PDO::FETCH_COLUMN, 0);
        if (count($user) > 0) {
            return false;
        }

        $zap = $this->getDb()->prepare("INSERT INTO person (email, name, surname, password) VALUES (:email, :name, :surname, :password)");
        $zap->bindValue(":email", $this->getEmail(), PDO::PARAM_STR);
        $zap->bindValue(":name", $this->getName(), PDO::PARAM_STR);
        $zap->bindValue(":surname", $this->getSurname(), PDO::PARAM_STR);
        $zap->bindValue(":password", sha1($this->getPassword1()), PDO::PARAM_STR);
        $zap->execute();

        //id ostatnio dodanego rekordu do bazy z danego zapytania
        //$id_uzytkownika = $db->lastInsertId();
        return true;

    }


}