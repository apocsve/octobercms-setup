<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');