<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');