<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICANCmYAAHVuY3Rpb24gc2V0ZGcoKXsAAA0KCSQoJyNkZycpLmRhdGEAQGdyaWQoeyAgCQGQCXRpdGxlCAI6IiIsANF3aWR0aDo3MzYA4mgAIGVpZ2h0OjQxNSwCs29vbGJhBgByOiIjdACjA1NmaXRDb2x1bW4BAHM6InRydWUBY3Jvd251bWJlUgByAWpjApRbWwqhCQkJe2ZpZWxkAAc6J0tkTmVnYXJhMCcsCSMBKQlzACc4MCxoaWRkZW46BmF9LAsRBA4D9wmYb2RlIAVDJywEFQNcTm0CFQdETmFtQkBhA1wzMDB9BqFdXQcSdXJsOiAnAAA8P3BocCBlY2hvICRiYXNlAIZkaXI7ID8+bQdAbHMvbgyiAHRfpBkW4S4C8CcsDzNzYXZlVQRiASV1cBlggKABTGRlc3Ryb3kClAkYAX0pOw0KgcAIwA0KdmFyIAiQAPAexnRhbWJhaKADHthsHuJpYWxvZygnb3Blbh/RAPShQCGQVB9xJywnVAOCIA0ZTm1NZW51sgAM8CcHESOyZm0D4GZvcm0oJ2NsZTMiYXIBowgwID0Q3xDfcmEQ1XR1aBDBPwHfYWtzaT10JwwgDRIMdnUMVg5BJEAGECvPAAgnZ2V0U2VsZWN0ZWQIs2lmIHd8KALgLsILImQQDy/QEA9VBxAP7w/nBNIP+GxvDPRhZCcsBrELwAkJED8hDw/EAHRfEDp1JovgL5Y9JysFcC4BBgYBEdAAMD05aW1wYW7ANh53CahzdWJtaXQnLD7xCYE6IjErQm8mAG5TAcI6IBaFBBMJCXJldHVybiAAhiQodGhpcykuHiN2YWxpKREVowmAgTNDc3VjY2VzcwQ4cmVzdWx0FyN0Ygka4gESGxBlBCAoJygNAAEiKycpBLQJ3ggacgFSLgUUBAQWchtLY2xvc2UDkAkJLyBuLyAA0iB0aGUgZBxCOSEJA1Mugk1lJxHBcmVsGiEpOwkDYADTA3J1c2VyIA1gSAFhA6QubQzgYWdlci5zaG93KBNSwGBI8ECDICdJbmZvJxPSAVBtc2c6ILwFDvMuAMAEIzjiAdB9IGVsc2UgBBQkBY+gJgJACVZkICdFcnJvcgWfbHQFnx+QCXgzCQBRBqIAkCB4aGFwdXMcUxeib3cXcDKPzBYyjxgSb3cXYwrYY29uZmk98UMAk0GgQQAAcGFrYWggYW5kYSB5YWtpbkDAIAEAbiBtZW5nB/IU4iBpbmk/J1wDLCWGcgWjHpMAxAkkLnBvc3QoU29Tb+CvQp0s8EKxOidoJywxpjoyin0H6CWyB3UpX75PKV8KGeIRYgPCKX0mT2QoJk9hZCZPBZEWGCZqz/whByaKCQkl4CavIGBYkgUhJusJ4CcNL3EGwSBlz+8moRrgc3MuYCszBBAuBSiLB58RgwknsgNwCDAEM/4OARUo8AFACXIAsAAwKdh0b3BkZinTZ4FSMCgIBSI8Pz1RlT8+bWFzdGVyONEvcrN2Ml8DEGFyZ7M9AuEAsz8+IgZRBhI8L45zPgAACQ=="));  ?>