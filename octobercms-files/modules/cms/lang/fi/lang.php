<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
