<?php
    class filmes_model extends CI_Model
    {
        function getAllDisplayable()
        {
            $this->db->select('id,descricao,foto,filme,titulo');
            $result = $this->db->get('filmes');

            return $result->result();
        }
    }
?>