<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
