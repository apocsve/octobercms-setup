<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');