<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
