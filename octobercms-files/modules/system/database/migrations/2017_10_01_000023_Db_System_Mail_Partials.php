<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');