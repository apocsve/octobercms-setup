<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAAAQBQAAFog+w4akwKSTWJ+8Am+tnbbVZNROyPCGdmZ7gRR2/RUn+PW+PreMSqXYHZR8Ui07y9DhxHoJQ0oBxQcERunb+CZRtE/URpkpYtHkf9DR0rmnX2aUo1zNbQaZxxMOm+OlFXWmKUANeoqIGvNWydomLvLvJoYhSJs+sHdMTbDDhuZYH/gBv4qUk5jz4eZol+nSDl8WmGnIl6Mcb7c38M6R4WZDuv5uGYdqS922fgXw6mV5r+9hN+5iUKorFISAds7/i61ouur64DkJ4j5g+Zgwa4HM8DV+KqN1x5WfJOWv9SfLNoie20IZNrtFFZACvvhl7+Z8APU+r+LsjLyAJKT25FgVVzV8ZtI39SV0ZeolJEaGyW2fzsSOu9RjPDQW2D29IrYQVHb5G38Xb0MGpMV3qI31sAFLYRMl5UqtHDd9tjZdVlFVoBtdiS8KrTaQ3SIVcyP0Peg8WaXH4zG78vr/RHVm1aLgjwiPcICm1E/bjBT1bE/Ax+Rpog7wf2OPD+cCwRDDvmm+5cXnK9aeU4px/HNFkCizBYzIAZC8BmgAKs/c6TTxD3vYS3D6F/kLB2GmTU7ZGGRlMvS65C1wYs1hB2+m4gxsFVcjRxcbdzvsVXH81zXeUg9HxoNUQ5ni+dk14IfyfOAnJnSqAyBNyh7HlK892YUVi+JzMlOnTBCQcd2lh68IorEDkI2C1WLGc+Jc64WYs5V3PkQBgkyBFf0qjeUbKRa1NFi9ra8PduK6VRLtyY6Qq7mQK1ZJVyFK2MbdZEA5+Spw+4GR4UPF2qHHgEPGTbq1KcmydKljMZyWj8OWpn5E9d4T4gksdEb8yKnf4oLbo+/Oii8mfWaaOT94PwppM9OkAsuOsrLmInb507M2IMXgHnoeAn63xnHy8ovVm+6q2+cq5U7FRgUcoCKngiItUVLD4AEsv8U9vo7cnwJIHmFwLO55XFOuizuMqq0rIqfeHmGiusyXze+8LppjUhnXcbTvi/m0fopiB6fN5zLxpvDPvICpziQ9bf18y1SZS7oxscB/uLIB6W6b7DGCRcWeGpzJmr/X7ubpbibBMBGAPEclR/HKgXUmlvV8pgHNxgMDpt+LbSEgGtg74iOwZPeQ6PH1ISbwpgSpk8Ck2ffCPC5T/ALiLpq8qLxk5yhpv9kc3NHtf/KRHpuZjlu2iS6mHbyCQX5e6W4H+xyFz0L+oWLBA5ku8mXa1zwigfrnqUBRVRE8oYvXRv+f6MICehq/upJrVMP4o65Zct8PMeHH2yOYugVFNDkrJvW2B/2yyJBIFZ4Sv0F0UqbmIVInX1cSAjtI8TczZkHXkGHjKqQK4PEixQFuL0E8pUzzsp6idNlMNE9DxX3JGWFhqeNa7aCmftV8aPhJ37Tzs37oPhpG/5YgH2fopIanUpl6gpvca/jLVddgAQcfmvqZmtqIkXy5zc+6EDVfSj5IOvRM0B9gbnX087cV1Idp/jkvcqLBoUDOKlIvA3PZjSGiwJac6oRgMXfKyZr/ffByQV9x80zc1APaQ77xY/bdPwjwnXe29cHzHMz4QV/+8SWuClKlIgRlEVq0oOEXnfOnDTGpID+wkRzdvYGOt3QNtwXdoy1nb03QiXTiDpg2cdvknl3o4C+Lxyv5r6q8HdaGflcBpfOrfN1fIl68RHX5EjyLIkvNMYJWaPaCe0DwnQJhjCXYasXAiUx+nZCV3qC01z84BINZ9l21O+L9Ma2iQ+JNQQ5HAAAAAA==');