<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
