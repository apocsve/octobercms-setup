<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
