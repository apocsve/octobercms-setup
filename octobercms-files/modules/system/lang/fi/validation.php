<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
