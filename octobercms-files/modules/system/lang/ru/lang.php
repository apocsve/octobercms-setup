<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
