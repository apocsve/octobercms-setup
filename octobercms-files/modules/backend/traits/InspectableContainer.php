<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
