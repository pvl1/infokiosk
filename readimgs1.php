<?php
 $dir = "/var/www/media";
     //The directory (relative to this file) that holds the images
   

    //This array will hold all the image addresses
   // $result = array();
     $result = array();
function isimagefile ($somefile) {
	echo $somefile;
		switch(ltrim(strstr($somefile, '.'), '.')) {
            	//If the file is an image, add it to the array
            	case "jpg": case "jpeg":case "png":case "gif":case "PNG":{        	
            	echo "true";
        			return true;}
        		}
        		echo"\n false \n";
        		return false;
        
}
function find_all_files($dir) 
{ 
	if (substr($dir, -1)==='/'){
	  
	}   
	$root = scandir($dir);
    foreach($root as $value) 
    { 
        if($value === '.' || $value === '..') {continue;} 
        if(isimagefile("$value")) {$result[]="$value";continue;} 
        foreach(find_all_files("$dir/$value") as $value) 
        { 
            $result[]=$value; 
        } 
    } 
    return $result; 
} 


function random_pic($dir = 'media')
{
	//print($dir);
    $files = glob($dir . '/*/');
    print_r($files);
    $file = array_rand($files);
    print_r($file);
     if(isimagefile($files[$file])) {
     	//$result[]="$value";
     	return $files[$file];
     	} elseif(is_dir($files[$file])){
     		echo "about to exec on ".$files[$file];
     		random_pic($files[$file]);
     	}
    
    
}

echo random_pic($dir);
    
    //get the list of all files with .jpg extension in the directory and safe it in an array named $images
    //$images = glob( $dir );
    
    //extract only the name of the file without the extension and save in an array named $find
    //foreach( $images as $image ):
    /*
    foreach( $result as $image ){
        echo '<img class="slider" src="' . $image . '">';
    }
    
*/
//echo scandir($dir);
	//$result = find_all_files($dir);
  //  $myJSON = json_encode($result);
	//echo $result;
//echo $myJSON;
?>
