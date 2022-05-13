<?php 

if (isset($_GET['val'])) 
{
	$val = $_GET['val'];

	if ($val==0) 
	{
		$cou = 0;
	}
	else
	{
		$cou=$val;
	}
}

if (isset($_GET['data'])) 
{
	$data = $_GET['data'];

	if ($data=='+') 
	{
		$cou++;
	}
	else
	{
		if ($data!=0) 
		{
			$cou--;
		}
	}
}

echo $cou;

 ?>

 <input type="text" id="data_dis" value=<?php echo $cou; ?> readonly hidden>