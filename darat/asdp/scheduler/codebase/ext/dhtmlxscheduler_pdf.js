/*
@license
dhtmlxScheduler v.5.1.0 Stardard

This software is covered by GPL license. You also can obtain Commercial or Enterprise license to use it in non-GPL project - please contact sales@dhtmlx.com. Usage without proper license is prohibited.

(c) Dinamenta, UAB.
*/
!function(){function e(e){return e.replace(k,"\n").replace(x,"")}function t(e,t){e=parseFloat(e),t=parseFloat(t),isNaN(t)||(e-=t);var a=r(e);return e=e-a.width+a.cols*b,isNaN(e)?"auto":100*e/b}function a(e,t,a){e=parseFloat(e),t=parseFloat(t),!isNaN(t)&&a&&(e-=t);var n=r(e);return e=e-n.width+n.cols*b,isNaN(e)?"auto":100*e/(b-(isNaN(t)?0:t))}function r(e){for(var t=0,a=scheduler._els.dhx_cal_header[0].childNodes,r=a[1]?a[1].childNodes:a[0].childNodes,n=0;n<r.length;n++){var i=r[n].style?r[n]:r[n].parentNode,d=parseFloat(i.style.width);
if(!(e>d))break;e-=d+1,t+=d+1}return{width:t,cols:n}}function n(e){return e=parseFloat(e),isNaN(e)?"auto":100*e/y}function i(e,t){return(window.getComputedStyle?window.getComputedStyle(e,null)[t]:e.currentStyle?e.currentStyle[t]:null)||""}function d(e,t){for(var a=parseInt(e.style.left,10),r=0;r<scheduler._cols.length;r++)if(a-=scheduler._cols[r],0>a)return r;return t}function l(e,t){for(var a=parseInt(e.style.top,10),r=0;r<scheduler._colsS.heights.length;r++)if(scheduler._colsS.heights[r]>a)return r;
return t}function o(e){return e?"<"+e+">":""}function s(e){return e?"</"+e+">":""}function _(e,t,a,r){var n="<"+e+" profile='"+t+"'";return a&&(n+=" header='"+a+"'"),r&&(n+=" footer='"+r+"'"),n+=">"}function c(){var t="",a=scheduler._mode;if(scheduler.matrix&&scheduler.matrix[scheduler._mode]&&(a="cell"==scheduler.matrix[scheduler._mode].render?"matrix":"timeline"),t+="<scale mode='"+a+"' today='"+scheduler._els.dhx_cal_date[0].innerHTML+"'>","week_agenda"==scheduler._mode)for(var r=scheduler._els.dhx_cal_data[0].getElementsByTagName("DIV"),n=0;n<r.length;n++)"dhx_wa_scale_bar"==r[n].className&&(t+="<column>"+e(r[n].innerHTML)+"</column>");else if("agenda"==scheduler._mode||"map"==scheduler._mode){
var r=scheduler._els.dhx_cal_header[0].childNodes[0].childNodes;t+="<column>"+e(r[0].innerHTML)+"</column><column>"+e(r[1].innerHTML)+"</column>"}else if("year"==scheduler._mode)for(var r=scheduler._els.dhx_cal_data[0].childNodes,n=0;n<r.length;n++)t+="<month label='"+e(r[n].querySelector(".dhx_year_month").innerHTML)+"'>",t+=h(r[n].querySelector(".dhx_year_week").childNodes),t+=u(r[n].querySelector(".dhx_year_body")),t+="</month>";else{t+="<x>";var r=scheduler._els.dhx_cal_header[0].childNodes;t+=h(r),
t+="</x>";var i=scheduler._els.dhx_cal_data[0];if(scheduler.matrix&&scheduler.matrix[scheduler._mode]){t+="<y>";for(var n=0;n<i.firstChild.rows.length;n++){var d=i.firstChild.rows[n];t+="<row><![CDATA["+e(d.cells[0].innerHTML)+"]]></row>"}t+="</y>",y=i.firstChild.rows[0].cells[0].offsetHeight}else if("TABLE"==i.firstChild.tagName)t+=u(i);else{for(i=i.childNodes[i.childNodes.length-1];-1==i.className.indexOf("dhx_scale_holder");)i=i.previousSibling;i=i.childNodes,t+="<y>";for(var n=0;n<i.length;n++)t+="\n<row><![CDATA["+e(i[n].innerHTML)+"]]></row>";
t+="</y>",y=i[0].offsetHeight}}return t+="</scale>"}function u(t){for(var a="",r=t.querySelectorAll("tr"),n=0;n<r.length;n++){for(var i=[],d=r[n].querySelectorAll("td"),l=0;l<d.length;l++)i.push(d[l].querySelector(".dhx_month_head").innerHTML);a+="\n<row height='"+d[0].offsetHeight+"'><![CDATA["+e(i.join("|"))+"]]></row>",y=d[0].offsetHeight}return a}function h(t){var a,r="";scheduler.matrix&&scheduler.matrix[scheduler._mode]&&(scheduler.matrix[scheduler._mode].second_scale&&(a=t[1].childNodes),t=t[0].childNodes);
for(var n=0;n<t.length;n++)r+="\n<column><![CDATA["+e(t[n].innerHTML)+"]]></column>";if(b=t[0].offsetWidth,a)for(var i=0,d=t[0].offsetWidth,l=1,n=0;n<a.length;n++)r+="\n<column second_scale='"+l+"'><![CDATA["+e(a[n].innerHTML)+"]]></column>",i+=a[n].offsetWidth,i>=d&&(d+=t[l]?t[l].offsetWidth:0,l++),b=a[0].offsetWidth;return r}function p(r){var o="",s=scheduler._rendered,_=scheduler.matrix&&scheduler.matrix[scheduler._mode];if("agenda"==scheduler._mode||"map"==scheduler._mode)for(var c=0;c<s.length;c++)o+="<event><head><![CDATA["+e(s[c].childNodes[0].innerHTML)+"]]></head><body><![CDATA["+e(s[c].childNodes[2].innerHTML)+"]]></body></event>";else if("week_agenda"==scheduler._mode)for(var c=0;c<s.length;c++)o+="<event day='"+s[c].parentNode.getAttribute("day")+"'><body>"+e(s[c].innerHTML)+"</body></event>";else if("year"==scheduler._mode)for(var s=scheduler.get_visible_events(),c=0;c<s.length;c++){
var u=s[c].start_date;for(u.valueOf()<scheduler._min_date.valueOf()&&(u=scheduler._min_date);u<s[c].end_date;){var h=u.getMonth()+12*(u.getFullYear()-scheduler._min_date.getFullYear())-scheduler.week_starts._month,p=scheduler.week_starts[h]+u.getDate()-1,v=r?i(scheduler._get_year_cell(u),"color"):"",m=r?i(scheduler._get_year_cell(u),"backgroundColor"):"";if(o+="<event day='"+p%7+"' week='"+Math.floor(p/7)+"' month='"+h+"' backgroundColor='"+m+"' color='"+v+"'></event>",u=scheduler.date.add(u,1,"day"),
u.valueOf()>=scheduler._max_date.valueOf())break}}else if(_&&"cell"==_.render)for(var s=scheduler._els.dhx_cal_data[0].getElementsByTagName("TD"),c=0;c<s.length;c++){var v=r?i(s[c],"color"):"",m=r?i(s[c],"backgroundColor"):"";o+="\n<event><body backgroundColor='"+m+"' color='"+v+"'><![CDATA["+e(s[c].innerHTML)+"]]></body></event>"}else for(var c=0;c<s.length;c++){var g,f;if(scheduler.matrix&&scheduler.matrix[scheduler._mode])g=t(s[c].style.left),f=t(s[c].offsetWidth)-1;else{var b=scheduler.config.use_select_menu_space?0:26;
g=a(s[c].style.left,b,!0),f=a(s[c].style.width,b)-1}if(!isNaN(1*f)){var x=n(s[c].style.top),k=n(s[c].style.height),w=s[c].className.split(" ")[0].replace("dhx_cal_","");if("dhx_tooltip_line"!==w){var D=scheduler.getEvent(s[c].getAttribute("event_id"));if(D){var p=D._sday,E=D._sweek,N=D._length||0;if("month"==scheduler._mode)k=parseInt(s[c].offsetHeight,10),x=parseInt(s[c].style.top,10)-scheduler.xy.month_head_height,p=d(s[c],p),E=l(s[c],E);else if(scheduler.matrix&&scheduler.matrix[scheduler._mode]){
p=0;var M=s[c].parentNode.parentNode.parentNode;E=M.rowIndex;var S=y;y=s[c].parentNode.offsetHeight,x=n(s[c].style.top),x-=.2*x,y=S}else{if(s[c].parentNode==scheduler._els.dhx_cal_data[0])continue;var A=scheduler._els.dhx_cal_data[0].childNodes[0],O=parseFloat(-1!=A.className.indexOf("dhx_scale_holder")?A.style.left:0);g+=t(s[c].parentNode.style.left,O)}if(o+="\n<event week='"+E+"' day='"+p+"' type='"+w+"' x='"+g+"' y='"+x+"' width='"+f+"' height='"+k+"' len='"+N+"'>","event"==w){o+="<header><![CDATA["+e(s[c].childNodes[1].innerHTML)+"]]></header>";
var v=r?i(s[c].childNodes[2],"color"):"",m=r?i(s[c].childNodes[2],"backgroundColor"):"";o+="<body backgroundColor='"+m+"' color='"+v+"'><![CDATA["+e(s[c].childNodes[2].innerHTML)+"]]></body>"}else{var v=r?i(s[c],"color"):"",m=r?i(s[c],"backgroundColor"):"";o+="<body backgroundColor='"+m+"' color='"+v+"'><![CDATA["+e(s[c].innerHTML)+"]]></body>"}o+="</event>"}}}}return o}function v(e,t,a,r,n,i){var d=!1;"fullcolor"==r&&(d=!0,r="color"),r=r||"color";var l="";if(e){var u=scheduler._date,h=scheduler._mode;
t=scheduler.date[a+"_start"](t),t=scheduler.date["get_"+a+"_end"]?scheduler.date["get_"+a+"_end"](t):scheduler.date.add(t,1,a),l=_("pages",r,n,i);for(var v=new Date(e);+t>+v;v=this.date.add(v,1,a))this.setCurrentView(v,a),l+=o("page")+c().replace("–","-")+p(d)+s("page");l+=s("pages"),this.setCurrentView(u,h)}else l=_("data",r,n,i)+c().replace("–","-")+p(d)+s("data");return l}function m(e,t){var a=scheduler.uid(),r=document.createElement("div");r.style.display="none",document.body.appendChild(r),r.innerHTML='<form id="'+a+'" method="post" target="_blank" action="'+t+'" accept-charset="utf-8" enctype="application/x-www-form-urlencoded"><input type="hidden" name="mycoolxmlbody"/> </form>',
document.getElementById(a).firstChild.value=encodeURIComponent(e),document.getElementById(a).submit(),r.parentNode.removeChild(r)}function g(e,t,a,r,n,i,d){var l="";l="object"==typeof n?f(n):v.apply(this,[e,t,a,n,i,d]),m(l,r)}function f(e){for(var t="<data>",a=0;a<e.length;a++)t+=e[a].source.getPDFData(e[a].start,e[a].end,e[a].view,e[a].mode,e[a].header,e[a].footer);return t+="</data>"}var b,y,x=new RegExp("<[^>]*>","g"),k=new RegExp("<br[^>]*>","g");scheduler.getPDFData=v,scheduler.toPDF=function(e,t,a,r){
return g.apply(this,[null,null,null,e,t,a,r])},scheduler.toPDFRange=function(e,t,a,r,n,i,d){return"string"==typeof e&&(e=scheduler.templates.api_date(e),t=scheduler.templates.api_date(t)),g.apply(this,arguments)}}();
//# sourceMappingURL=../sources/ext/dhtmlxscheduler_pdf.js.map