<?php
namespace ConverteData;
class ConverteData
{
   public function  __construct($data)
   { 
	  self::ConverteData($data);  
   }
   public static function ConverteData($busca_data)
   {
   	if (strstr($busca_data,"/"))//verifica se tem a barra /
   	{
   		$d = str_replace(' ', '',$busca_data);
   		$d = explode ("/",$busca_data);//tira a barra
   		$rstData = "$d[2]/$d[1]/$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...
   		return $rstData;
   	}
   	else
   		if(strstr($busca_data,"-"))
   		{
   			$d = str_replace(' ', '',$busca_data);
   			$d = explode ("-",$busca_data);
   			$rstData = "$d[2]-$d[1]-$d[0]";
   			return $rstData;
   		}
   		else
   		{
   			return "Data invalida ";
   		}
   }
}