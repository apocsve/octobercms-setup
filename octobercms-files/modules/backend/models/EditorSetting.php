<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');