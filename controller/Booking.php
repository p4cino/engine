<?php

Class Booking extends DataBase
{
    private $db;
    private $person;
    private $cinema;
    private $movie;
    private $data;
    private $hour;

    /**
     * Booking constructor.
     */
    public function __construct()
    {
        $this->db = DataBase::getDataBase();
//        $this->person = $person;
//        $this->cinema = $cinema;
//        $this->movie = $movie;
//        $this->data = $data;
//        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getCinema()
    {
        return $this->cinema;
    }

    /**
     * @param mixed $cinema
     */
    public function setCinema($cinema)
    {
        $this->cinema = $cinema;
    }

    /**
     * @return mixed
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param mixed $movie
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    public function getCinemaList()
    {
        $query = $this->db->prepare("SELECT * FROM cinema");
        $query->execute();
        $list = $query->fetchAll();
        if ($query->rowCount() > 0) {
            return $list;
        } else {
            return false;
        }
        $query->closeCursor();
    }

    public function getCinemaInformation($id)
    {
        $query = $this->db->prepare("SELECT * FROM cinema WHERE id = :var ");
        $query->bindValue(":var", $id, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    }

    public function checkReservation()
    {
        //sprawdzanie statusów
    }

    public function doReservation()
    {
        //dokonanie rezerwacji
    }

    public function cancelReservation()
    {
        //anulowanie rezerwacji
    }

}