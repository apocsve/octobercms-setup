<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
