<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
