<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAAD4AwAAcNc2isud1fkaV9omQGfmdLUPYHy+V0bB3nPSVO4B/DNwz9iqUnsQvBFQApWXPoRCwmdVBYEB7CH7UsuhGtL74FdelhBwTR7E2NuElK4Vw9ZQj2VQiLHjtx0qe4k6HfNRY01msYGFbrXPDuGQetJxvbWAW5lVYzFvq8sbzWL9+VL3PVMNdBbRL2zETuvSMzQbVTlE2sLddS81po8gfynUe5a5uza8u6TApJzymDupEq8QNdUKQPm6Sy6o4kHsOC+Peb7hcnAxbkZfeTvpDTwTAUwbO8k6wOSiPazMp3bVTf4u3Bu7QG2KxC5Zs9sndLbLBADQd96VI6h6PA3zAucqNw4sb7pLIquPOQSAbRnFhNEk+aNvMK9mQmui7gGL13lUX1UmuBfzl+l1Rog+Fdl4oWCWnRMQpNWuO+xCfJyhPXIfk8tVdTwZnQM2mbOogtCLs9JruNvmNcPR8vKuFWjlbXA0TKCD13SfHm42rbyw1KgUTjnCFh4wVZ6evgeIG0K+LwiUSrKqkRBdt8tMdGXGzhAkIjb83yNLPRImSFXL2fA9JQIC318Z832NixksexlS+HYlw45o0/+Xd8WFehnnbO6Lg63EY3farRRFi5tfXGQvl77GNk+hK1gzVBOO+Z8O9b7ncT97SFEVH/mJLRG863ArSj3wVUKS1RZtyUh68DF3ewaOJzFpE6fa6/dNliCEn35BBfwEH8TtBJiFI2ma4vF6rUnqlH6DL7yFpJbVs3V++bJKlQx+3ULgzedRmexvikQElOwUdWXXiJXbDgQM2WksqePcEFHn2ELpPas+xJ1G7XqvuggH6hPCtIMO2PZ7ow0Kf9Hl5zYRaeDxySI81VDJuOXwK/WmOxGRJoMJv/bVpU8SpoTqF8WJQe3VYgynvPawU1AyEDXvOncDuTkNrRktF78ICilBMtJnSrQ9rK7QA/jP7ZSfwWucMJThiIlKzQqu5Zh92dSQ/FXg2zbpqrgFeXM5lcR03ope4HdfHo2kalXiBwtNAb51mDsa4g2/czTjgim6j3Ppzq3RRd0F9Cfhu3HycvO7q9xIqUFz1oTMKvXUyvA7dxXBUE6v8IOHwK5Rlwky4qQXqNbVuuUgvsbOHdBtEH06qcEqaBArCYJP/Pkur/6KRdL1AHNbdhmiIjjDsknz6m+HdKrLPTsylNTllL29psmDTK4OdJDVNkMm4Gy8c5bC4UpKrSN+bS2iLHzBI5SW6Hh53bo9PccH6DGPiU9c5rRaoQ2zWblMLd+X+EV2K60oYzlEz8VZc93hTaUUkmcKnS21Ah/xBKn5liu1EhACUeTcDXUlRUBvmj4M2PqOFp/qEzAw/LF/92LS4RVjaoR9QMcAAAAA');