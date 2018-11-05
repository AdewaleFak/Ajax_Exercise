<?php
/**
 * Created by PhpStorm.
 * User: ilyagz
 * Date: 2018-11-01
 * Time: 12:03
 */

class office
{
    public static function getAllOffices($db){
        $sql = "SELECT * FROM offices";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public static function getCountry($db){
        $query = "SELECT DISTINCT country FROM offices";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public static function getOfficesInCountry($db, $country){
        $query = "SELECT * FROM offices WHERE country = :country";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':country', $country, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function getOfficeByCode($db, $officeCode){
        $query = "SELECT * FROM offices WHERE officeCode= :officeCode";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':officeCode', $officeCode, PDO::PARAM_INT);
        $pdostm->execute();
        $s = $pdostm->fetch(PDO::FETCH_OBJ);
        return $s;
    }

}