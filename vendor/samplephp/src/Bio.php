<?php
	namespace samplephp;

	class Bio extends Identity{

		public function __construct()
		{
			parent::__construct();
			// inherit the parents contructor

			
		}

		public function myFullName($fname,$lname){

			echo '<strong>My full name is: </strong>'.$this->myFirstName($fname).' '.$this->myLastName($lname);
		}
	}