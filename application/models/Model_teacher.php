<?php 

class Model_Teacher extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/*
	*------------------------------------
	* inserts the teachers information
	* into the database 
	*------------------------------------
	*/
	public function create($img_url)
	{
		if($img_url == '') {
			$img_url = 'assets/images/default/default_avatar.png';
		} 

		$insert_data = array(
			'register_date' => $this->input->post('registerDate'),
			'fname' 		=> $this->input->post('fname'),
			'lname'			=> $this->input->post('lname'),
			'image'			=> $img_url,
			'date_of_birth' => $this->input->post('dob'),
			'age'			=> $this->input->post('age'),
			'contact'		=> $this->input->post('contact'),
			'email'			=> $this->input->post('email'),
			'address'		=> $this->input->post('address'),
			'city'			=> $this->input->post('city'),
			'country'		=> $this->input->post('country'),
			'job_type'		=> $this->input->post('jobType')
		);

		$status = $this->db->insert('teacher', $insert_data);		
		return ($status == true ? true : false);
	}

	/*
	*------------------------------------
	* retrieves teacher information 
	*------------------------------------
	*/
	public function fetchTeacherData($teacherId = null)	
	{
		if($teacherId) {
			$sql = "SELECT * FROM teacher WHERE teacher_id = ?";
			$query = $this->db->query($sql, array($teacherId));
			$result = $query->row_array();
			return $result;
		}

		$sql = "SELECT * FROM teacher";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	/*
	*------------------------------------
	* updates teacher information
	*------------------------------------
	*/
	public function updateInfo($teacherId = null)
	{
		if($teacherId) {
			$update_data = array(
				'register_date' 	=> $this->input->post('editRegisterDate'),
				'fname' 			=> $this->input->post('editFname'),
				'lname' 			=> $this->input->post('editLname'),
				'date_of_birth'     => $this->input->post('editDob'),
				'age'				=> $this->input->post('editAge'),
				'contact'			=> $this->input->post('editContact'),
				'email'				=> $this->input->post('editEmail'),
				'address'			=> $this->input->post('editAddress'),
				'city'				=> $this->input->post('editCity'),	
				'country'			=> $this->input->post('editCountry'),
				'job_type'			=> $this->input->post('editJobType')
			);

			$this->db->where('teacher_id', $teacherId);
			$query = $this->db->update('teacher', $update_data);
			
			return ($query === true ? true : false);
		}			
	}

	/*
	*------------------------------------
	* updates teacher information
	*------------------------------------
	*/
	public function updatePhoto($teacherId = null, $imageUrl = null)
	{
		if($teacherId && $imageUrl) {
			$update_data = array(
				'image' 	=> $imageUrl
			);

			$this->db->where('teacher_id', $teacherId);
			$query = $this->db->update('teacher', $update_data);
			
			return ($query === true ? true : false);
		}			
	}

	/*
	*------------------------------------
	* removes teacher information 
	*------------------------------------
	*/
	public function remove($teacherId = null)
	{
		if($teacherId) {
			$this->db->where('teacher_id', $teacherId);
			$result = $this->db->delete('teacher');
			return ($result === true ? true: false); 
		} // /if
	}

	/*
	*------------------------------------
	* count total teacher information 
	*------------------------------------
	*/	
	public function countTotalTeacher() 
	{
		$sql = "SELECT * FROM teacher";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

    public function updateTeacher($teacherData = array())
    {
        if(!empty($teacherData)) {
            $update_data = array(
                //'class_id' 		=> $this->input->post('editClassName'),
                // 'section_id'	=> $this->input->post('editSectionName'),
                'fname'			=>  isset($teacherData["firstName"]) ?  $teacherData["firstName"] : "",
                'lname' 		=>  isset($teacherData["lastName"]) ?  $teacherData["lastName"] : "",
                //        'age'			=> $this->input->post('editAge'),
                'date_of_birth'			=>  isset($teacherData["dateOfBirth"]) ?  $teacherData["dateOfBirth"] : "",
                'contact'		=> isset($teacherData["Contact"]) ?  $teacherData["Contact"] : "",
                'password'		=> isset($teacherData["Password"]) ?  md5($teacherData["Password"]) : "",
                //'email'			=> $this->input->post('editEmail'),
                // 'address'		=> $this->input->post('editAddress'),
                //  'city'			=> $this->input->post('editCity'),
                // 'country'   	=> $this->input->post('editCountry')
            );

            $this->db->where('teacher_id', $teacherData["Tid"]);
            $query = $this->db->update('teacher', $update_data);

            return ($query === true ? true : false);
        }else{
            return false;
        }
    }

    public function creatTeacher($teacherData = array())
    {

        if(!empty($teacherData)) {
            $update_data = array(
                //'class_id' 		=> $this->input->post('editClassName'),
                // 'section_id'	=> $this->input->post('editSectionName'),
                'fname'			=>  isset($teacherData["firstName"]) ?  $teacherData["firstName"] : "",
                'lname' 		=>  isset($teacherData["lastName"]) ?  $teacherData["lastName"] : "",
                //        'age'			=> $this->input->post('editAge'),
                'date_of_birth'			=>  isset($teacherData["dateOfBirth"]) ?  $teacherData["dateOfBirth"] : "",
                'contact'		=> isset($teacherData["Contact"]) ?  $teacherData["Contact"] : "",
                'password'		=> isset($teacherData["Password"]) ?  $teacherData["Password"] : "",
                'email'			=> isset($teacherData["editEmail"]) ?  $teacherData["editEmail"] : "",
                // 'address'		=> $this->input->post('editAddress'),
                //  'city'			=> $this->input->post('editCity'),
                // 'country'   	=> $this->input->post('editCountry')
            );

            $query = $this->db->insert('teacher', $update_data);

            return $this->db->insert_id();
        }else{
            return 0;
        }
    }

    public function fetchTeacherDataFromEmail($email = null)
    {
        if($email) {
            $sql = "SELECT * FROM teacher WHERE email = ?";
            $query = $this->db->query($sql, array($email));
            $result = $query->row_array();
            return $result;
        }

        return array();
    }
}