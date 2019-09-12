<?php 

class Site extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_student');
        $this->load->library('session');


    }
	public function index($page = 'home')
	{

        require_once 'vendor/autoload.php';

        $g_client = new Google_Client();
        $g_client->setClientId(GOOGLE_CLIENT_ID);
        $g_client->setClientSecret(GOOGLE_CLIENT_SECRET);
        $g_client->setRedirectUri(GOOGLE_REDIRECT_URL);
        $g_client->setScopes("email");


//Step 2 : Create the url
        $auth_url = $g_client->createAuthUrl();

        $code = isset($_GET['code']) ? $_GET['code'] : NULL;


        if(isset($code)) {
            try {
                $token = $g_client->fetchAccessTokenWithAuthCode($code);
                $g_client->setAccessToken($token);
            }catch (Exception $e){
                //echo $e->getMessage();
            }
            try {
                $pay_load = $g_client->verifyIdToken();
            }catch (Exception $e) {
              //  echo $e->getMessage();
            }
        } else{
            $pay_load = null;
        }
        if(isset($pay_load)){

            if($pay_load["email_verified"]) {
                $login = $this->studentLogin($pay_load["email"]);

                if($login == true){
                    redirect("site/userSelection");
                }
            }

        }


        if (!file_exists(APPPATH.'views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['googleLogin'] = $auth_url; // Capitalize the first letter


            $this->load->view('site_template/header', $data);
            $this->load->view($page, $data);    
            $this->load->view('site_template/footer', $data);    

	}

	public function fbLogin(){
      //  1054852571311469
    }

	public function userSelection(){

        $this->StudentIsNotLoggedIn();

        $data['title'] = "User Selections";
        $data["studentRegistrationLink"] = base_url()."student/registerForm";
        $data["teacherRegistrationLink"] = base_url()."teacher/registerForm";
        $this->load->view('site_template/header', $data);
        $this->load->view("userSelection", $data);
        $this->load->view('site_template/footer', $data);
    }

    private function studentLogin($email)
    {
                $login = $this->model_student->checkStudent($email);

                if ($login) {
                    $this->load->library('session');
                    $user_data = array(
                        'student_id' => $login,
                        'logged_in' => true,
                        'member_type' => "student"
                    );

                   $val =  $this->session->set_userdata($user_data);


                   return true;
                    // exit();
                } else {
                    $this->load->library('session');
                    $studentData["email"] = $email;
                    $studentData = $this->model_student->createTempStudent($studentData);
                    $loginData = $this->model_student->checkStudent($email);
                    if ($loginData) {


                        $user_dataList = array(
                            'student_id' => $loginData,
                            'logged_in' => true,
                            'member_type' => "student"
                        );

                        $val =  $this->session->set_userdata($user_dataList);


                        return true;
                        // exit();
                    }

                } // /else
        return false;
        }
    
}