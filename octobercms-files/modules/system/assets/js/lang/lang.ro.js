/*
 * This file has been compiled from: /modules/system/lang/ro/client.php
 */
if (!window.oc) {
    window.oc = {};
}

if (!window.oc.langMessages) {
    window.oc.langMessages = {};
}

window.oc.langMessages['ro'] = $.extend(
    window.oc.langMessages['ro'] || {},
    {"markdowneditor":{"formatting":"Formatare","quote":"Citat","code":"Cod","header1":"Antet 1","header2":"Antet 2","header3":"Antet 3","header4":"Antet 4","header5":"Antet 5","header6":"Antet 6","bold":"\u00cengro\u0219at","italic":"Italic","unorderedlist":"List\u0103 neordonat\u0103","orderedlist":"List\u0103 ordonat\u0103","video":"Video","image":"Imagine","link":"Link","horizontalrule":"Introdu linie orizontal\u0103","fullscreen":"Umple ecranul","preview":"Previzualizeaz\u0103","strikethrough":"Strikethrough","cleanblock":"Clean Block","table":"Table","sidebyside":"Side by Side"},"mediamanager":{"insert_link":"Introdu link","insert_image":"Introdu image","insert_video":"Introdu video","insert_audio":"Introdu audio","invalid_file_empty_insert":"Selecteaz\u0103 un fi\u0219ier c\u0103tre care s\u0103 se fac\u0103 leg\u0103tura.","invalid_file_single_insert":"Selecteaz\u0103 un singur fi\u0219ier.","invalid_image_empty_insert":"Alege imaginile pentru a fi introduse.","invalid_video_empty_insert":"Alege un fi\u0219ier video pentru a fi introdus.","invalid_audio_empty_insert":"Alege un fi\u0219ier video pentru a fi introdus."},"alert":{"error":"Error","confirm":"Confirm","dismiss":"Dismiss","confirm_button_text":"OK","cancel_button_text":"Anuleaz\u0103","widget_remove_confirm":"Remove this widget?"},"datepicker":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"colorpicker":{"choose":"OK"},"filter":{"group":{"all":"all"},"scopes":{"apply_button_text":"Apply","clear_button_text":"Clear"},"dates":{"all":"all","filter_button_text":"Filter","reset_button_text":"Reset","date_placeholder":"Date","after_placeholder":"After","before_placeholder":"Before"},"numbers":{"all":"all","filter_button_text":"Filter","reset_button_text":"Reset","min_placeholder":"Min","max_placeholder":"Max"}},"eventlog":{"show_stacktrace":"Show the stacktrace","hide_stacktrace":"Hide the stacktrace","tabs":{"formatted":"Formatted","raw":"Raw"},"editor":{"title":"Source Code Editor","description":"Your operating system should be configured to listen to one of these URL schemes.","openWith":"Open with","remember_choice":"Remember selected option for this session","open":"Open","cancel":"Cancel"}},"upload":{"max_files":"You can not upload any more files.","invalid_file_type":"You can't upload files of this type.","file_too_big":"File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.","response_error":"Server responded with {{statusCode}} code.","remove_file":"Remove file"},"inspector":{"add":"Add","remove":"Remove","key":"Key","value":"Value","ok":"OK","cancel":"Cancel","items":"Items"}}
);


//! moment.js locale configuration v2.22.2

;(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined'
       && typeof require === 'function' ? factory(require('../moment')) :
   typeof define === 'function' && define.amd ? define(['../moment'], factory) :
   factory(global.moment)
}(this, (function (moment) { 'use strict';


    function relativeTimeWithPlural(number, withoutSuffix, key) {
        var format = {
                'ss': 'secunde',
                'mm': 'minute',
                'hh': 'ore',
                'dd': 'zile',
                'MM': 'luni',
                'yy': 'ani'
            },
            separator = ' ';
        if (number % 100 >= 20 || (number >= 100 && number % 100 === 0)) {
            separator = ' de ';
        }
        return number + separator + format[key];
    }

    var ro = moment.defineLocale('ro', {
        months : 'ianuarie_februarie_martie_aprilie_mai_iunie_iulie_august_septembrie_octombrie_noiembrie_decembrie'.split('_'),
        monthsShort : 'ian._febr._mart._apr._mai_iun._iul._aug._sept._oct._nov._dec.'.split('_'),
        monthsParseExact: true,
        weekdays : 'duminică_luni_marți_miercuri_joi_vineri_sâmbătă'.split('_'),
        weekdaysShort : 'Dum_Lun_Mar_Mie_Joi_Vin_Sâm'.split('_'),
        weekdaysMin : 'Du_Lu_Ma_Mi_Jo_Vi_Sâ'.split('_'),
        longDateFormat : {
            LT : 'H:mm',
            LTS : 'H:mm:ss',
            L : 'DD.MM.YYYY',
            LL : 'D MMMM YYYY',
            LLL : 'D MMMM YYYY H:mm',
            LLLL : 'dddd, D MMMM YYYY H:mm'
        },
        calendar : {
            sameDay: '[azi la] LT',
            nextDay: '[mâine la] LT',
            nextWeek: 'dddd [la] LT',
            lastDay: '[ieri la] LT',
            lastWeek: '[fosta] dddd [la] LT',
            sameElse: 'L'
        },
        relativeTime : {
            future : 'peste %s',
            past : '%s în urmă',
            s : 'câteva secunde',
            ss : relativeTimeWithPlural,
            m : 'un minut',
            mm : relativeTimeWithPlural,
            h : 'o oră',
            hh : relativeTimeWithPlural,
            d : 'o zi',
            dd : relativeTimeWithPlural,
            M : 'o lună',
            MM : relativeTimeWithPlural,
            y : 'un an',
            yy : relativeTimeWithPlural
        },
        week : {
            dow : 1, // Monday is the first day of the week.
            doy : 7  // The week that contains Jan 1st is the first week of the year.
        }
    });

    return ro;

})));


/*! Select2 4.1.0-rc.0 | https://github.com/select2/select2/blob/master/LICENSE.md */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;e.define("select2/i18n/ro",[],function(){return{errorLoading:function(){return"Rezultatele nu au putut fi incărcate."},inputTooLong:function(e){var t=e.input.length-e.maximum,n="Vă rugăm să ștergeți"+t+" caracter";return 1!==t&&(n+="e"),n},inputTooShort:function(e){return"Vă rugăm să introduceți "+(e.minimum-e.input.length)+" sau mai multe caractere"},loadingMore:function(){return"Se încarcă mai multe rezultate…"},maximumSelected:function(e){var t="Aveți voie să selectați cel mult "+e.maximum;return t+=" element",1!==e.maximum&&(t+="e"),t},noResults:function(){return"Nu au fost găsite rezultate"},searching:function(){return"Căutare…"},removeAllItems:function(){return"Eliminați toate elementele"}}}),e.define,e.require}();
