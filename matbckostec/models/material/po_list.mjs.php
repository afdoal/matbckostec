<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICANCmYAAHVuY3Rpb24gc2V0ZGcoKXsAAA0KCSQoJyNkZycpLmRhdGEAQGdyaWQoeyAgCQGQCXRpdGxlCAI6IiIsANF3aWR0aDo3MzYA4mgAIGVpZ2h0OjQxNSwCs29vbGJhBCByOiIjdACgQ2FyaQNjcm93bnUAEG1iZXJzOiJ0cnVlAWNmcm96AAhlbkNvbHVtbnM6W1sJsQkJCQABe2ZpZWxkOidwb19ubycsB/MAQydQTyBOby4nLAgTODB9LAjxAtmjywuQZQL5RGF0AQADBwWwAzFdXQOiYwd/B3MAhnN1cHBsaWVyBLZTZWxsAPEEozFC6DAHvWF0dG4C1kEA0ApvDTZwAqdQUE4KCyAoJSkNL2YIg3Rlcm1zBYZUAOMIQ4BcD+5jdXJyZW5jeQL2QwEWAy8V0m5vLhd0ZQXnTgDjAs8CwnNwZWMFplMA0A4fDhWFDAQiX3RvbAMGVyMRIFRvbANfA1V0aBbBaWNrA1pUASEDXwocMANVV3JtYXgGZ4ADKJIvUm9sbCBNYXguKGtnFa8DtQgDZGx2XyLaRGVsaXZlcnkgIz0jAYGAJjZ3aF9uYW0lMCkkV2FyZWhvdWgXcwEgD3I6GX5yZW1hcmsKVlIA9ALvFnIAo2F1dGhfc2lnIjdBASAuIFMBMBPftooM1WE8ogZGQQD0BkUsDDIJZm8S8HQlMDqAgD/FKHZhbHVlLDmgLGluZGV4KcAAQFEWAAl2YXIgZGV0ID0gJzxhAAIgaHJlZj0iIyIgb25jbBpwPSAEIncC8G93Lm9wZW4oXCc6UHBkAABmLnBocD9ObU1lbnU9UHVyAAhjaGFzZSBPcmRlciYCEGlkPSgAJysGkC4AwisnXCcsIFwnX2JsAABhbmtcJyk7Ij48aW1nIHNyBAJjPSI8PwSwIGVjaG8gJGIEYGQAAGlyID8+dGhlbWVzL2ljb24kEHMvBwJuZwNgL2E+JzsOEwlyZXQWOHVybguhOwxhSPIJCX0B4gBiP4R1cmxoBDoNoAZ/OwaAbW9kZWxzL21DoHJpHBBhbC8LEFCxDfJyZXE9bQ4QJnBpbGEQY02gDUAkKCIjAOQiKS4VECgpKycPBCZ0eHQCCADkAgUZAnZpZXc6CrFhaV2XbADBLE+jF2ABEEYavxcgZXgasSlZQA0iDuQAICc8ZGl2IHN0eWxewHBhZGRpAgRuZzoycHgRwHRhYmxlIBewImQBqGR2LScgKyAEYgCAJwHgLwHyPjwv6AEEABRACAN9CIRvbkV4cGFuZFJvCmD7qyMGA/IIWmMyBdErAcJjuwpyCRbhJx1PchbfFt8MHWxpc3Qj/wpECQlmaXRjtWUxAYZzEEAh4GxlW1BlY3Q6AaooMGhlAYpsb2FkTQ8Mc2c6JymAceAj8W2UJ2F1dGgwEfMJCcAQY05q10tkQmFyYW5nMjimTWF0LjiDIEMlEF4pBKUJLy88FVBhcnROBlBFZPIXAPFurQlUSKZObQbdRGVzYwaFMWohfoIMoYhyA1ZTYXQJ11VuaXQDBUtxBi1xdGTHUR4hdWFuCdABEEVTBgAsYWxJUDoncml/8DDnJ30XxgbWcHJpY1GAA3CDsCdQAOMD/wPz4BoRVTogALVvblJlc2l6ZUr3L7YJir8oAasnZml4RGV0M+ArQEhgwidNdDsFNQpnEBxvbkwfIFN1Y2Nlc3MGLxNgkYBUaQPIbWVvdXQoMAYIGAgvCC9odAguCX0sM/8wKQkHF0N9KUwjNNKYCg1fBTc14U1hA+IAkJ1JEz9ob3cXEG50nYNKBD0kSs8HkUn0AfIAxEq17YAB8V5hPEAoXoE5AV9X0l7YTyBDdXN0bwfybWVyIEw7AlHWB5RRGgYkDzELUjwvqYM+AAAJ"));  ?>