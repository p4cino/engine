<?php
class Person extends DataBase
{
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $role;
    private $db;

    public function __construct($id)
    {
        if (isset($id) && is_numeric($id)) {
            $this->db = DataBase::getDataBase();

            $zap = $this->db->prepare("SELECT * FROM person WHERE id = :id");
            $zap->bindValue(":id", $id, PDO::PARAM_INT);
            $zap->execute();
            $tab = $zap->fetch(PDO::FETCH_ASSOC);
            $zap->closeCursor();

            $this->id = $id;
            $this->email = $tab['email'];
            $this->password = $tab['password'];
            $this->name = $tab['name'];
            $this->surname = $tab['surname'];
            $this->role = $tab['role'];
        }
        else {
            $this->role = 0;
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $query = $this->db->prepare("UPDATE person SET email = :var WHERE id = ".$this->role);
        $query->bindValue(":var", $email, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $query = $this->db->prepare("UPDATE person SET role = :var WHERE id = ".$this->role);
        $query->bindValue(":var", sha1($password), PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        $query = $this->db->prepare("UPDATE person SET name = :var WHERE id = ".$this->role);
        $query->bindValue(":var", $name, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        $query = $this->db->prepare("UPDATE person SET surname = :var WHERE id = ".$this->role);
        $query->bindValue(":var", $surname, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    }

    /**
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole($role)
    {
        $this->role = $role;
        $query = $this->db->prepare("UPDATE person SET role = :var WHERE id = ".$this->role);
        $query->bindValue(":var", $role, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    }
}

