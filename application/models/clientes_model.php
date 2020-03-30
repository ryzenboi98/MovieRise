<?php
    class clientes_model extends CI_Model
    {
        function register()
        {
            $log = 0;

            $data['nome'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            $password = $this->input->post('password');
            $data['password'] = md5($password);
            $data['data_registo'] = date('Y-m-d');
            $data['atualizacao'] = '1';


            $query = $this->db->query('SELECT nome, email FROM t_users');

            foreach ($query->result_array() as $row)
            {
                $nome = $row['nome'];
                $email = $row['email'];

                if((!strcmp($data['nome'],$nome)) || (!strcmp($data['email'],$email)))
                {
                    $log = 1;
                    $this->load->view('error_sign');
                }
            }

            if(!$log)
            {
                $this->db->insert('t_users',$data);

                $this->load->view('gg');
            }

        }
    }
?>