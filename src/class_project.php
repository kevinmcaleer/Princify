<?php
// Project Class

class Project
{
	// properties
	public $id;
	public $name;
	public $start_date;
	public $finish_date;
	public $budget;
	public $status;
	public $rag;
	
	// methods
	public function create()
	{
		require 'connection.php';
		$query = "INSERT INTO contact (title, firstname, middlename, surname, dob, gender) VALUES ('$this->title','$this->firstname', '$this->middlename', '$this->surname', '$this->dob', '$this->gender')";
		//echo $query;
		$result = pg_query($connection, $query) or die("There was a problem running the create query");
		pg_close($connection);
	}
	public function show()
	{
		echo "<h1>Projects</h1> <BR />";
		echo "Project ID: " . $this->id . "<BR />";
		echo "Project Name: " $this->.name  . "<BR />";
		echo "Project start date: " $this->.start_date  . "<BR />";
		echo "Project finish date: " $this->.finish_date  . "<BR />";
		echo "Project budget: " . $this->budget . "<BR / >";
		echo "Project status" . $this->budget . "</BR />";
		echo "Project RAG" . $this->rag . "</BR />";
	}
}