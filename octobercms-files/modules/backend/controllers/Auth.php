<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');