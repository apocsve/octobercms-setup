<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');