<?php
class Category extends Model{

    function getCategory($catID){

        $sql =  'SELECT categoryID, name from categories WHERE categoryID = ?';

        $results = $this->db->getrow($sql, array($catID));

        $category = $results;

        return $category;

    }

    public function getAllCategories($limit = 0){

        if($limit > 0){

            $numcats = ' LIMIT '.$limit;
        }

        $sql =  'SELECT categoryID, name FROM categories '.$numcats;

        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $categories[] = $row;
        }

        return $categories;

    }

}
