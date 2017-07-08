<?php
Class Cinema extends DataBase {
    private $db;
    private $id;
    private $name;
    private $map;
    private $description;

    /**
     * Cinema constructor.
     * @param $id
     */
    public function __construct($id)
    {
        if (isset($id) && is_numeric($id)) {
            $this->db = DataBase::getDataBase();

            $zap = $this->db->prepare("SELECT * FROM cinema WHERE id = :id");
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
    }

    /**
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param mixed $map
     */
    public function setMap($map)
    {
        $this->map = $map;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFilmList($limit, $sort) {
//        $query = $this->db->prepare("SELECT * FROM movie WHERE movie.id = ");
//        $query->execute();
//        $list = $query->fetchAll();
//        if ($query->rowCount() > 0) {
//            return $list;
//        } else {
//            return false;
//        }
//        $query->closeCursor();
    }

}