<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
