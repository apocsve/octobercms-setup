<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');