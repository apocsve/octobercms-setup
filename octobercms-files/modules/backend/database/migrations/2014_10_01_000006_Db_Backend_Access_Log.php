<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAACQBAAAj/PeO0uWVDVvBBBzbK80xk3cF7xUWJWsEpFFPjK5FXQj4yTuTXsAOxZ0idkcrzYTPG7GiitXHVXSRcQl262w3m+SwE4fYahS740+1utj00t2mM9R1vDwCD/KJ7tcjubaqLviE1I1Hm5RRvlwhxZL74s4LxWQ3WwWh54UDZ6N68aa0clNkmUCnfkQLOzgsb46Q01kid9aFglQBSAHxYDhq6zuNgl+24py0j6S6Wi+Wz9ZKxt1ulhRESC+F+yLDiyRfuD14Gzfpp9D+YSeKryqKN5NS/Ibw3SmNJ0hUsUIDaZhs8qu5oh1V6tENmdjlk9Jk+io6QdJtIxV8YAAT62KTWxFE7tDKY1nJOajvHLUz9k0JsUcVUp13ctt0JVQeQnZu7S2i7Hzs7Qk2rUaL5Z/MnG/29KbHN/fD8R1ngX1NxB1iLZ1BmeLGzFETnpxj71TSMzEcidYeVO1IFZbVqBMMsu/C55Gcseh4x7SBVHU86dAIE7HxuqnBhixKecGXXXek/bQn5wLp5XKYk4sJtcB6QFchgMTTI+PggBMpNMC4Br1muYsDFbMfhGGofOToMo1KQWDZelWAZ3+OQzRQ9zSVF8MLvFUp1znheFVtdBybfDQtH1h6nmweudjJtvwZGNIBMRik7cI8ytaaGfmcxM/XuPtRosJI850spEDkHxxVHrpJuNENb38GImsxIUXXFKKpULaIaCbGQdkZRmH9PO0OO4Eq+gKVi11okTXxwHoE6QzLR1dU/lhUk6vb1OKaYx4WWqGpmZYQLCVWB3UuXOkZ5optjMEOWsvJVHs7WdFgnT6Vg5Y44x6mRt2BWkGdopETwPTWn14exyRHrWXynFwWoPf2Q2xbNL3MB4YliLIHVR7f9C8lDt6BjmgN3xRjrUpYn1jYNFczbxYfVmk6FowpvwYCyK4etjme92hcil1167QdidfHob1+VcFBOvEj+MwH2wrRTR5AY+pAlIzIPh+qI3kl12LqyaIQly0QK2i40LqpsVyE/UAZZIjWzhQwhO6iQJ5x2sg58CuOH2ZqPca7CvNZr/rKgh6SiHQJtyA4Khjqi2AwJbNOqezW9e+rnLjSwxo+o7O/CNcCHK87qgzMfeAnsQnD1yq6sA1D2vfXr7/9Hy14bBpB4mFCdQ+k6onKzYXTJ7NNUe06MPeGlaA7KcJGzhsj3L9LIzVdllheNCQE3WSui4R4RGXzWEQwJa7P2AEBoiPLsbSA7In09gIVBFulHYPG8Q3mZqnKY9hSmO2MNCEITj3zl+lOytbfTN0IJLlJUWLTvW9+CZcAJhM+o10l0Jp+7gmsvtJfG7lBAIDVjMy193FWqt2IyjYwJk2TrP067AuJ1Bqf9+EsP6Jw7oxtcc9fgJpU2n5HMDWLs1lCwaFuhAMqp1PYpiWGthIpAUB6vJkpopzxXMIK+L2vp9D5+NSDqCreGtDlQ79HfKlFtSYuw4MIOal+prXFsCzd0aOZqYq8au27zfBQ6XH2nxzga7g0pH6yUXSotII4eKLXZWMDgpdjsHZRskPtdfpTB1DeP3o5GUFRrSx0ZZohgAAAAA=');
