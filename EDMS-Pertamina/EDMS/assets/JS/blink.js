//<![CDATA[
(function(e){e.fn.blink=function(t){var n={delay:500};var t=e.extend(n,t);return this.each(function(){var n=e(this);setInterval(function(){if(e(n).css("visibility")=="visible"){e(n).css("visibility","hidden")}else{e(n).css("visibility","visible")}},t.delay)})}})(jQuery);$(document).ready(function(){$(".blink").blink()})
//]]>


