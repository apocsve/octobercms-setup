<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');