<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');