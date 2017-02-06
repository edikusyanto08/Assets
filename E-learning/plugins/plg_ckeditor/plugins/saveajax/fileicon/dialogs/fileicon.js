﻿/*********************************************************************************************************/
/**
 * fileicon plugin for CKEditor 3.x (Author: Lajox ; Email: lajox@19www.com)
 * version:	 1.0
 * Released: On 2009-12-11
 * Download: http://code.google.com/p/lajox
 */
/*********************************************************************************************************/

CKEDITOR.dialog.add('fileicon',function(a){var b=a.config,c=b.fileicon_images,d=8,e,f,g=function(k){var l=k.data.getTarget(),m=l.getName();if(m=='td')l=l.getChild([0,0]);else if(m=='a')l=l.getChild(0);else if(m!='img')return;var n=l.getAttribute('cke_src'),o=l.getAttribute('title'),p=a.document.createElement('img',{attributes:{src:n,_cke_saved_src:n,title:o,alt:o}});a.insertElement(p);f.hide();},h=CKEDITOR.tools.addFunction(function(k,l){k=new CKEDITOR.dom.event(k);l=new CKEDITOR.dom.element(l);var m,n,o=k.getKeystroke();switch(o){case 39:if(m=l.getParent().getNext()){n=m.getChild(0);n.focus();}k.preventDefault();break;case 37:if(m=l.getParent().getPrevious()){n=m.getChild(0);n.focus();}k.preventDefault();break;case 38:if(m=l.getParent().getParent().getPrevious()){n=m.getChild([l.getParent().getIndex(),0]);n.focus();}k.preventDefault();break;case 40:if(m=l.getParent().getParent().getNext()){n=m.getChild([l.getParent().getIndex(),0]);if(n)n.focus();}k.preventDefault();break;case 32:g({data:k});k.preventDefault();break;case 9:if(m=l.getParent().getNext()){n=m.getChild(0);n.focus();k.preventDefault(true);}else if(m=l.getParent().getParent().getNext()){n=m.getChild([0,0]);if(n)n.focus();k.preventDefault(true);}break;case CKEDITOR.SHIFT+9:if(m=l.getParent().getPrevious()){n=m.getChild(0);n.focus();k.preventDefault(true);}else if(m=l.getParent().getParent().getPrevious()){n=m.getLast().getChild(0);n.focus();k.preventDefault(true);}break;default:return;}}),i=['<table cellspacing="2" cellpadding="2"',CKEDITOR.env.ie&&CKEDITOR.env.quirks?' style="position:absolute;"':'','><tbody>'];for(e=0;e<c.length;e++){if(e%d===0)i.push('<tr>');i.push('<td class="cke_dark_background cke_hand cke_centered" style="vertical-align: middle;"><a href="javascript:void(0)" class="cke_smile" tabindex="-1" onkeydown="CKEDITOR.tools.callFunction( ',h,', event, this );">','<img class="hand" title="',b.fileicon_descriptions[e],'" cke_src="',CKEDITOR.tools.htmlEncode(b.fileicon_path+c[e]),'" alt="',b.fileicon_descriptions[e],'"',' src="',CKEDITOR.tools.htmlEncode(b.fileicon_path+c[e]),'"',CKEDITOR.env.ie?" onload=\"this.setAttribute('width', 2); this.removeAttribute('width');\" ":'','></a>','</td>');if(e%d==d-1)i.push('</tr>');}if(e<d-1){for(;e<d-1;e++)i.push('<td></td>');i.push('</tr>');}i.push('</tbody></table>');var j={type:'html',html:i.join(''),onLoad:function(k){f=k.sender;},focus:function(){var k=this.getElement().getChild([0,0,0,0]);k.focus();},onClick:g,style:'width: 100%; height: 100%; border-collapse: separate;'};
return{title:a.lang.fileicon.title,minWidth:280,minHeight:150,contents:[{id:'tab1',label:'',title:'',expand:true,padding:0,elements:[j]}],buttons:[CKEDITOR.dialog.cancelButton]};});