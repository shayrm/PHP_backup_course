<?php
session_start();

class Task
{
	private $name;
	private $description;
	function __construct($nameVal,$descriptionVal)
	{
		$this->setName($nameVal);
		$this->setDescription($descriptionVal);
	}
	function getName()
	{
		return $this->name;
	}
	function getDescription()
	{
		return $this->description;
	}
	function setName($str)
	{
		if($str!="")
		{
			$this->name = $str;
		}
	}
	function setDescription($str)
	{
		if($str!="")
		{
			$this->description = $str;
		}
	}
}



?>


<form action="create_task.php" method="get">
<br>task name: <input type="text" name="taskname" >
<br>task description: <input type="text" name="description" >
<br><input type="submit" >
</form>

<?php 
if(isset($_GET['taskname']) && isset($_GET['description']))
{
	//values were received
	
	//validate the received values
	//...
	$task_name_clean = $_GET['taskname'];
	$task_description_clean = $_GET['description'];
	
	//creating a new object that describes the new task
	$ob = new Task($task_name_clean,$task_description_clean);
	
	//checking if $_SESSION already includes the array of tasks
	//and if not.. adding one
	if(!array_key_exists('tasks',$_SESSION))
	{
		//adding the tasks key to the $_SESSION array
		$_SESSION['tasks'] = array();
	}
	
	//adding the task to the tasks array
	$_SESSION['tasks'][$task_name_clean] = $ob;
}



//printing out to the screen all tasks
echo "<table border='1'>";
echo "<tr><th>task name</th><th>task details</th></tr>";
$vec = $_SESSION['tasks'];
foreach($vec as $v)
{
	echo "<tr><td>".$v->getName()."</td><td>".$v->getDescription()."</td></tr>";
}
echo "</table>";
?>