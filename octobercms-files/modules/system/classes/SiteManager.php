<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
