<?php
class Movie extends DataBase {
    private $db;
    private $id, $title, $director, $duration_min, $description, $cast, $distributor, $music, $trailer;

    /**
     * Movie constructor.
     * @param $id
     */
    public function __construct($id)
    {
        if (isset($id) && is_numeric($id)) {
            $this->db = DataBase::getDataBase();

            $zap = $this->db->prepare("SELECT * FROM movie WHERE id = :id");
            $zap->bindValue(":id", $id, PDO::PARAM_INT);
            $zap->execute();
            $tab = $zap->fetch(PDO::FETCH_ASSOC);
            $zap->closeCursor();

            $this->description = $tab['description'];

            $this->id = $id;
            $this->title = $tab['title'];
            $this->director = $tab['director'];
            $this->duration_min = $tab['duration_min'];
            $this->description = $tab['description'];
            $this->cast = $tab['cast'];
            $this->distributor = $tab['distributor'];
            $this->music = $tab['music'];
            $this->trailer = $tab['trailer'];
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return mixed
     */
    public function getDurationMin()
    {
        return $this->duration_min;
    }

    /**
     * @param mixed $duration_min
     */
    public function setDurationMin($duration_min)
    {
        $this->duration_min = $duration_min;
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

    /**
     * @return mixed
     */
    public function getCast()
    {
        return $this->cast;
    }

    /**
     * @param mixed $cast
     */
    public function setCast($cast)
    {
        $this->cast = $cast;
    }

    /**
     * @return mixed
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param mixed $distributor
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
    }

    /**
     * @return mixed
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * @param mixed $music
     */
    public function setMusic($music)
    {
        $this->music = $music;
    }

    /**
     * @return mixed
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param mixed $trailer
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
    }


}