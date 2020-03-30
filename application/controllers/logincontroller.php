<?php

    class logincontroller extends CI_Controller
    {
        function index()
        {
            $data['title'] = "MoveIt";
            $this->load->model('filmes_model');
            $data['lista'] = $this->filmes_model->getAllDisplayable();
            
            $this->load->view('ficha1',$data);

        }

        function registar()
        {
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'Nome Cliente',
                    'rules' => 'required|min_length[4]|max_length[30]' 
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'Email Cliente',
                        'rules' => 'required|min_length[4]|max_length[50]' 
                    ), 
                    array(
                        'field' => 'password',
                        'label' => 'Password Cliente',
                        'rules' => 'required|min_length[4]|max_length[40]' 
                    )
            );

            $this->load->library('form_validation');

            $this->form_validation->set_rules($config);

            if(!($this->form_validation->run()))
            {
                echo validation_errors();
                //$this->load->view('new_cliente');
                //this->load->view('home');
                
            }
            else
            {
                $this->load->model('clientes_model');

                $this->clientes_model->register();
            }
        }

        function entrar()
        {
            $log = 0; 
            $data['title'] = "MoveIt";
            
            $nome = $this->input->post('username1');
            $email = $this->input->post('email1');
            $pass = $this->input->post('password1');
            $password = md5($pass); 

            $data['nome'] = $nome;
            
            $query = $this->db->query('SELECT nome, email, password FROM t_users');

            foreach ($query->result_array() as $row)
            {
                $nome1 = $row['nome'];
                $email1 = $row['email'];
                $password1 = $row['password'];
                
                if((!strcmp( $nome, $nome1)) && (!strcmp($email, $email1)) && (!strcmp($password, $password1)))
                {
                    $log = 1;
    
                    $this->load->view('login',$data);
                }
            }  
            
            if(!($log))
                $this->load->view('error');
        }

        function recuperar_pass()
        {
            $log = 0; 

            $nome = $this->input->post('username2');
            $email = $this->input->post('email2');
            
            $pass = $this->input->post('password2');
            $password = md5($pass); 

            $pass = $this->input->post('password3');
            $password1 = md5($pass); 
            
            $query = $this->db->query('SELECT nome, email FROM t_users');

            foreach ($query->result_array() as $row)
            {
                $nome1 = $row['nome'];
                $email1 = $row['email'];
                
                if((!strcmp( $email, $email1)) && (!strcmp( $nome, $nome1)) && (!strcmp( $password, $password1)))
                {
                    $log = 1;
                    
                    $data = array(
                        'nome' => $nome,
                        'email' => $email,
                        'password' => $password
                    );

                    $this->db->where('nome', $nome);
                    $this->db->update('t_users',$data);

                    $this->load->view('gg');
                }
            }

            if(!$log)
                $this->load->view('error');
        }

        function logout()
        {
            $data['title'] = "MoveIt";
            $this->load->view('ficha1',$data);
        }

        function all()
        {
            $this->load->model('filmes_model');

            $data['lista'] = $this->filmes_model->getAllDisplayable(); 
            $this->load->view('mostra_filmes',$data);
        }

        function novo_filme()
        {
            $config = array(
                array(
                    'field' => 'titulo',
                    'label' => 'Título Filme',
                    'rules' => 'required' 
                    ),
                    array(
                        'field' => 'descricao',
                        'label' => 'Descrição Cliente',
                        'rules' => 'required' 
                    )
            );

            $this->load->library('form_validation');

            $this->form_validation->set_rules($config);

            if(!($this->form_validation->run()))
            {
                echo validation_errors();
                //$this->load->view('new_cliente');
                //this->load->view('home');
                
            }
            else
            {
                $this->load->model('novo_filme');

                $this->novo_filme->inserir_filme();
                
                $this->load->helper('url'); 
                redirect('logincontroller');
            }
        }

        function alterar_filme()
        {
            $config = array(
                array(
                    'field' => 'titulo',
                    'label' => 'Título Filme',
                    'rules' => 'required' 
                    ),
                    array(
                        'field' => 'descricao',
                        'label' => 'Descrição Cliente',
                        'rules' => 'required' 
                    )
            );

            $this->load->library('form_validation');

            $this->form_validation->set_rules($config);

            if(!($this->form_validation->run()))
            {
                echo validation_errors();
                //$this->load->view('new_cliente');
                //this->load->view('home');
                
            }
            else
            {
                $this->load->model('altera_filme');

                $this->altera_filme->alterar_filme();
                
                $this->load->helper('url'); 
                redirect('logincontroller');
            }
        }
    }
?>