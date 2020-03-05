<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="John Doe">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

            $mail="dgshdfzdgf@gmail";
            $phon="2357826532385";
            $name="cccc";
            $famil="dddddd";
/*******************get jason***********************/
$json = file_get_contents('php://input');
        $obj = json_decode($json);
        $jason = $obj->{'jason'};

      if (decription($jason,$name,$famil,$mail,$phon)) {
		  
        /*******************CODE*********************************/
        /*******************CODE*********************************/
        /*******************CODE*********************************/
        /*******************CODE*********************************/
      
        /*******************json_decode*********************************/
		$objd = json_decode($jason_decod);
        $jason= $objd->{'jason'};
		
		echo $jason;
		
        /*******************CODE*********************************/
        /*******************CODE*********************************/
        /*******************CODE*********************************/
        /*******************CODE*********************************/

        echo "\n<forend>YES_JASON</forend>\n";        
	  }else{
		  echo "\n<forend>NON_JASON</forend>\n";
	  }
/*

$uncompressed = base64_encode(gzencode($uncompressed));
echo $uncompressed ;

$myObj->name = $name;
$myObj->age = 30;
$myJSON = json_encode($myObj);

echo "\n<jason>$myJSON</jason>\n";

*/

        /*******************FUNCTION*********************************/
        /*******************FUNCTION*********************************/
        /*******************FUNCTION*********************************/
		function enncription($jason,$name,$famil,$mail,$phon){
			
		}
		//////////////////////////////////////////////////////////////////////////
        function decription($jason,$name,$famil,$mail,$phon){
        /*******************DECRIPT*********************************/
        /*******************DECRIPT*********************************/
        /*******************DECRIPT*********************************/
/*******************decompres***********************/
       $subb= decomp($jason,$name,$famil);
	    $subb=substr($subb ,1,strlen($subb)-2);

/*******************to arreyy***********************/
        $arry = explode(",",$subb);
        $ar_apend="";
		foreach ($arry as &$value) {
        $ar_apend=$ar_apend. hexToStr(decomp($value,$name,$famil));
        }
		

//////////////////////////////////////////////////////////////////////////////////////////
        if(startsWith($ar_apend,chZ($mail))&&endsWith($ar_apend,chZ($phon))) {
/*******************sub string*/
        $len=strlen($ar_apend)-(strlen(chZ($phon))+strlen(chZ($mail)));
        $sb=substr($ar_apend,strlen(chZ($mail)),$len);
        $sb=base64_decode($sb);
		 $GLOBALS['jason_decod']=$sb;
        return true;
        }
        else{
return fals;
        }
}
        
        function decomp($jason,$name,$famil) {
        $compressed =base64_decode($jason);
        $uncomp = gzdecode($compressed);

/*******************sub string***********************/
        $subb="";
        if(startsWith($uncomp,$name)&&endsWith($uncomp,$famil)) {

        $len=strlen($uncomp)-(strlen($famil)+strlen($name));
        $subb=substr($uncomp,strlen($name),$len);
        }
        return $subb;
        }
        ////////////////////////////////////////////////////////////
        function chZ($s) {
        $ss="";
        $arr= str_split($s);
        foreach ($arr as &$value) {
        $ss=$ss . strToHex($value) ;
        }
        return $ss;
        }
        function endsWith($string, $endString) {
        $len = strlen($endString);
        if ($len == 0) {
        return true;
        }
        return (substr($string, -$len) === $endString);
        }
        function startsWith ($string, $startString) {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
        }
/////////////////////////////////////////////////////

        /*******************strToHex*******************************/
        function strToHex($string){/*******************************/
        $hex = '';/*********************************************/
        for ($i=0; $i<strlen($string); $i++){/******************/
        $ord = ord($string[$i]);/***************************/
        $hexCode = dechex($ord);/***************************/
        $hex .= substr('0'.$hexCode, -2);/******************/
        }/******************************************************/
        return strToUpper($hex);/*******************************/
        }/**********************************************************/
/////////////////////////////////////////////////////////////
        /*******************hexToStr*******************************/
        function hexToStr($hex){/***********************************/
        $string='';/********************************************/
        for ($i=0; $i < strlen($hex)-1; $i+=2){/****************/
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));/*******/
        }/******************************************************/
        return $string;/****************************************/
        }/**********************************************************/
/////////////////////////////////////////////////////////////

        /*******************FUNCTION*********************************/
        /*******************FUNCTION*********************************/
        /*******************FUNCTION*********************************/

        ?>

</body>
</html>
