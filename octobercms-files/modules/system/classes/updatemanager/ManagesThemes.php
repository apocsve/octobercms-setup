<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');