<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');