<?php
	/**
	* 
		La clase Formulario contiene los atributos que tiene el formulario html y los métodos para llenar dichos atributos y los métodos que retornan los valores
	*/
	class Formulario 
	{
		//atributos del formulario
		public $nameErr, $emailErr, $genderErr, $websiteErr;
		public $name, $email, $gender, $comment, $website;
		
		//constructor que inicializa los valores de las variables
		function __construct()
		{
			$this->nameErr = $this->emailErr = $this->genderErr = $this->websiteErr = "";
			$this->name = $this->email = $this->gender = $this->comment = $this->website = "";
		}

		private function test_input($data) {
    		$data = trim($data);
    		$data = stripslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
		}

		//obtiene el valor del nombre
		public function setName($parameter_name){
			if(empty($parameter_name)){
				$this->nameErr = "Name is required";
			}else{
				$this->name = $this->test_input($parameter_name);
        		// check if name only contains letters and whitespace
        		if (!preg_match("/^[a-zA-Z ]*$/",$this->name)) {
            		$this->nameErr = "Only letters and white space allowed";
        		}
			}
		}

		//retorna el valor de name
		public function getName(){
			return $this->name;
		}
		//retorna el valor de nameErr
		public function getNameErr(){
			return $this->nameErr;
		}

		//obtiene el valor de email
		public function setEmail($parameter_email){
			if (empty($parameter_email)) {
        		$this->emailErr = "Email is required";
    		} else {
        		$this->email = $this->test_input($parameter_email);
        		// check if e-mail address is well-formed
        		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            		$this->emailErr = "Invalid email format";
        		}
    		}
		}
		//retorna el valor de email
		public function getEmail(){
			return $this->email;
		}
		//retorna el valor de emailErr
		public function getEmailErr(){
			return $this->emailErr;
		}

		//obtiene el valor de website
		public function setWebsite($parameter_website){
			if (empty($parameter_website)) {
        		$this->website = "";
    		} else {
        		$this->website = $this->test_input($parameter_website);
        		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$this->website)) {
            		$this->websiteErr = "Invalid URL";
        		}
    		}
		}
		//retorna el valor de website
		public function getWebsite(){
			return $this->website;
		}
		//retorna el valor de websiteErr
		public function getWebsiteErr(){
			return $this->websiteErr;
		}

		//obtiene el valor de comment
		public function setComment($parameter_comment){
			if (empty($parameter_comment)) {
        		$this->comment = "";
    		} else {
        		$this->comment = $this->test_input($parameter_comment);
    		}
		}
		//retorna el valor de comment
		public function getComment(){
			return $this->comment;
		}

		//obtiene el valor de gender
		public function setGender($parameter_gender){
			if (empty($parameter_gender)) {
        		$this->genderErr = "Gender is required";
    		} else {
        		$this->gender = $this->test_input($parameter_gender);
    		}
		}
		//retorna el valor de gender
		public function getGender(){
			return $this->gender;
		}
		//retorna el valor de genderErr
		public function getGenderErr(){
			return $this->genderErr;
		}
	}
?>	