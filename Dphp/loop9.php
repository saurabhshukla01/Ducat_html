<?php

for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=5; $j++)
	{
		if($j==1 || $j==5 || $i==3)
		{
			echo "*";
		}
		else
		{
			echo "&nbsp&nbsp";
		}
	}
	
	echo "<br>";
}

	


	
	
	
?>	