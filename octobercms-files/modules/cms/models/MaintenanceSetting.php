<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAACwCwAAO5s0AXsFIKmDBXFqVFy6kOSGklWdd74zJIMSIj0I7YvGa2+stlvPAk7UtOaShWOMHLqrU6A+oJsNflLor9nws0+zQatBig6E3Mm5ouoNabMsECw2Y9HrDI5wrEbwhQJjWhGbr+/KzgMbaGukJ66DQEx1lCWmFjHX6r5uELrR/xmTHoKirK8pfSzx5wzynDd3igBsT0DF0nl7LmHyqSGYxKAa4u0TtHBfcFK0lPr1KtehLwStOVVxyLphUYF0gNe4clCWtzSruwyNHsfXL3Zg3W0xzB4uIxi6NK+5qxUJ+6CkvgbFxV5gmvxqdy/Im6MxiCY590SA12RkOITaZIdSXgaYq2TtLL9mQ8QGOXwHSdS/YMx4KPfS87i9aZ3PYykb7A+pEtoa10eVH5smoVmKOXYBnN9So9B+uNwDcife2UUMn1Qb4ESSkKaY8e6jqH+OAkV83J8laf7+oSFRGaW4CDwJ30yjWwTaeCSf4ZWshEf4krFhSS1/vVJBH9WTXFVqRR/689yGwqVbQc4k1UKPVCYw/K5oippZSPnx28ZBoksEE2lkhpOcd5ZxeYPPsqJMaohAFySowFNwuDFFTv/N2PhHAtA6JekaZHQefv+peQq0PDSExNn175MTQRg9UQtVpgTpBPx+Cgs9oejOMb3GuAVAMXGP7/XUtuGPGMuUHGLzJMnm2tKVpi1Rh8+3s/mvONXgKGE+7aVfAaTNiGnRX5GJ3/RsHGhD5x3cIkQOBd0L0MlAiH1SGZwT65BDydJUadKSky/0Zgv89AgPbqcPTHdLjIMboSiZDWdL80rqdFw+qCPPj6bX8R2RJ2IfdCJUX1Dxz8dtqHfK5lQmfafxmjq6PPfmvKyiudzOgkOerALmRoUtZoReA6sjQgfQ8hDALpqYrHJCgAp6cD/urqSaR2DodPDmBfaU+TS/NKtnDa+Jw8v1szGzvVT+NRfuMalZ6wG4khUlKtypiC5KVe0GfOGG4nm9xBHTTqnjSFtTZagbWMu+2eNfjxGeD0tKCfePqFu0/vSmYnMQt+GUJR2vfdPOaF0FUJdGJgztznOr7CoKVaQBnQWI2VeKpVtnuU0+Fsy2JfaI0pMCRgitSZMQYCB3JaFAWOxd02rpwQ3IbHBAAvCtmPZCQAK0Wlf9SWAiPEkmF5/cdjR2XLBB0EOymiLuCkss4emspuRxG73jdBjXokNggacvgicRovc5qF3nhJlNT/hAUKvklkg20qcg+1gaGuRZnbmUKi+aN1kyZrizymXGKRTc8FB8yHQuhCrXG5URMm5ea/gRHbPQyZyJQfVPIg3cczmH/ocwn3Ru+0rzduCXZgHrtPbPUliiaeZ67+w4dFJS+hrdVv/feA74dEIbYjEoTftr3EIS3AJOozVSb85ko11bIBLUsEwkP7wmYJQgeZZt2DrPMUiffd3Of2ZpAw7AY5qAEkPZKDabIqvJgo0Osilc6BeGPiC8eKm3VB7ubysbU6EDoB8dHMWC1VjMwJe8hXA1o22HpUx73zq8qWyujeXsFdShnIqfigQfV0UjDjANgsDoj+IrHoQFdduSlwQM/4Ke0FwUvpAfBtDugw10bjzBXmiMnkd3+hR0invwKXkvvV36H96m7g+oQAdhu1aL6FAk8UsysRYFenkJliungzrbN2y3vfrd7u16BTXQUoZka+2OO0uekKPQ3+5x/zJ8/zOt2YgLamkOIF7yJfZzgyame/IMQXmB/TThdGYzGB631v0fas3OeoiEnLxl9MYowkluFGIvkKWrX0SnXQKbB1yTd3CPuNSUFvsI75zjFDMcU3tnRB42uJNoZnPoTF3tts3iqxByz1jGQYLTr/hEcUX03d3X2W5ywkHBSGfvI90jPiPSUf+otxttkyt5ksnxwONtPI1ouI/fonJ5gQ0MSIULJSiCoWTL4oEN2dkn565LebM9xQZ3zsHn7IovsSPSxx9RuCGuB8ehWTg40M+/poGXEWJ5ZNLJOX4bSZddANDNIdWh1e/el2eoYN8GbbhbrY02u/sWg6IeUF39VwpjcP4X8THvyp+ji3xy8KW+EU11KZrKkZyU1Yh1H2GipK0V0Hr8d35Keo8t+1Y6JnfT6cDle10qWs3MBETkHjE1pRYMpybPjNNtzSayrqA+AkutkVaAaNKac/FWGjJG6WAnCI7/Iw7HzP7MEQHOj89wWhuY3WXeBvWbrgaCxTAvZQqIkyU3I006Ocys+bkcVlJkNPZIG4+VWpF8MtxX7DLmkrvhhKBTvTcxQnI49Q6mGQp/Yoe8Rab7yid/Dud5KSPuWSSJ9Qb2v1qVgJPEVqNXEunmiiBNR1OfbemEIveAVMdEzWBT/ZY4taUDheTQQ+tBmJsONWQtDvfmbb9aq60hnWPzzlECwsEKA6WfvNu7KRoSyEBj/M5SJrWmztjSw5o/xTZQkeboszx6T1+H0CuG14JJi53tUntxbqIc6jyaea4GLkxaisN2//uwakZN+ATx96MYUyTcdi3Ejdk/8N8nIx5U7NBhX7UoKOu9sAn29OLPW4a8IGCuecNMyQhnGCFa5M+K0HbuhU2UlK3fyAADWE7g9B978jF51K3KACGjo5mHbeoUylg8tbp/ekoJh2x+B2gTEG9GYBmyOvhzNzkeCqZlqt1utCYwZLuKRpjLLuexfibph+r2Avw3ntF83poqliQ9cj1gMb8dWQNYos6gRWYtHFzuAvBUAEPkG/U+/T1GmVLHnGIkPRCyzQ0TdR1DdNRfElEu2Jf/1qfPFFuzSAjunlShpDE2cezOwzbw5ukj03xB587Ty4z0rF1yGP+yxmtQ48jJgSyn6nez3qQs0vKUV9kAe0z5tIq9DpwHWPsST/KM00+4wqJR64o98OeelFezKelHmfz+RvLqo78cr+rWCicQIJwofO8DZIQvpNZ5K0HaawXF1S7LKldp3XOSuDRIW1brtGPvp9S10PNKKnvzZAhQgaerwwLa8CVVXDcgRHRlC99tK+9FruscX9ivJAWEG0xztKCc1vAA8upqjMoJczJ+cVLKXeqvY4i9e2AHfujty2azZgt9A//a//w3JJ3J3BJvOJ0N8FYNnlfP42QVxYuJewvOwDmoIcyOx9OcQZ/u3NxyXPRgTt3e9fBKtMWyvq8n5TSGTLTKP+Smzrty1PQk3pvt2iv7ifcuiq9g5gPW57ubnSIN/1lKCuU0HFzqkYpjMhlfpQNVcOigmkpUUDQ39MJ3LR2dhdV6P1JoMZr5v/nAYkrOiPPTzMZhRoHCROYOy3W+GC2e+7GpPV7NMgV59McPNS/kq0ZIiZH3kY1gZL9Sw0vLGIAmq+5yIX5lV0nz1iKL1asQvKMBAZCnJJEtCNBfLWVcMW9OOnpNf0rvGKePylCxztwAeoTMOTfr55qQj8qNGxljwUKD6nvjgW38KjJhJKj6Mxdlq+uK6VtkbsNvjChH1dt7ibXy6yBAXMRCOwxwmiYE4F4vqGzRqTLCqgscn+5Ndlg+3s+VDR1rhnLFcYQGP/UCyjputsFbiPaVmEkGGnz2vqem/qxQ2X16vekHJi0awLlU9ftY8EHheyzIhpB8An6HFcAEtn+2ii6Kp1ISzPxsKrxEWDuWBDbKJsuT30JKXzRus2YiyqOf78yNwhxVjPes2bUMjRkozS+TARvIQGkypi/k2QnFEuS518tGnH6Jmv2opgOVRRmuU84NiIw+l1erR4UIjxRzqv06R7Q+cctkv6hOt6HJpbx8VCiw8/6+V3oKxFCIXOli0dbaeS6tbTHgKLfIFqODgN75pMCmDjEK7WjNDuqtZ0ItZSPMY0INlGgYlecGn2fuDIwtGsBbMQqy2loWeTfOwgxw0ReI+syW7eKbkpgVHZbum5ZsaouDJhKxcDs3A8VR06nCFBzDZRfkuEd5II6pURiHyvA2gRrcgfAseVhPHrYh0Y0v1yAri6ox/86lMSU02Qvy3b5LbnM5SmGKFsh4JKcqs/c8lVx90HdnCSWiYQrGDan81PVWSQAAAAA=');
