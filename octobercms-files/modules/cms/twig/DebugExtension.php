<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');