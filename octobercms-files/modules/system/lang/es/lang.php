<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
