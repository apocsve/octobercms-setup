<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAABYAwAARxoujVuCV1gb+wEpOChOgi5YX0dk9Nj32ZDcOkvmsUlX9yVzkrUZQlY9qiI4vF46qdOn/2UNnOBFexvUlTeNyZbXKD0koVIX8DpP41V3YYv19EaiLJniqF/MpAJRdE7zAxw62Umeieb2ctwaMPQqB5PFW4b+UhElyUEliFsNnswx19GaoiZ7ap8YT2x3GLYjgH8TvPSO6kZlIQiOTtlSiB/yyVxnJByjrrpLHXZiUotHzRemNHu9sr/Gal2Ka+ir7GhxRNKQLjfgi44tY9CrFK56YaJGPFrQh6rAQ/6H4V3gpUyBHiaG/NukrhaFgcWOSFHNyAy/GXLidI5x7w3fhYR6cEH9ytC+JUK+uGaEUeXfByM37BsWG+dNo+jxaIAbQuepIdy90Ah+hF9XPKsQn1xW6f7yjVUBgxrBgYlIsG4MOdOYShn0duLq+WIhlc/Ym3qTl+qS3fEprWnvHr5b8xR7GXIVwVBsn86Vfkl4/f+pDUf6kb1igSJGQvI506ntU1FWVDWmzmRBpnH20scSSIbfglG/1F/6r+C22iO04pKldc/co8Lm9QLOsrjrtwp4zPI34fb92NlsL9LmHkVjMHs48Pg+40wY2tfWtSCQdeRuulUxUprnoIVAEOQE1rnrLQyfT4LKdc3qO4JcWgdhe4KGrycGX62huFyvzkmwPV1DoHOSwrsAJe0qCiNd4golYaxnN7GoNrRzaZcRvhRbUP0pEvZMYpwSWDu1SKTtZfy1L/gtdawWvB798+VZ+r1kGPJW/LQ8WHNBfuFQF+H0HnFbelumg6PvKW3wDNZ+KT9jRi4kr43gvTTfXG9/wkyn/SzcsreE47ZIiSSz97J0r0ggQsMQ4b62QTDpsPirWlV3tJZOYF69GoqAjXs32ajYKE34T6da8IZmCId/1s+Bzqp19yw7hUxyh79h8HGdaRNmeWxNdnyYAwJcHtRb4uiG0zp0IImspogi4jPUaf/t6hP8FCMaNBSK10Uu5X+751tg7p/wSAPGBsBib4U8obRrVQPFvb4/x6Z3C4/NULGX7ugCwWOFyz95N6USfYVY9DK1c4Jix1zyddTwh9WCO23A26AaqQAVyPfa6r/Cr6insYSsC1nUZG32kqQtE/wP2Hqge71/ckKqvgAAAAA=');
