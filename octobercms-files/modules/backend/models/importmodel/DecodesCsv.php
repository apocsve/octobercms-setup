<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');