<?php
	function create()
	{
		$file1=readline("Enter the name of the file:");

		$f1=fopen($file1,"w"); 
	}

	function read()
	{
		$file1=readline("Enter the name of the file:"); 

		if(file_exists($file1))
		{
		$f1=fopen($file1,"r");
		echo fread($f1,filesize($file1)); 
		fclose($f1);
		}
		else{
		echo "File doesn't exist";
		}
	}


	function write()
	{
		$file1=readline("Enter the name of the file:");
		if(file_exists($file1))
		{
			$f1=fopen($file1,"w");
			$name=readline("Enter the name of the student:");
			$regno=readline("Enter the regno of the student:");
			$dept=readline("Enter the department of the student:");
			$mark1=readline("Enter the mark1 of the student:");
			$mark2=readline("Enter the mark2 of the student:");
			$mark3=readline("Enter the mark3 of the student:"); 
			fwrite($f1,$name."\n");
			fwrite($f1,$regno."\n"); 
			fwrite($f1,$dept."\n"); 
			fwrite($f1,$mark1."\n"); 
			fwrite($f1,$mark2."\n"); 
			fwrite($f1,$mark3."\n");
			$total=$mark1+$mark2+$mark3;
			$avg=$total/3; 
			if($avg>=90 && $avg<=100)
			{
				$grade='S';
			}
			elseif($avg>=60 && $avg<90)
			{
				$grade='A';
			}
			else{
				$grade='B';
			}
			fwrite($f1,$avg."\n"); 
			fwrite($f1,$grade."\n"); 
			fclose($f1);
			}
		else
		{
			echo "File doesn't exist";
		}
	}

	function append()
	{
		$file1=readline("Enter the name of the file:"); 

		if(file_exists($file1))
		{
			$f1=fopen($file1,"a");
			$name=readline("Enter the name of the student:");
			$regno=readline("Enter the regno of the student:");
			$dept=readline("Enter the department of the student:");
			$mark1=readline("Enter the mark1 of the student:");
			$mark2=readline("Enter the mark2 of the student:");
			$mark3=readline("Enter the mark3 of the student:"); 
			fwrite($f1,$name."\n");
			fwrite($f1,$regno."\n");
			fwrite($f1,$dept."\n"); 
			fwrite($f1,$mark1."\n");
			fwrite($f1,$mark2."\n"); 
			fwrite($f1,$mark3."\n");
			$total=$mark1+$mark2+$mark3;
			$avg=$total/3;
			if($total>=90 && $total<=100)
			{
			$grade='S';
			}
			elseif($total>=60 && $total<90)
			{
			$grade='A';
			}
			else{
			$grade='B';
			}
			fwrite($f1,$grade."\n"); 
			fclose($f1);
			}
		else
		{
			echo "File doesn't exist";
		}
	}

	function ccopy()
	{
		$file1=readline("Enter the name of the file:");
		$file2=readline("Enter the name of the file:");
		$f1=fopen($file1,"r+");
		$f2=fopen($file2,"w"); 
		copy($file1,$file2); 
		fclose($f1);
	}

	function delete()
	{
		$file1=readline("Enter the name of the file:");
		$f1=fopen($file1,"r+"); 
		unlink($file1);
		echo "File has been deleted successfully"; 
		fclose($f1);
	}

	function quit()
	{
		$file1=readline("Enter the name of the file:"); 
		die("Exit from the program");
		fclose($file1);
	}

	$option=readline("Enter the option:");
	switch($option)
	{
		case 1:
		create(); break;
		case 2:
		read(); break;
		case 3:
		write(); break;
		case 4:
		append(); break;
		case 5:
		ccopy(); break;
		case 6:
		delete(); break;
		case 7:
		quit(); break;
		default:
		echo "Wrong Option!!!!!!"; break;
	}
?>