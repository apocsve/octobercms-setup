<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
