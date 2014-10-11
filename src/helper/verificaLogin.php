<?php

function verificaLogin()
{
	if($_SESSION["login"] === NULL){
      return true;
    }
}