<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAAAIBQAAYHsybnoK4UhUwu6e8OL+ifCK+0c8YM9lfLklSGoCuJzXIvlhZkv/2Ka+HXXMcCOcu3jAGvnajJ/oWPY9yXKQXpmAroCa8I8Kdfttps/Jw9v429YW/yylSs5hln3lLmfyBhlCf0t5Mat1xh6pDNwP7zD6ziM3PrhLksyoOrTA4Q8vKncyx5RqLlry72ypQ8fIf8mVGrqoNSAsKXzN4DME+/Rn8RlI4oc1Ml4mn3u8FFWjGdPzAQMBPY4x3vwHT/gdeylKdlEidWXcfnX3UtVEpgtlE8ScwO2oI+MUuLXtKXjH4rryVlwKLsI9DkmKcsuzp1isSct+wjtX3u8PMniUWsxPxrRVN8rIFNS1NTk9DV5WzVmxLVfHaD7j49OuA32IsSM+2m/khTFMTOfj7Tgx5E0Pg0EloJys/By6EwqyPKPRxWygyqNCVNhzKPRf/9OUGEcf2Uk+iXD0qc+SbLC1lIKsIvHG3zwOKf+4V2btnJ52PNAqn4lotmx1wFLYGDP+/ZQMQ1BhGJZDs/3qNSO58KnlmKZWUpHz3FBuN78QaYBYvS8ka0j5OxyCovnehX6sm9OztXNUc/7vsZjoqYItS1OghumL9Xj7QhH2JjNxqO7KW4udopTqtKgAVOQqefg0NNxLWH1bPX/H/8cI8TwX+1J3FmtLgMU/qVFNidFsM87Tc16dVyM2njKAmwKWsHxFJaixGwSp6g4NXg34upX1F01TDOZUi4Y/f2MxfFPBChetF7m/MGqiZyvTMTDiVCMP7csaCGbQzYR/Haibwn6wbIdTcPuc8ROH8vY20+SkXTepgf4HU9QtQ/Gu/4gHGg1FydizqACicUHbr55CbAK3IRISoo0+68tiToRoqyinLLl1yqsrI5WBELe0qCBXaAM/B9QBytq8xAIQB9P8VZ0jsSxGG/pUNMREEM9AlEomFk4zG8HHiC92u8nEXgUaGMG7a0uZAWDAbxwuLw21i+dRX2qyqwtYCKeXY34Fw2eGlLjCpKqwdsdXe9+W4+py61f20M381iADtZ0dWAoqrad/+VWwyqWNRaEq/RzJF4VJZVLYdnuWPbmUZEpZ4UraOqB5XW9fy5DrH1p9edpoHXXacaNVA2S4K0fmqcb8swduFegfTVmJloPwL8wUj5US++dPkzxKA+q66yAcxmUyLDU91rX29HkV8nw5LzuXUI4mMGFNUWTs51X6mvOTB52FTjptdVcwH9sRfd8z4SRdqdSjps8ysxuqgDyfOZR5FWX8357BX75iBSgYvKcR9jYcRPpWYbKFTC9a+wOX+GAgjEonvGM6SXTqjJrhka+dEKcJ9bL4MCCoeyhWHWj8ndG17yAuJUbrt23kgRjJ9eiioI88Qt1T9NCy2EIDOrY3LDe1QdaD4NgEvjKkBaP7/MsoUMIXDIBRDgLkgK0GYaAk3o0sj/RDbJDC6yvft/id72vbWxU9CxrX+uJ4K1edU77NMzFte2KrZC8DZsEP8UA6VLr1zTsUinT9nPlasPqCIdTw6UZ4b1az10QMZ8RypSbVrc+8EunoTBuE+qKxB+6+PrKp729U9Y5lEREtGVZ5V0NW0QkdJ7M0DBR03YZESZOtpvbxIhOIbKu0+7VuuLe+XyqiXmcDbac8LjnBbjW3nu5/HoMbyI9hIxqoiYlkUlE4+LJBi7nnFtcz+N1YbV2ZzG1bDyOXeWNdb7CnHnSlGUk3yaLqso1olL2m9AAAAAA=');
