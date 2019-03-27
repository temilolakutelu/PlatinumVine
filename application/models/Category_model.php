<?php

class Category_Model extends CI_Model
{

    public function get_categories()
    {
        return $this->db->get("category")->result();
    }

  
}

