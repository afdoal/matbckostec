<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>