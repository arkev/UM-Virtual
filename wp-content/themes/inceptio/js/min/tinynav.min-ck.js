!function($,e,t){$.fn.tinyNav=function(a){function n(e){for(var t=0,a="";e&&50!=t;){var n=e.prop("nodeName").toUpperCase();if("NAV"==n)break;("UL"==n||"OL"==n)&&(a+=" - "),e=e.parent(),t++}return a}var i=$.extend({active:"selected",header:!0},a);return this.each(function(){t++;var a=$(this),r="tinynav",o=r+t,d=".l_"+o,s=$("<select/>").addClass(r+" "+o);if(a.is("ul,ol")){i.header&&s.append($("<option/>").text("Menú"));var c="";a.addClass("l_"+o).find("a").each(function(){var e=n($(this));c+='<option value="'+$(this).attr("href")+'">'+e+$(this).text()+"</option>"}),s.append(c),i.header||s.find(":eq("+$(d+" li").index($(d+" li."+i.active))+")").attr("selected",!0),s.change(function(){e.location.href=$(this).val()}),$(d).after(s)}})}}(jQuery,this,0);