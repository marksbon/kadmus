<?php
  /****************** Text Encrypt & Text Decrypt ******************/
    /***********************************************
      Text Encryption
    ************************************************/
    function text_encrypt($text) 
    {
    	return (password_hash($text,PASSWORD_BCRYPT));
    }
	
    /***********************************************
      Text Decryption
    ************************************************/
    function text_decrypt($text,$encrypted_text) 
    {
  		# Replacing double quotes of hash to single
  		$encrypted_text = str_replace('"',"''",$encrypted_text);
  		
  		return((password_verify($text,$encrypted_text)) ? TRUE : FALSE);
    }

?>