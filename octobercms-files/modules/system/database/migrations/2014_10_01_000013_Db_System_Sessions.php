<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');