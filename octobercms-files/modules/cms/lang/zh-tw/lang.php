<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
