<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
