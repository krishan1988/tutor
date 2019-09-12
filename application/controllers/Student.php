<?php 

class Student extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // loading the users model
        $this->load->model('model_users');
        $this->load->model('model_student');

        // loading the form validation library
        $this->load->library('form_validation');
        $this->load->library('session');

    }
	public function index($page = 'home')
	{

        $data['title'] = "";

        $this->StudentIsNotLoggedIn();

        $this->load->view('site_template/header', $data);
        $this->load->view("studentLogin", $data);
        $this->load->view('site_template/footer', $data);
	}

    public function login()
    {

        $validator = array('success' => false, 'messages' => array());

        $validate_data = array(
            array(
                'field' => 'userEmail',
                'label' => 'userEmail',
                'rules' => 'required|callback_validate_username'
            ),
            array(
                'field' => 'userPassword',
                'label' => 'userPassword',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($validate_data);
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run() === true) {
            $username = $this->input->post('userEmail');
            $password = md5($this->input->post('userPassword'));

            $login = $this->model_student->Studentlogin($username, $password);

            if($login) {


                $user_data = array(
                    'student_id' => $login,
                    'logged_in' => true,
                    'member_type' => "student"
                );

                $this->session->set_userdata($user_data);

                $validator['success'] = true;
                $validator['messages'] = "admin/dashboard";
                $this->StudentIsNotLoggedIn();
                $data['title'] = "Student Dashboard";
                $this->load->view('site_template/header', $data);
                $this->load->view("studentDashBoard", $data);
                $this->load->view('site_template/footer', $data);
               // exit();
            }
            else {
                $validator['success'] = false;
                $validator['messages'] = "Incorrect username/password combination";
            } // /else

        }
        else {
            redirect('', 'refresh');
        } // /else


    }

    public function dashboard(){
        $this->StudentIsNotLoggedIn();
        $data['title'] = "Student Dashboard";
        $this->load->view('site_template/header', $data);
        $this->load->view("studentDashBoard", $data);
        $this->load->view('site_template/footer', $data);
    }


    public function validate_username()
    {
        $validate = $this->model_student->validate_current_student_password($this->input->post('userPassword'),$this->input->post('userEmail'));

        if($validate === true) {
            return true;
        }
        else {
            $this->form_validation->set_message('validate_username', 'The {field} does not exists');
            return false;
        } // /else
    } // /validate username function

    public function registerForm(){

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('contact', 'Contact Number', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if(!$this->form_validation->run()) {
                $this->session->set_flashdata('msg_alert', 'Please fill the all data');
                redirect( base_url('student/registerForm' ));
            }else{
                $studentData["firstName"] = $this->input->post("fname");
                $studentData["lastName"] = $this->input->post("lname");
                $studentData["dateOfBirth"] = $this->input->post("dob");
                $studentData["Contact"] = $this->input->post("contact");
                $studentData["Password"] = $this->input->post("password");
                $studentData["Sid"] = $this->session->userdata("student_id");
                $update = $this->model_student->updateStudent($studentData);
                if ($update == true){
                    redirect( base_url('student/home' ));
                }else{
                    $this->session->set_flashdata('msg_alert', 'Please Try again');
                    redirect( base_url('student/registerForm' ));
                }

            }
        }else{
            $this->StudentIsNotLoggedIn();
            $data['title'] = "Student Registraion";
            $this->load->view('site_template/header', $data);
            $this->load->view("studentRegistration", $data);
            $this->load->view('site_template/footer', $data);
        }
    }

    public function home(){
        $this->StudentIsNotLoggedIn();
        $data['title'] = "Student Home";
        $this->load->view('site_template/header', $data);
        $this->load->view("studentHome", $data);
        $this->load->view('site_template/footer', $data);
    }
    
}