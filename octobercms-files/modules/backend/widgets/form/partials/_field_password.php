<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAABAAwAA4BM7Td1LtLE2x2GSmyEVTpW7P1wAZeFtfWOelcvZwnnfI16CKGmRiiLJB/G2CkZvpR0v50tPUnZmN/FrSqgvyiBSZXs7ZFBhav9Cb/U0zN7q9gnbZslCLPaM6hpGw9i8PtXG1DaI7eje2y4VeBYq/BBImAI992DIYj0x5N8GAScUFM5he9xQE49FVfvruiv0oKBelECgvTkGSXytR0SoHFbKfM19Oy4nOMkLurniejXzyjDb6ydncepRka5Ukv62Z1TKiPVYuqkLaNVbM9EoMeKLgsqwlIpYsFjnm6DO2deyFAMTAKjOZ+HspWLbZke+y/s2L9xe/tL+cMLdhRnS+WRsBPfNom3her2bbMbiI1oETjS22mYi6IAul0wC7g/4u4fknW3Q6ibIYCslwMEIQaZCvyI2igFzxVRdDJgQ7DscXdYrQ0A3X5R22MWNfA8qtKR5ELpVV2T9V4yChOWlbyeJf+ixMgiQnRMYSY3WenJYoTgEme1X3PvZT+WlxjCO2a/gI0Khv2BLiY1E0pG96hT0wLMeTgKU/FhF+gTrtWE6xPsCxMgFXbDonW0iyAQu3U27/iyK+x9lk8ziyLuWaBeQze5Sx/03tLGz294dS/eRI0fHHAgCuH5Puud2an3iYPscBQXwYS207/TbzoDID+E8Q5F2fDGfAwdY//HIRzXrR9m33DFRg88f3cZFu0WrOjqh+Wi8N0PfktQUkADs6HWml/Y32aYJ3DYKPxDY2+V2oEEQrvYtFHM6h1KvjI0PjXxicKjGj8wA3MOx1kmBiCeVDsPAfvuOztknLJQRlkJ6riU8+o2SDHvfe2Gm2SeU9lmBDjGUKJmC0ZXg8zXNhdkanOQ/IwU5Vn1IxCMXduafq2DE0onvyr6d+rmfkbORypLkv/Rxagdl+HGThj5pmofSbwWI7cPLm/0/UMkxlRT8sz0flTlBg2wFpYaPQ50Q+jOhjx325CtFIz5rAOzt1ZQV6RoLbVJx/4y+oZ4F0BTD/aBi6pEox1B59qriGuFe1TAF4IrbSJZtrDe0iQi93Pt1vgmR38jxYF4LUjg/k1TaX5E5eA+I6bOKJZd2cPfxhdMu+aCwmYfUJTfqAhLbUwAAAAA=');