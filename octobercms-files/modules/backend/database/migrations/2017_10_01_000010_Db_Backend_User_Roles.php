<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAACgBgAABxrAHV5I79AIfG47KkS73TtIHxZ+0ufed5KH8jP/BL5XHGWzJgYpnbUFzEjxJfZjkD65XjtYfwHnUNcQnRoakGyhJrpowHm+yDeQ0pHdUMPTNrn+TWcCX3NM9+spu301HM4YRFc57Al3SiTFnHkmmwemm3r7wfprrwBUsx2z8der7ymrHkmFFX2q65UT8e61WmSOlH9eYFZu/1NeD0x2YowinCMj/ZG3omPMYtzrdnGWHU6BNplQIztKC+McPXWpQGBEXj6BDamw5BA/nfXxLrzbARt//0yBiHEk+KyF36DN3XhRCvVBE0POrhWobfg1qdLJVzfKnmXOUqWk21yaj3VRcbCQnqdx2/6lJrZtGKbcF0uYSRMXY6d05oTgXKDv6Y9nLZZ8ZDJDOF8NION/SpM7Yzw6cEv7WaXhC4uU4MiscNbCe8SJKztx4v/z2CttbfH9y7d/6dgsF9Dtr+OzouK9tPur/DhXbT6RYhVadx8QOsQuRejnd2ajk6rFkPOaZESwFnzkMrtL2Hra+L30Ax3M0OiF0vpekHjREvLsXECuLHqUymBzlz7mJNEaVSsWRWJPkO2uPVceR/GeS9Lgls6Dkgf+sgR8yFIuYiOlAvDe0+G0v1WPEKQwkRCN84PLlHsZeqcJ4WDtWEW/c07+tKXw7xpcGzokPkAPwzsPKnJsKNd0NHTal7RuBPI4fcIII1Js89QoUXv9k7I/5mw4O8O2jhVcY7BoIhrZcCWJI7AzFFp7NiCuLZ0t9cFIx6aL7aEYpPex30xKNZDDsFt5ywqD7SstsWvQ0ordTJfIjWqw4kiL4OnEXrta0x8z5dMKMIS2W5Jx3h86Uee+D93vmnDIJEjKr7ZHC2iuq1QtlrGLLO9bQJ7JsmYJSAsKZAyTkACRmLgsMoKf0k0VNDQPJfR7fkbnT7Et18xplynHwGdkDNRxF4XF2BWra0jwjtDvA8Anz0925EYeFozcN5C9d1SNvepN7WeX7MJ1FI9er+vTX/JzBYTlVLsTVmFAgY+Cserevos7jGETzqfGTBNsk+FdiOhHUxyT9BH+gXkTbQYGRLDamnSFPGuf/DX+Aa/qIO6JTzem/gSlQvIyfhAPK3YCygSXWNoz0dO9P8wmk+owDKBQdjAbMJT2PtCg6VqCffl/3LesLIfO7l8JhaBuYck3ZL6Dr1zB5vDNTfHpBMu0+qSo1v1L41Z4fGng9XeTsCjn7KVzcPaYFn2Yl93K/fagyZg34o4zp9OLXLcDPb9H6JqszKQxHIZdzKYX22ujAwtloDnyqJ1kRONmnQUEbMxji6FrZ4+CQxuyJJlHFdezyHTpGQRMHVT8yIeyhtc6ySewv0hsXa0adZtQtJdTTUEm3K2t0SeO3fBUSR+nKDjoZ8lHahcE7qHHvdoMRJwDH9r4orHfqqMu4chksVvi2Di5839YCNxubg1lsQxewJLcAaYcanck4sSFoGDGa2ZxVeOvxASeLRlauD0cqm5CA1cYfyjPB8aCBJApC0sNWJeGPL34gBUbBJL1w2JYpEFRFS1DyKdBo0//FaVMAxExMu+VaJfc7UFZHvMaYedsxqJtyqDXoA3XngmUN7GytVR9s0qaxN4uTodcBXDhHl4lU1ToGqBJOURGNYPZabg0qYHMUm7AnS9WB8EMyc534Y37ifiWETm/YXOuk6oVk1mM5RUUWnsXo5/Zmwebl0uq6nrnDAHZ7pFfhO1suInIxK1W479dG3qrt2kr1oJ3MDSDzEWY9GEnOHCg9gHZxSlocy2F1y5qPlRdDdh5zcxkcEdr7X2Wp1aeL5yap0t0NfEyAMojE/bRHYhegKiHS+mFFps2V5DqDRW2/gj1H26NVdueNtiEy0oZHOZmYjj4XQVuQOLMVUWVxGpRen4uBBkG5cmqkCZXBauLKvc8uns1yCQujZswnjeG1nY93bNtqmxKWrI9g2wvJf27pT+DWVM9SIdAIubceR7tcktBnwi9U6sTWc9skMuj2xq4f0V/ULsw4iWcp36pJKiwWCPoXp4FYEKtdI7yXbB7LcKlm5yvdXx5za95Wc79ujQlnI38vz51sUBjjTeWbaJJtBI4v2qolCrOiApZHwy369dr3V2Py4tWv47nL2MlAd/t1zzJNA6fRaZ/YuMyNHIEeEfdCqxQvVASIU7r1jpXLhwnTaXI8nYuhAbEYaDALBCQobzsn6+bu6CH4Sxxz4sKkY38YNOHZCNOin/ts2qxHU11sNQg9aMwQxC0mj72UJ2u/hcuOCzf6gAAAAA=');