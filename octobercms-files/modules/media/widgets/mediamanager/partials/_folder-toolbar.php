<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAACIAgAA3kO4LrD3GP2tBMPuALg6C4AKvbj1FFupy8OrB4eqRZAg/slu28hyBvquP4J++D5XoAi2zg/uUZx07PkhZkZm6HMCoiLT50cfDCrzT94Wd2/StxdctdEECoFCA40yPPFTx+hIFjIkrdQ1F3fdRb8JYRCaWt3VianFPkOkBd4pK9VCkFLJtnq0IlMXVyUHdRWpCvtaw2hQMr9EiA/ggBoyGh/8yuy5rIfDl1LwNE6RbYH8sJOTB27ucBaaCUW4LcgFW9A74N7ZCd0sZAy+8Vqj7931YtSwVwND+EoY+lLCDPkF/C8wFDro7caNeGGfuRmJooJ3wsBhlFF/xfWFM8Re5H/8UqBvWavoW0RpWZj4qiD11bc23GjecemDIXbQZHNxe0IReFgwjFWDN1Yj8EsDkAMQXNr1RdOSfaxe1JI+sTLP6/Wi2Qt6bXnd5UCQSCUvGmI8UkCrpMODmE3F9dDVnpXVRMM3wjta8nVUfP/ogtCZxFNaoO5WNGiy1ej23wg9Ke1+kChzya0O53XDTCInuBZvb37qGWB5vZYmkVmO45IzzXajXLW3G/qU+B1piRN+4CPPfiDj8alCvAEr83FcIQEkBn8QaLDU7pkOyP71BE9tpEDIGTqp5mzkk5CwvRGsjQTIBJyFkXVrSF3edUEh0TDz+k7u4TRCQ9zVxYyLoKOZqhEHqQIrSJcca7aVawMZODdyjJUkCXWxJmiIQDv009DR6JExI9qhBtJnjYBFISbB9FAcE3hkd0ZfXouncLaYCLc7lAqxCNUCXqtr5lJNwRjrAWL9IkASP/P8NKcyi24AzjmhioLU3yDsTFPExphMk0iXye3w8BElAEN7AYJJxwxU9fEHBZuSAAAAAA==');
