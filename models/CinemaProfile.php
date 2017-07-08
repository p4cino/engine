<?php
class CinemaProfile extends DataBase {
    private $db;
    private $id;

    /**
     * CinemaProfile constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->db = DataBase::getDataBase();
        $this->id = $id;
    }

    public function getAllMovies(){
        $query = $this->db->prepare("SELECT movie_id FROM screening WHERE cinema_id = :id GROUP BY movie_id");
        $query->bindValue(":id", $this->id, PDO::PARAM_INT);
        $query->execute();
        $list = $query->fetchAll();
        if ($query->rowCount() > 0) {
            foreach ($list as $index) {
                $list = new Movie($index['movie_id']);
            }
            return $list;
        } else {
            return false;
        }
        $query->closeCursor();
    }

}