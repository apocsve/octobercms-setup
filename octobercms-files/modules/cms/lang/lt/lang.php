<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
