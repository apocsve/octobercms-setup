<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
