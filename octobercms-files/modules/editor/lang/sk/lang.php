<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAADQAwAAz5h+NDQjJiRZiuZ8lLnbeSFWBpXfuWLvcnF4jxd8u9jAFubVg4UVti4JrL6LbZnBBGbY/LHy5bkb9Ra+sJtl3p5+VaAKP85NpuYo6IQIDekMqaI/BeVbVZb6rRtpUwL2iD0r2mxS42yj6BkjSxyO+dU/pinG+hVhCAZA8INC1d34xNYSsAIoiJwNcmBD+tWp2Lod6+5xJa9ZSo1UbKQAgndI2bmVfyvfUZ2L9jhvCEGD82druYOAmHPc0xONTT6kjKdoUj/XZ02KP0NGsOAizlIPZfv20/tOh+QHClJDwHOT6X/ZEErALIIt/vTV+YBjAG61fMpZa/5EvTGVh8IHNr/IUocPeFVPE2wpxpvslRfm5Y9ATWj51VN4mRECVxkJtBjqA4M/ynb6COov55HWrSQCrb9z2izi8XxA2i507ePlSCKriABqBp/FdqFQ2eey2JLzzIYby12Fp1Jd0nnu3yt+64QanSTMrMRkLTK7/Id+S9xp61Tzaj5RXj6w0AKyezGj9GkCpV+DrUnruEF2uGTqXQpIJzHSxlH6ZIsubSGFuktEl6izND833htWyElGA+PLT8yOMFOvJLANpW606AMaLoqaifGNKqq2j2Tf+iQ4hcHW6sljujiwWmEXCyVh6pbSRueU5AyuW4qaTllICxqBqZJqcron0oODU4N8gTH/deHLqmy5ovjMACnM7cOkWb7A8QHUDr1etg50kHxtKnaC3IS9iFTpcqlHU+mMPfLApvRpH2b1DmkPvTot/xkYA1oikwDyHOhmuiktM61EoAjETaZIDeTZw3NP4KyaHXMvWFICm8m0+dXImGMxER6gRH2VPsC49P0LFzv50gR5T7b5Hjfcoh0g4d9iO4LV9OBgI9De6VTzBm4GymXGetYmrgzuK/pamKsOpbBojbodxqhT55tzoL6JYkUzIgStSKITtitXJYtw3/Vwnhd6MFU8z3gydg5xDGW1Wnr3z1LVOwNtEFxScJAK2JLenJfWctmKCZLUm+tUygvrzJDkOUiSh9gQjY0OBngjKRWFqWtSyYhlj6PXLOPZ+P638ovwUGTBcaE15anEDMIySGs+tpEXOHLasY83KRa5B7r++U92Ta1GYTgkYIW1lcIkhHheK0XZbRVeF/i0loVV7QvblFJlXkvCynj6/g9xdn/2ohwpds5o6BUiUBWUlAMBn9sTlIseT7ngf6srAdRaBxiXKk5ieTvnFN/V473HNWfhrg/OZWuLy1aImhiYmSNML33ft5At8MPS5BBo7Ol3lxdXUn+juA5z9K9buZ/RfiT0EnFRBgAAAAA=');
