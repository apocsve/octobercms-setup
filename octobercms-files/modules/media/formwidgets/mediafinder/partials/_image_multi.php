<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');