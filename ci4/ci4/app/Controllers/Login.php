<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MitgliederModel;

class Login extends BaseController
{


    public function index() {
        echo view('templates/header');
        return view('todolist/login');
    }

    public function logout() {
        $this->session->destroy();
        return redirect()->to(base_url('Login/index'));
    }
    public function regist() {
        echo view('templates/header');
        echo view('todolist/registration');
    }

    public function submit() {

        $mymodel = new MitgliederModel();
        $mails = $mymodel->getMails();

        $inside = False;

        foreach ($mails as $item) {
            foreach($item as $i) {
                if($i == $_POST['email']) {
                    echo a;
                    $inside = True;
                }
            }
        }

        if($inside) {
            $user = $mymodel->getUserByMail($_POST['email']);

            if(password_verify($_POST['password'], $user['password'])) {
                $this->session->set('id', $user['id']);
                $this->session->set('username', $user['username']);
                $this->session->set('email', $user['email']);
                $this->session->set('login', True);
                $this->session->set('projectid', 0);
                return redirect()->to(base_url('Start/index'), NULL, 'refresh');
            }
            else {
                return redirect()->to(base_url('Login/index'), NULL, 'refresh');
            }
        }
        else {
            return redirect()->to(base_url('Login/index'), NULL, 'refresh');
        }

    }

    public function create() {
        if(isset($_POST['btnRegist'])) {
            $mymodel = new MitgliederModel();
            $mymodel->createPerson();
            return redirect()->to(base_url('Login/index'), NULL, 'refresh');
        } else {
            return redirect()->to(base_url('Login/index'), NULL, 'refresh');
        }
    }
}