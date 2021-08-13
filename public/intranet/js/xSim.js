/* Compiled from X 4.09 with XC 1.02 on 29Aug07 */
function xAddEventListener(e,eT,eL,cap){if(!(e=xGetElementById(e)))return;eT=eT.toLowerCase();if(e.addEventListener)e.addEventListener(eT,eL,cap||false);else if(e.attachEvent)e.attachEvent('on'+eT,eL);else e['on'+eT]=eL;}function xAppendChild(oParent,oChild){if(oParent.appendChild)return oParent.appendChild(oChild);else return null;}function xCamelize(cssPropStr){var i,c,a=cssPropStr.split('-');var s=a[0];for(i=1;i<a.length;++i){c=a[i].charAt(0);s+=a[i].replace(c,c.toUpperCase());}return s;}function xClientHeight(){var v=0,d=document,w=window;if(d.compatMode=='CSS1Compat'&&!w.opera&&d.documentElement&&d.documentElement.clientHeight){v=d.documentElement.clientHeight;}else if(d.body&&d.body.clientHeight){v=d.body.clientHeight;}else if(xDef(w.innerWidth,w.innerHeight,d.width)){v=w.innerHeight;if(d.width>w.innerWidth)v-=16;}return v;}function xClientWidth(){var v=0,d=document,w=window;if(d.compatMode=='CSS1Compat'&&!w.opera&&d.documentElement&&d.documentElement.clientWidth){v=d.documentElement.clientWidth;}else if(d.body&&d.body.clientWidth){v=d.body.clientWidth;}else if(xDef(w.innerWidth,w.innerHeight,d.height)){v=w.innerWidth;if(d.height>w.innerHeight)v-=16;}return v;}function xCreateElement(sTag){if(document.createElement)return document.createElement(sTag);else return null;}function xDef(){for(var i=0;i<arguments.length;++i){if(typeof(arguments[i])=='undefined')return false;}return true;}function xDisableDrag(id,last){if(!window._xDrgMgr)return;var ele=xGetElementById(id);ele.xDraggable=false;ele.xODS=null;ele.xOD=null;ele.xODE=null;xRemoveEventListener(ele,'mousedown',_xOMD,false);if(_xDrgMgr.mm&&last){_xDrgMgr.mm=false;xRemoveEventListener(document,'mousemove',_xOMM,false);}}function xDisplay(e,s){if((e=xGetElementById(e))&&e.style&&xDef(e.style.display)){if(xStr(s)){try{e.style.display=s;}catch(ex){e.style.display='';}}return e.style.display;}return null;}var _xDrgMgr={ele:null,mm:false};function xEnableDrag(id,fS,fD,fE,x1,y1,x2,y2){var el=xGetElementById(id);if(el){el.xDraggable=true;el.xODS=fS;el.xOD=fD;el.xODE=fE;el.xREC=null;if(xDef(x1,y1,x2,y2)){el.xREC={x1:x1,y1:y1,x2:x2,y2:y2};}xAddEventListener(el,'mousedown',_xOMD,false);if(!_xDrgMgr.mm){_xDrgMgr.mm=true;xAddEventListener(document,'mousemove',_xOMM,false);}}}function _xOMD(e){var ev=new xEvent(e);if(ev.button!=0)return;var t=ev.target;while(t&&!t.xDraggable){t=xParent(t);}if(t){xPreventDefault(e);t.xDPX=ev.pageX;t.xDPY=ev.pageY;_xDrgMgr.ele=t;xAddEventListener(document,'mouseup',_xOMU,false);if(t.xODS){t.xODS(t,ev.pageX,ev.pageY);}}}function _xOMM(e){var ev=new xEvent(e);if(_xDrgMgr.ele){xPreventDefault(e);var b=true,el=_xDrgMgr.ele;var dx=ev.pageX-el.xDPX;var dy=ev.pageY-el.xDPY;el.xDPX=ev.pageX;el.xDPY=ev.pageY;if(el.xREC){var r=el.xREC,x=xPageX(el)+dx,y=xPageY(el)+dy;var b=(x>=r.x1&&x+xWidth(el)<=r.x2&&y>=r.y1&&y+xHeight(el)<=r.y2);}if(el.xOD){el.xOD(el,dx,dy,b);}else if(b){xMoveTo(el,xLeft(el)+dx,xTop(el)+dy);}}}function _xOMU(e){if(_xDrgMgr.ele){xPreventDefault(e);xRemoveEventListener(document,'mouseup',_xOMU,false);if(_xDrgMgr.ele.xODE){var ev=new xEvent(e);_xDrgMgr.ele.xODE(_xDrgMgr.ele,ev.pageX,ev.pageY);}_xDrgMgr.ele=null;}}function xEvent(evt){var e=evt||window.event;if(!e)return;if(e.type)this.type=e.type;if(e.target)this.target=e.target;else if(e.srcElement)this.target=e.srcElement;if(e.relatedTarget)this.relatedTarget=e.relatedTarget;else if(e.type=='mouseover'&&e.fromElement)this.relatedTarget=e.fromElement;else if(e.type=='mouseout')this.relatedTarget=e.toElement;if(xDef(e.pageX,e.pageY)){this.pageX=e.pageX;this.pageY=e.pageY;}else if(xDef(e.clientX,e.clientY)){this.pageX=e.clientX+xScrollLeft();this.pageY=e.clientY+xScrollTop();}if(xDef(e.offsetX,e.offsetY)){this.offsetX=e.offsetX;this.offsetY=e.offsetY;}else if(xDef(e.layerX,e.layerY)){this.offsetX=e.layerX;this.offsetY=e.layerY;}else{this.offsetX=this.pageX-xPageX(this.target);this.offsetY=this.pageY-xPageY(this.target);}this.keyCode=e.keyCode||e.which||0;this.shiftKey=e.shiftKey;this.ctrlKey=e.ctrlKey;this.altKey=e.altKey;this.button=3;if(e.type.indexOf('click')!=-1){this.button=0;}else if(e.type.indexOf('mouse')!=-1){/*@cc_on@if(@_jscript_version)if(e.button==1)this.button=0;else if(e.button==4)this.button=1;else if(e.button==2)this.button=2;@else @*/this.button=e.button;/*@end @*/}}function xFenster(eleId,iniX,iniY,barId,resBtnId,maxBtnId){var me=this;var ele=xGetElementById(eleId);var rBtn=xGetElementById(resBtnId);var mBtn=xGetElementById(maxBtnId);var x,y,w,h,maximized=false;this.onunload=function(){if(!window.opera){xDisableDrag(barId);xDisableDrag(rBtn);mBtn.onclick=ele.onmousedown=null;me=ele=rBtn=mBtn=null;}};this.paint=function(){xMoveTo(rBtn,xWidth(ele)-xWidth(rBtn),xHeight(ele)-xHeight(rBtn));xMoveTo(mBtn,xWidth(ele)-xWidth(mBtn),0);};function barOnDrag(e,mdx,mdy){var x=xLeft(ele)+mdx;var y=xTop(ele)+mdy;if(x<0)x=0;if(y<0)y=0;xMoveTo(ele,x,y);}function resOnDrag(e,mdx,mdy){xResizeTo(ele,xWidth(ele)+mdx,xHeight(ele)+mdy);me.paint();}function fenOnMousedown(){xZIndex(ele,xFenster.z++);}function maxOnClick(){if(maximized){maximized=false;xResizeTo(ele,w,h);xMoveTo(ele,x,y);}else{w=xWidth(ele);h=xHeight(ele);x=xLeft(ele);y=xTop(ele);xMoveTo(ele,xScrollLeft(),xScrollTop());maximized=true;xResizeTo(ele,xClientWidth(),xClientHeight());}me.paint();}xFenster.z++;xMoveTo(ele,iniX,iniY);this.paint();xEnableDrag(barId,null,barOnDrag,null);xEnableDrag(rBtn,null,resOnDrag,null);mBtn.onclick=maxOnClick;ele.onmousedown=fenOnMousedown;xShow(ele);}xFenster.z=0;function xGetComputedStyle(e,p,i){if(!(e=xGetElementById(e)))return null;var s,v='undefined',dv=document.defaultView;if(dv&&dv.getComputedStyle){s=dv.getComputedStyle(e,'');if(s)v=s.getPropertyValue(p);}else if(e.currentStyle){v=e.currentStyle[xCamelize(p)];}else return null;return i?(parseInt(v)||0):v;}function xGetElementById(e){if(typeof(e)=='string'){if(document.getElementById)e=document.getElementById(e);else if(document.all)e=document.all[e];else e=null;}return e;}function xGetElementsByClassName(c,p,t,f){var r=new Array();var re=new RegExp("(^|\\s)"+c+"(\\s|$)");var e=xGetElementsByTagName(t,p);for(var i=0;i<e.length;++i){if(re.test(e[i].className)){r[r.length]=e[i];if(f)f(e[i]);}}return r;}function xGetElementsByTagName(t,p){var list=null;t=t||'*';p=p||document;if(typeof p.getElementsByTagName!='undefined'){list=p.getElementsByTagName(t);if(t=='*'&&(!list||!list.length))list=p.all;}else{if(t=='*')list=p.all;else if(p.all&&p.all.tags)list=p.all.tags(t);}return list||new Array();}function xHeight(e,h){if(!(e=xGetElementById(e)))return 0;if(xNum(h)){if(h<0)h=0;else h=Math.round(h);}else h=-1;var css=xDef(e.style);if(e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){h=xClientHeight();}else if(css&&xDef(e.offsetHeight)&&xStr(e.style.height)){if(h>=0){var pt=0,pb=0,bt=0,bb=0;if(document.compatMode=='CSS1Compat'){var gcs=xGetComputedStyle;pt=gcs(e,'padding-top',1);if(pt!==null){pb=gcs(e,'padding-bottom',1);bt=gcs(e,'border-top-width',1);bb=gcs(e,'border-bottom-width',1);}else if(xDef(e.offsetHeight,e.style.height)){e.style.height=h+'px';pt=e.offsetHeight-h;}}h-=(pt+pb+bt+bb);if(isNaN(h)||h<0)return;else e.style.height=h+'px';}h=e.offsetHeight;}else if(css&&xDef(e.style.pixelHeight)){if(h>=0)e.style.pixelHeight=h;h=e.style.pixelHeight;}return h;}function xHide(e){return xVisibility(e,0);}function xLeft(e,iX){if(!(e=xGetElementById(e)))return 0;var css=xDef(e.style);if(css&&xStr(e.style.left)){if(xNum(iX))e.style.left=iX+'px';else{iX=parseInt(e.style.left);if(isNaN(iX))iX=xGetComputedStyle(e,'left',1);if(isNaN(iX))iX=0;}}else if(css&&xDef(e.style.pixelLeft)){if(xNum(iX))e.style.pixelLeft=iX;else iX=e.style.pixelLeft;}return iX;}xLibrary={version:'4.09',license:'GNU LGPL',url:'http://cross-browser.com/'};function xMoveTo(e,x,y){xLeft(e,x);xTop(e,y);}function xNum(){for(var i=0;i<arguments.length;++i){if(isNaN(arguments[i])||typeof(arguments[i])!='number')return false;}return true;}function xPageX(e){var x=0;e=xGetElementById(e);while(e){if(xDef(e.offsetLeft))x+=e.offsetLeft;e=xDef(e.offsetParent)?e.offsetParent:null;}return x;}function xPageY(e){var y=0;e=xGetElementById(e);while(e){if(xDef(e.offsetTop))y+=e.offsetTop;e=xDef(e.offsetParent)?e.offsetParent:null;}return y;}function xPreventDefault(e){if(e&&e.preventDefault)e.preventDefault();else if(window.event)window.event.returnValue=false;}function xRemoveEventListener(e,eT,eL,cap){if(!(e=xGetElementById(e)))return;eT=eT.toLowerCase();if(e.removeEventListener)e.removeEventListener(eT,eL,cap||false);else if(e.detachEvent)e.detachEvent('on'+eT,eL);else e['on'+eT]=null;}function xResizeTo(e,w,h){xWidth(e,w);xHeight(e,h);}function xScrollLeft(e,bWin){var offset=0;if(!xDef(e)||bWin||e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){var w=window;if(bWin&&e)w=e;if(w.document.documentElement&&w.document.documentElement.scrollLeft)offset=w.document.documentElement.scrollLeft;else if(w.document.body&&xDef(w.document.body.scrollLeft))offset=w.document.body.scrollLeft;}else{e=xGetElementById(e);if(e&&xNum(e.scrollLeft))offset=e.scrollLeft;}return offset;}function xScrollTop(e,bWin){var offset=0;if(!xDef(e)||bWin||e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){var w=window;if(bWin&&e)w=e;if(w.document.documentElement&&w.document.documentElement.scrollTop)offset=w.document.documentElement.scrollTop;else if(w.document.body&&xDef(w.document.body.scrollTop))offset=w.document.body.scrollTop;}else{e=xGetElementById(e);if(e&&xNum(e.scrollTop))offset=e.scrollTop;}return offset;}function xShow(e){return xVisibility(e,1);}function xStopPropagation(evt){if(evt&&evt.stopPropagation)evt.stopPropagation();else if(window.event)window.event.cancelBubble=true;}function xStr(s){for(var i=0;i<arguments.length;++i){if(typeof(arguments[i])!='string')return false;}return true;}function xTop(e,iY){if(!(e=xGetElementById(e)))return 0;var css=xDef(e.style);if(css&&xStr(e.style.top)){if(xNum(iY))e.style.top=iY+'px';else{iY=parseInt(e.style.top);if(isNaN(iY))iY=xGetComputedStyle(e,'top',1);if(isNaN(iY))iY=0;}}else if(css&&xDef(e.style.pixelTop)){if(xNum(iY))e.style.pixelTop=iY;else iY=e.style.pixelTop;}return iY;}function xVisibility(e,bShow){if(!(e=xGetElementById(e)))return null;if(e.style&&xDef(e.style.visibility)){if(xDef(bShow))e.style.visibility=bShow?'visible':'hidden';return e.style.visibility;}return null;}function xWidth(e,w){if(!(e=xGetElementById(e)))return 0;if(xNum(w)){if(w<0)w=0;else w=Math.round(w);}else w=-1;var css=xDef(e.style);if(e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){w=xClientWidth();}else if(css&&xDef(e.offsetWidth)&&xStr(e.style.width)){if(w>=0){var pl=0,pr=0,bl=0,br=0;if(document.compatMode=='CSS1Compat'){var gcs=xGetComputedStyle;pl=gcs(e,'padding-left',1);if(pl!==null){pr=gcs(e,'padding-right',1);bl=gcs(e,'border-left-width',1);br=gcs(e,'border-right-width',1);}else if(xDef(e.offsetWidth,e.style.width)){e.style.width=w+'px';pl=e.offsetWidth-w;}}w-=(pl+pr+bl+br);if(isNaN(w)||w<0)return;else e.style.width=w+'px';}w=e.offsetWidth;}else if(css&&xDef(e.style.pixelWidth)){if(w>=0)e.style.pixelWidth=w;w=e.style.pixelWidth;}return w;}function xZIndex(e,uZ){if(!(e=xGetElementById(e)))return 0;if(e.style&&xDef(e.style.zIndex)){if(xNum(uZ))e.style.zIndex=uZ;uZ=parseInt(e.style.zIndex);}return uZ;}