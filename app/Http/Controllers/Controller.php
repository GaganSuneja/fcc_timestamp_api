<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
/*
Checks for the value of passed paramater
if a timestamp is passed it returns timestamped function else dated 

@param $yo GET Variable
@return timestamped(),dated()
*/
class Controller extends BaseController
{
    //

	public function result($yo)
	{
		$a  = explode("%20",$yo);
		
		if(count($a)==1)
		{
			return $this->timestamped($a[0]);
	 	}
		else
		{
			return $this->dated($yo);
		}


	}

  /*
	Returns json encoded data


  */
	public function timestamped($a)
	{
		date_default_timezone_set('UTC');
 	
		$b =  (int)$a;
		
 		if($b==0&&strlen($a)>=1)
 		{
 			return  json_encode(array("unix"=>"null","natural"=>"null"));
 		}
 		else
		{
		    return json_encode(array("unix"=>$a,"natural"=>date('F j,Y',$b)));
		}
				
		
	}
  
  /*
	Returns json encoded data
  

  */
	

	public function dated($a)
	{

		
		$a = str_replace("%20"," ",$a);
		
		if(strtotime($a))
		{
			return json_encode(array("unix"=>strtotime($a),"natural"=>$a));
		}
		else
		{
			return json_encode(array("unix"=>"null","natural"=>"null"));
		}
		

	}

}
