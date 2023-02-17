<!DOCTYPE html>
<html ng-app="PortalUnico" prueba="true">
  <head >
    <meta name="google-site-verification" content="vgE7xTPnRDI9JNHuGHmNQeU55Yr58j9hwq9Wk06R8qk" />  
    
    <title>
      SUBSECRETARÍA DE LAS JUVENTUDES    
    </title>	
    <link rel="SHORTCUT ICON" href="https://openapis.col.gob.mx/API_PU/img/favicon.ico" rel="icon" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"d4962eb93a",applicationID:"128179107"};;(()=>{var __webpack_modules__={507:(__unused_webpack_module,__webpack_exports__,__webpack_require__)=>{"use strict";function detectPolyfillFeatures(){const featureStatus={};return checkAndAddFeature("Promise","PROMISE"),checkAndAddFeature("Array.prototype.includes","ARRAY_INCLUDES"),checkAndAddFeature("Object.assign","OBJECT_ASSIGN"),checkAndAddFeature("Object.entries","OBJECT_ENTRIES"),featureStatus;function checkAndAddFeature(funcString,featName){try{let func=eval("self."+funcString);-1!==func.toString().indexOf("[native code]")?featureStatus[featName]=Status.NATIVE:featureStatus[featName]=Status.CHANGED}catch{featureStatus[featName]=Status.UNAVAIL}}}__webpack_require__.d(__webpack_exports__,{n:()=>detectPolyfillFeatures});const Status={UNAVAIL:"NotSupported",NATIVE:"Detected",CHANGED:"Modified"}},2687:(e,t,r)=>{"use strict";r.d(t,{Z:()=>n});const n=(0,r(2141).ky)(16)},1719:(e,t,r)=>{"use strict";r.d(t,{I:()=>n});var n=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(n=+i[1])},3524:(e,t,r)=>{"use strict";let n;if(r.d(t,{H:()=>i}),r(8438).il){const e=document.createElement("div");e.innerHTML="\x3c!--[if lte IE 6]><div></div><![endif]--\x3e\x3c!--[if lte IE 7]><div></div><![endif]--\x3e\x3c!--[if lte IE 8]><div></div><![endif]--\x3e\x3c!--[if lte IE 9]><div></div><![endif]--\x3e",n=e.getElementsByTagName("div").length}var i;i=4===n?6:3===n?7:2===n?8:1===n?9:0},5970:(e,t,r)=>{"use strict";r.d(t,{Mt:()=>_,C5:()=>s,OP:()=>j,Yu:()=>g,Dg:()=>f,CX:()=>u,GE:()=>b,sU:()=>I});var n={};r.r(n),r.d(n,{agent:()=>m,match:()=>x,version:()=>y});var i=r(4580);class o{constructor(e,t){return e&&"object"==typeof e?t&&"object"==typeof t?(Object.assign(this,t),void Object.entries(e).forEach((e=>{let[t,r]=e;this[t]=r}))):console.error("setting a Configurable requires a model to set its initial properties"):console.error("setting a Configurable requires an object as input")}}const a={beacon:i.ce.beacon,errorBeacon:i.ce.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},c={};function s(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!c[e])throw new Error(`Info for ${e} was never set`);return c[e]}function u(e,t){if(!e)throw new Error("All info objects require an agent identifier!");c[e]=new o(t,a),(0,i.Qy)(e,c[e],"info")}const d={allow_bfcache:!1,privacy:{cookies_enabled:!0},ajax:{deny_list:void 0,enabled:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},ssl:void 0,obfuscate:void 0,jserrors:{enabled:!0},metrics:{enabled:!0},page_action:{enabled:!0},page_view_event:{enabled:!0},page_view_timing:{enabled:!0},session_trace:{enabled:!0},spa:{enabled:!0}},l={};function f(e,t){if(!e)throw new Error("All configuration objects require an agent identifier!");l[e]=new o(t,d),(0,i.Qy)(e,l[e],"config")}function _(e,t){if(!e)throw new Error("All configuration objects require an agent identifier!");var r=function(e){if(!e)throw new Error("All configuration objects require an agent identifier!");if(!l[e])throw new Error(`Configuration for ${e} was never set`);return l[e]}(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}const p={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},v={};function b(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");v[e]=new o(t,p),(0,i.Qy)(e,v[e],"loader_config")}const g=(0,i.mF)().o;var h=r(3524),w=r(9206),m=null,y=null;if(navigator.userAgent){var k=navigator.userAgent,P=k.match(/Version\/(\S+)\s+Safari/);P&&-1===k.indexOf("Chrome")&&-1===k.indexOf("Chromium")&&(m="Safari",y=P[1])}function x(e,t){if(!m)return!1;if(e!==m)return!1;if(!t)return!0;if(!y)return!1;for(var r=y.split("."),n=t.split("."),i=0;i<n.length;i++)if(n[i]!==r[i])return!1;return!0}var E=r(2141),S=r(8438);const O="NRBA_SESSION_ID";function A(){if(!S.il)return null;try{let e;return null===(e=window.sessionStorage.getItem(O))&&(e=(0,E.ky)(16),window.sessionStorage.setItem(O,e)),e}catch(e){return null}}var q=S.ZP?.XMLHttpRequest,C=q&&q.prototype;const T={};function j(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!T[e])throw new Error(`Runtime for ${e} was never set`);return T[e]}function I(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");var r;T[e]=new o(t,(r=e,{customTransaction:void 0,disabled:!1,features:{},loaderType:void 0,maxBytes:6===h.H?2e3:3e4,offset:(0,w.yf)(),onerror:void 0,origin:""+S.ZP?.location,ptid:void 0,releaseIds:{},sessionId:1==_(r,"privacy.cookies_enabled")?A():null,xhrWrappable:q&&C&&C.addEventListener&&!/CriOS/.test(navigator.userAgent),userAgent:n})),(0,i.Qy)(e,T[e],"runtime")}},8873:(e,t,r)=>{"use strict";r.d(t,{q:()=>n});const n=["1222","PROD"].filter((e=>e)).join(".")},1925:(e,t,r)=>{"use strict";r.d(t,{w:()=>i});const n={agentIdentifier:""};class i{constructor(e){if("object"!=typeof e)return console.error("shared context requires an object as input");this.sharedContext={},Object.assign(this.sharedContext,n),Object.entries(e).forEach((e=>{let[t,r]=e;Object.keys(n).includes(t)&&(this.sharedContext[t]=r)}))}}},2071:(e,t,r)=>{"use strict";r.d(t,{ee:()=>s});var n=r(4580),i=r(9010),o=r(9599),a="nr@context";let c=(0,n.fP)();var s;function u(){}function d(){return new u}function l(){(s.backlog.api||s.backlog.feature)&&(s.aborted=!0,s.backlog={})}c.ee?s=c.ee:(s=function e(t,r){var n={},c={},f={},_={on:b,addEventListener:b,removeEventListener:g,emit:v,get:w,listeners:h,context:p,buffer:m,abort:l,aborted:!1,isBuffering:y,debugId:r,backlog:t&&t.backlog?t.backlog:{}};return _;function p(e){return e&&e instanceof u?e:e?(0,i.X)(e,a,d):d()}function v(e,r,n,i,o){if(!1!==o&&(o=!0),!s.aborted||i){t&&o&&t.emit(e,r,n);for(var a=p(n),u=h(e),d=u.length,l=0;l<d;l++)u[l].apply(a,r);var f=k()[c[e]];return f&&f.push([_,e,r,a]),a}}function b(e,t){n[e]=h(e).concat(t)}function g(e,t){var r=n[e];if(r)for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)}function h(e){return n[e]||[]}function w(t){return f[t]=f[t]||e(_,t)}function m(e,t){var r=k();_.aborted||(0,o.D)(e,(function(e,n){t=t||"feature",c[n]=t,t in r||(r[t]=[])}))}function y(e){return!!k()[c[e]]}function k(){return _.backlog}}(void 0,"globalEE"),c.ee=s)},3195:(e,t,r)=>{"use strict";r.d(t,{E:()=>n,p:()=>i});var n=r(2071).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},4539:(e,t,r)=>{"use strict";r.d(t,{X:()=>o});var n=r(3195);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.E,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.E);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3585:(e,t,r)=>{"use strict";r.d(t,{bP:()=>c,iz:()=>s,m$:()=>a});var n=r(8438),i=!1;try{var o=Object.defineProperty({},"passive",{get:function(){i=!0}});n.ZP?.addEventListener("testPassive",null,o),n.ZP?.removeEventListener("testPassive",null,o)}catch(e){}function a(e){return i?{passive:!0,capture:!!e}:!!e}function c(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];window.addEventListener(e,t,a(r))}function s(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];document.addEventListener(e,t,a(r))}},2141:(e,t,r)=>{"use strict";r.d(t,{Rl:()=>i,ky:()=>o});var n=r(8438);function i(){var e=null,t=0,r=n.ZP?.crypto||n.ZP?.msCrypto;function i(){return e?15&e[t++]:16*Math.random()|0}r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,a="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",c="",s=0;s<a.length;s++)c+="x"===(o=a[s])?i().toString(16):"y"===o?(o=3&i()|8).toString(16):o;return c}function o(e){var t=null,r=0,n=self.crypto||self.msCrypto;n&&n.getRandomValues&&Uint8Array&&(t=n.getRandomValues(new Uint8Array(31)));for(var i=[],o=0;o<e;o++)i.push(a().toString(16));return i.join("");function a(){return t?15&t[r++]:16*Math.random()|0}}},9206:(e,t,r)=>{"use strict";r.d(t,{nb:()=>s,os:()=>u,yf:()=>c,zO:()=>a});var n=r(1209),i=(new Date).getTime(),o=i;function a(){return n.G&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-o}function c(){return i}function s(e){o=e}function u(){return o}},1209:(e,t,r)=>{"use strict";r.d(t,{G:()=>n});const n=void 0!==r(8438).ZP?.performance?.timing?.navigationStart},745:(e,t,r)=>{"use strict";r.d(t,{s:()=>s,v:()=>u});var n=r(7036),i=r(1719),o=r(9206),a=r(1209),c=r(8438);let s=!0;function u(e){var t=function(){if(i.I&&i.I<9)return;if(a.G)return s=!1,c.ZP?.performance?.timing?.navigationStart}();t&&((0,n.B)(e,"starttime",t),(0,o.nb)(t))}},7036:(e,t,r)=>{"use strict";r.d(t,{B:()=>o,L:()=>a});var n=r(9206),i={};function o(e,t,r){void 0===r&&(r=(0,n.zO)()+(0,n.os)()),i[e]=i[e]||{},i[e][t]=r}function a(e,t,r,n){const o=e.sharedContext.agentIdentifier;var a=i[o]?.[r],c=i[o]?.[n];void 0!==a&&void 0!==c&&e.store("measures",t,{value:c-a})}},8547:(e,t,r)=>{"use strict";r.d(t,{T:()=>i});var n=r(8438);const i={isFileProtocol:function(){let e=Boolean("file:"===(0,n.lW)()?.location?.protocol);e&&(i.supportabilityMetricSent=!0);return e},supportabilityMetricSent:!1}},9011:(e,t,r)=>{"use strict";r.d(t,{K:()=>o});var n=r(5970);const i=["ajax","jserrors","metrics","page_action","page_view_event","page_view_timing","session_trace","spa"];function o(e){const t={};return i.forEach((r=>{t[r]=function(e,t){return!0!==(0,n.OP)(t).disabled&&!1!==(0,n.Mt)(t,`${e}.enabled`)}(r,e)})),t}},8025:(e,t,r)=>{"use strict";r.d(t,{W:()=>i});var n=r(2071);class i{constructor(e,t){let r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:[];this.agentIdentifier=e,this.aggregator=t,this.ee=n.ee.get(e),this.externalFeatures=r,this.blocked=!1}}},9010:(e,t,r)=>{"use strict";r.d(t,{X:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},8438:(e,t,r)=>{"use strict";r.d(t,{ZP:()=>a,il:()=>n,lW:()=>c,v6:()=>i});const n=Boolean("undefined"!=typeof window&&window.document),i=Boolean("undefined"!=typeof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator);let o=(()=>{if(n)return window;if(i){if("undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope)return globalThis;if(self instanceof WorkerGlobalScope)return self}throw new Error("New Relic browser agent shutting down due to error: Unable to locate global scope. This is possibly due to code redefining browser global variables like `self` and `window`.")})();const a=o;function c(){return o}},9599:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t){var r=[],i="",o=0;for(i in e)n.call(e,i)&&(r[o]=t(i,e[i]),o+=1);return r}},248:(e,t,r)=>{"use strict";r.d(t,{$c:()=>s,Ng:()=>u,RR:()=>c});var n=r(5970),i=r(1925),o=r(8547),a={regex:/^file:\/\/(.*)/,replacement:"file://OBFUSCATED"};class c extends i.w{constructor(e){super(e)}shouldObfuscate(){return s(this.sharedContext.agentIdentifier).length>0}obfuscateString(e){if(!e||"string"!=typeof e)return e;for(var t=s(this.sharedContext.agentIdentifier),r=e,n=0;n<t.length;n++){var i=t[n].regex,o=t[n].replacement||"*";r=r.replace(i,o)}return r}}function s(e){var t=[],r=(0,n.Mt)(e,"obfuscate")||[];return t=t.concat(r),o.T.isFileProtocol()&&t.push(a),t}function u(e){for(var t=!1,r=!1,n=0;n<e.length;n++){"regex"in e[n]?"string"!=typeof e[n].regex&&e[n].regex.constructor!==RegExp&&(console&&console.warn&&console.warn('An obfuscation replacement rule contains a "regex" value with an invalid type (must be a string or RegExp)'),r=!0):(console&&console.warn&&console.warn('An obfuscation replacement rule was detected missing a "regex" value.'),r=!0);var i=e[n].replacement;i&&"string"!=typeof i&&(console&&console.warn&&console.warn('An obfuscation replacement rule contains a "replacement" value with an invalid type (must be a string)'),t=!0)}return!t&&!r}},4580:(e,t,r)=>{"use strict";r.d(t,{EZ:()=>u,Qy:()=>s,ce:()=>o,fP:()=>a,gG:()=>d,mF:()=>c});var n=r(9206),i=r(8438);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return i.ZP?.NREUM||(i.ZP.NREUM={}),void 0===i.ZP?.newrelic&&(i.ZP.newrelic=i.ZP.NREUM),i.ZP.NREUM}function c(){let e=a();if(!e.o){var t=self,r=t.XMLHttpRequest;e.o={ST:setTimeout,SI:t.setImmediate,CT:clearTimeout,XHR:r,REQ:t.Request,EV:t.Event,PR:t.Promise,MO:t.MutationObserver,FETCH:t.fetch}}return e}function s(e,t,r){let i=a();const o=i.initializedAgents||{},c=o[e]||{};return Object.keys(c).length||(c.initializedAt={ms:(0,n.zO)(),date:new Date}),i.initializedAgents={...o,[e]:{...c,[r]:t}},i}function u(e,t){a()[e]=t}function d(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),c(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},584:(e,t,r)=>{"use strict";r.d(t,{N:()=>i,e:()=>o});var n=r(3585);function i(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];return void(0,n.iz)("visibilitychange",r);function r(){if(t){if("hidden"!=document.visibilityState)return;e()}e(document.visibilityState)}}function o(){return"hidden"===document.visibilityState?-1:1/0}},8539:e=>{e.exports=function(e,t,r){t||(t=0),void 0===r&&(r=e?e.length:0);for(var n=-1,i=r-t||0,o=Array(i<0?0:i);++n<i;)o[n]=e[t+n];return o}}},__webpack_module_cache__={},inProgress,dataWebpackPrefix;function __webpack_require__(e){var t=__webpack_module_cache__[e];if(void 0!==t)return t.exports;var r=__webpack_module_cache__[e]={exports:{}};return __webpack_modules__[e](r,r.exports,__webpack_require__),r.exports}__webpack_require__.m=__webpack_modules__,__webpack_require__.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return __webpack_require__.d(t,{a:t}),t},__webpack_require__.d=(e,t)=>{for(var r in t)__webpack_require__.o(t,r)&&!__webpack_require__.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},__webpack_require__.f={},__webpack_require__.e=e=>Promise.all(Object.keys(__webpack_require__.f).reduce(((t,r)=>(__webpack_require__.f[r](e,t),t)),[])),__webpack_require__.u=e=>e+"."+__webpack_require__.h().slice(0,8)+"-1222.js",__webpack_require__.h=()=>"95d4308d836c4fa71ea6",__webpack_require__.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),inProgress={},dataWebpackPrefix="NRBA:",__webpack_require__.l=(e,t,r,n)=>{if(inProgress[e])inProgress[e].push(t);else{var i,o;if(void 0!==r)for(var a=document.getElementsByTagName("script"),c=0;c<a.length;c++){var s=a[c];if(s.getAttribute("src")==e||s.getAttribute("data-webpack")==dataWebpackPrefix+r){i=s;break}}i||(o=!0,(i=document.createElement("script")).charset="utf-8",i.timeout=120,__webpack_require__.nc&&i.setAttribute("nonce",__webpack_require__.nc),i.setAttribute("data-webpack",dataWebpackPrefix+r),i.src=e),inProgress[e]=[t];var u=(t,r)=>{i.onerror=i.onload=null,clearTimeout(d);var n=inProgress[e];if(delete inProgress[e],i.parentNode&&i.parentNode.removeChild(i),n&&n.forEach((e=>e(r))),t)return t(r)},d=setTimeout(u.bind(null,void 0,{type:"timeout",target:i}),12e4);i.onerror=u.bind(null,i.onerror),i.onload=u.bind(null,i.onload),o&&document.head.appendChild(i)}},__webpack_require__.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},__webpack_require__.p="https://js-agent.newrelic.com/",(()=>{var e={783:0,519:0};__webpack_require__.f.j=(t,r)=>{var n=__webpack_require__.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var i=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=i);var o=__webpack_require__.p+__webpack_require__.u(t),a=new Error;__webpack_require__.l(o,(r=>{if(__webpack_require__.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var i=r&&("load"===r.type?"missing":r.type),o=r&&r.target&&r.target.src;a.message="Loading chunk "+t+" failed.\n("+i+": "+o+")",a.name="ChunkLoadError",a.type=i,a.request=o,n[1](a)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,i,[o,a,c]=r,s=0;if(o.some((t=>0!==e[t]))){for(n in a)__webpack_require__.o(a,n)&&(__webpack_require__.m[n]=a[n]);if(c)c(__webpack_require__)}for(t&&t(r);s<o.length;s++)i=o[s],__webpack_require__.o(e,i)&&e[i]&&e[i][0](),e[i]=0},r=window.webpackChunkNRBA=window.webpackChunkNRBA||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var __webpack_exports__={};(()=>{"use strict";__webpack_require__.r(__webpack_exports__);var e=__webpack_require__(507),t=__webpack_require__(2687),r=__webpack_require__(3585);function n(e){if(!document||"complete"===document.readyState)return e()||!0}function i(e){n(e)||(0,r.bP)("load",e)}function o(e){n(e)||(0,r.iz)("DOMContentLoaded",e)}var a=__webpack_require__(8438),c=__webpack_require__(2071);let s=0;function u(e){(async()=>{if(!s++)try{const{aggregator:t}=await __webpack_require__.e(859).then(__webpack_require__.bind(__webpack_require__,7859));await t(e)}catch(e){console.error("Failed to successfully load all aggregators. Aborting...\n",e),c.ee.abort()}})()}var d=__webpack_require__(8539),l=__webpack_require__.n(d),f=__webpack_require__(4580),_=__webpack_require__(5970),p=__webpack_require__(3195),v=__webpack_require__(9599),b=__webpack_require__(9206);let g=!1;var h=__webpack_require__(7036),w=__webpack_require__(745),m=__webpack_require__(8025);class y extends m.W{constructor(e){super(e),a.il&&((0,w.v)(e),(0,h.B)(e,"firstbyte",(0,b.yf)()),i((()=>this.measureWindowLoaded())),o((()=>this.measureDomContentLoaded())))}measureWindowLoaded(){var e=(0,b.zO)();(0,h.B)(this.agentIdentifier,"onload",e+(0,b.os)()),(0,p.p)("timing",["load",e],void 0,void 0,this.ee)}measureDomContentLoaded(){(0,h.B)(this.agentIdentifier,"domContent",(0,b.zO)()+(0,b.os)())}}var k=__webpack_require__(584);class P extends m.W{constructor(e){var t;if(super(e),t=this,this.isEnabled()&&a.il){if(this.pageHiddenTime=(0,k.e)(),this.performanceObserver,this.lcpPerformanceObserver,this.clsPerformanceObserver,this.fiRecorded=!1,"PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){this.performanceObserver=new PerformanceObserver((function(){return t.perfObserver(...arguments)}));try{this.performanceObserver.observe({entryTypes:["paint"]})}catch(e){}this.lcpPerformanceObserver=new PerformanceObserver((function(){return t.lcpObserver(...arguments)}));try{this.lcpPerformanceObserver.observe({entryTypes:["largest-contentful-paint"]})}catch(e){}this.clsPerformanceObserver=new PerformanceObserver((function(){return t.clsObserver(...arguments)}));try{this.clsPerformanceObserver.observe({type:"layout-shift",buffered:!0})}catch(e){}}this.fiRecorded=!1;["click","keydown","mousedown","pointerdown","touchstart"].forEach((e=>{(0,r.iz)(e,(function(){return t.captureInteraction(...arguments)}))})),(0,k.N)((()=>{this.pageHiddenTime=(0,b.zO)(),(0,p.p)("docHidden",[this.pageHiddenTime],void 0,void 0,this.ee)}),!0),(0,r.bP)("pagehide",(()=>(0,p.p)("winPagehide",[(0,b.zO)()],void 0,void 0,this.ee)))}}isEnabled(){return!1!==(0,_.Mt)(this.agentIdentifier,"page_view_timing.enabled")}perfObserver(e,t){e.getEntries().forEach((e=>{"first-paint"===e.name?(0,p.p)("timing",["fp",Math.floor(e.startTime)],void 0,void 0,this.ee):"first-contentful-paint"===e.name&&(0,p.p)("timing",["fcp",Math.floor(e.startTime)],void 0,void 0,this.ee)}))}lcpObserver(e,t){var r=e.getEntries();if(r.length>0){var n=r[r.length-1];if(this.pageHiddenTime<n.startTime)return;var i=[n],o=this.addConnectionAttributes({});o&&i.push(o),(0,p.p)("lcp",i,void 0,void 0,this.ee)}}clsObserver(e){e.getEntries().forEach((e=>{e.hadRecentInput||(0,p.p)("cls",[e],void 0,void 0,this.ee)}))}addConnectionAttributes(e){var t=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(t)return t.type&&(e["net-type"]=t.type),t.effectiveType&&(e["net-etype"]=t.effectiveType),t.rtt&&(e["net-rtt"]=t.rtt),t.downlink&&(e["net-dlink"]=t.downlink),e}captureInteraction(e){if(e instanceof _.Yu.EV&&!this.fiRecorded){var t=Math.round(e.timeStamp),r={type:e.type};this.addConnectionAttributes(r),t<=(0,b.zO)()?r.fid=(0,b.zO)()-t:t>(0,b.os)()&&t<=Date.now()?(t-=(0,b.os)(),r.fid=(0,b.zO)()-t):t=(0,b.zO)(),this.fiRecorded=!0,(0,p.p)("timing",["fi",t,r],void 0,void 0,this.ee)}}}var x=__webpack_require__(4539),E="React",S="Angular",O="AngularJS",A="Backbone",q="Ember",C="Vue",T="Meteor",j="Zepto",I="Jquery";function R(){if(!a.il)return[];var e=[];try{(function(){try{if(window.React||window.ReactDOM||window.ReactRedux)return!0;if(document.querySelector("[data-reactroot], [data-reactid]"))return!0;for(var e=document.querySelectorAll("body > div"),t=0;t<e.length;t++)if(Object.keys(e[t]).indexOf("_reactRootContainer")>=0)return!0;return!1}catch(e){return!1}})()&&e.push(E),function(){try{return!!window.angular||(!!document.querySelector(".ng-binding, [ng-app], [data-ng-app], [ng-controller], [data-ng-controller], [ng-repeat], [data-ng-repeat]")||!!document.querySelector('script[src*="angular.js"], script[src*="angular.min.js"]'))}catch(e){return!1}}()&&e.push(O),function(){try{return!!(window.hasOwnProperty("ng")&&window.ng.hasOwnProperty("coreTokens")&&window.ng.coreTokens.hasOwnProperty("NgZone"))||!!document.querySelectorAll("[ng-version]").length}catch(e){return!1}}()&&e.push(S),window.Backbone&&e.push(A),window.Ember&&e.push(q),window.Vue&&e.push(C),window.Meteor&&e.push(T),window.Zepto&&e.push(j),window.jQuery&&e.push(I)}catch(e){}return e}var N=__webpack_require__(8547),M=__webpack_require__(248),Z=__webpack_require__(8873);const B=Boolean(a.ZP?.Worker),D=Boolean(a.ZP?.SharedWorker),W=Boolean(a.ZP?.navigator?.serviceWorker);let F,z,G;class L extends m.W{constructor(e){var t;let r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};super(e),t=this,this.PfFeatStatusEnum=r,this.singleChecks(),this.eachSessionChecks(),(0,x.X)("record-supportability",(function(){return t.recordSupportability(...arguments)}),void 0,this.ee),(0,x.X)("record-custom",(function(){return t.recordCustom(...arguments)}),void 0,this.ee)}recordSupportability(e,t){var r=["sm",e,{name:e},t];return(0,p.p)("storeMetric",r,null,void 0,this.ee),r}recordCustom(e,t){var r=["cm",e,{name:e},t];return(0,p.p)("storeEventMetrics",r,null,void 0,this.ee),r}singleChecks(){this.recordSupportability(`Generic/Version/${Z.q}/Detected`);const{loaderType:e}=(0,_.OP)(this.agentIdentifier);e&&this.recordSupportability(`Generic/LoaderType/${e}/Detected`),a.il&&o((()=>{R().forEach((e=>{this.recordSupportability("Framework/"+e+"/Detected")}))})),N.T.isFileProtocol()&&(this.recordSupportability("Generic/FileProtocol/Detected"),N.T.supportabilityMetricSent=!0);const t=(0,M.$c)(this.agentIdentifier);t.length>0&&this.recordSupportability("Generic/Obfuscate/Detected"),t.length>0&&!(0,M.Ng)(t)&&this.recordSupportability("Generic/Obfuscate/Invalid"),a.il&&this.reportPolyfillsNeeded(),function(e){if(!F){if(B){F=Worker;try{a.ZP.Worker=r(F,"Dedicated")}catch(e){o(e,"Dedicated")}if(D){z=SharedWorker;try{a.ZP.SharedWorker=r(z,"Shared")}catch(e){o(e,"Shared")}}else n("Shared");if(W){G=navigator.serviceWorker.register;try{a.ZP.navigator.serviceWorker.register=(t=G,function(){for(var e=arguments.length,r=new Array(e),n=0;n<e;n++)r[n]=arguments[n];return i("Service",r[1]?.type),t.apply(navigator.serviceWorker,r)})}catch(e){o(e,"Service")}}else n("Service");var t;return}n("All")}function r(e,t){return new Proxy(e,{construct:(e,r)=>(i(t,r[1]?.type),new e(...r))})}function n(t){a.v6||e(`Workers/${t}/Unavailable`)}function i(t,r){e("module"===r?`Workers/${t}/Module`:`Workers/${t}/Classic`)}function o(t,r){e(`Workers/${r}/SM/Unsupported`),console.warn(`NR Agent: Unable to capture ${r} workers.`,t)}}(this.recordSupportability.bind(this))}reportPolyfillsNeeded(){this.recordSupportability(`Generic/Polyfill/Promise/${this.PfFeatStatusEnum.PROMISE}`),this.recordSupportability(`Generic/Polyfill/ArrayIncludes/${this.PfFeatStatusEnum.ARRAY_INCLUDES}`),this.recordSupportability(`Generic/Polyfill/ObjectAssign/${this.PfFeatStatusEnum.OBJECT_ASSIGN}`),this.recordSupportability(`Generic/Polyfill/ObjectEntries/${this.PfFeatStatusEnum.OBJECT_ENTRIES}`)}eachSessionChecks(){a.il&&(0,r.bP)("pageshow",(e=>{e.persisted&&this.recordCustom("Custom/BFCache/PageRestored")}))}}var U=__webpack_require__(9011);const $=(0,e.n)(),H="lite";try{!function(e){if(g)return;const r=(0,f.gG)();a.v6&&(r.info.jsAttributes={...r.info.jsAttributes,isWorker:!0});try{(0,_.CX)(t.Z,r.info),(0,_.Dg)(t.Z,r.init),(0,_.GE)(t.Z,r.loader_config),(0,_.sU)(t.Z,{loaderType:e}),function(e){var t=(0,f.fP)(),r=c.ee.get(e),n=r.get("tracer"),i="api-",o=i+"ixn-";function a(){}(0,v.D)(["setErrorHandler","finished","addToTrace","inlineHit","addRelease"],(function(e,r){t[r]=u(i,r,!0,"api")})),t.addPageAction=u(i,"addPageAction",!0),t.setCurrentRouteName=u(i,"routeName",!0),t.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,_.OP)(e).customTransaction=(r||"http://custom.transaction")+t,u(i,"setPageViewName",!0,"api")()},t.setCustomAttribute=function(t,r){const n=(0,_.C5)(e);return(0,_.CX)(e,{...n,jsAttributes:{...n.jsAttributes,[t]:r}}),u(i,"setCustomAttribute",!0,"api")()},t.interaction=function(){return(new a).get()};var s=a.prototype={createTracer:function(e,t){var i={},a=this,c="function"==typeof t;return(0,p.p)(o+"tracer",[(0,b.zO)(),e,i],a,void 0,r),function(){if(n.emit((c?"":"no-")+"fn-start",[(0,b.zO)(),a,c],i),c)try{return t.apply(this,arguments)}catch(e){throw n.emit("fn-err",[arguments,this,"string"==typeof e?new Error(e):e],i),e}finally{n.emit("fn-end",[(0,b.zO)()],i)}}}};function u(e,t,n,i){return function(){return(0,p.p)("record-supportability",["API/"+t+"/called"],void 0,void 0,r),(0,p.p)(e+t,[(0,b.zO)()].concat(l()(arguments)),n?null:this,i,r),n?void 0:this}}(0,v.D)("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),(function(e,t){s[t]=u(o,t)})),t.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),(0,p.p)("record-supportability",["API/noticeError/called"],void 0,void 0,r),(0,p.p)("err",[e,(0,b.zO)(),!1,t],void 0,void 0,r)}}(t.Z),g=!0}catch(e){}}(H);const e=(0,U.K)(t.Z);e.page_view_event&&new y(t.Z),e.page_view_timing&&new P(t.Z),e.metrics&&new L(t.Z,$),function(e,t){let r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1e3;t?setTimeout((()=>u(e)),r):a.il?i((()=>u(e))):u(e)}(H)}catch(e){a.ZP?.newrelic?.ee?.abort&&a.ZP.newrelic.ee.abort()}})(),window.NRBA=__webpack_exports__})();</script>		
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   <!-- `` Bootstrap CSS
    <link rel="stylesheet" href="https://openapis.col.gob.mx/API_PU/css/bs4/bootstrap.min.css">  ``       -->
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">         
       
    <!-- Customcss -->
      
    <link rel="stylesheet" href="https://openapis.col.gob.mx/API_PU/css/bs4/layout.css">
    <?= $this->renderSection("styles") ?>
    <script type="text/javascript" src="https://openapis.col.gob.mx/API_PU/js/b4/jquery-3.2.1.js"></script>
       
    
    
    <Link rel = "canonical" href = "https://www.col.gob.mx/juventud"/><meta property="og:url" 	 content="http://www.col.gob.mx" /><meta property="og:type"  content="website" /><meta property="og:title" content="Gobierno del estado de colima" /><meta property="og:description" content="Gobierno del estado de colima" /><meta property="og:image" content="http://www.col.gob.mx/assets/img/escudo.png" /><Link rel = "canonical" href = "https://www.col.gob.mx/juventud"/><meta property="og:url" 	 content="http://www.col.gob.mx" /><meta property="og:type"  content="website" /><meta property="og:title" content="Gobierno del estado de colima" /><meta property="og:description" content="Gobierno del estado de colima" /><meta property="og:image" content="http://www.col.gob.mx/assets/img/escudo.png" /><link rel='stylesheet' type='text/css' href='https://www.col.gob.mx/assets/css/customcss.css'>   <!-- Global site tag (gtag.js) - Google Analytics -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo" />
  </head>
  <body data-url="https://openapis.col.gob.mx/API_PU/" id="Body">
<!-- <script type="text/javascript" src="https://openapis.col.gob.mx/API_PU/js/scripts/accesibilidad.js"></script> -->

<style>
.border_resaltar{
	border: 2px solid red;
}
</style>


<?= $this->renderSection('content') ?>




<div class="container" id="sec_atencion"><br><br>
    <br/>
	<div class="row texto-blanco-pu">
		<h1 class="padding-left">¡Contáctanos!</h1>
		<div class="col-12 separador-secciones-dark-2-pu"></div>
		<span class="col-1 separador-secciones-dark-1-pu"></span>
	</div>
	<br>
	<div class="row section-contacto-pu ">
                <div class="titulo_blanco size30 text-center bold col-centered">Atención Ciudadana</div>
                <div class="sep5"></div>
		<div class="col-md-6 text-center contacto-section-separador">
			<div class="row">
                <div class="sep10"></div>
				<div class="col-12">
					<div style="display:none" class="alert msg-contacto" role="alert"> <span></span> </div>
					<form id="frmContacto" name="frmContacto">
                        <div class="input-group pb10">
                          <span class="input-group-addon adaptaraddon" id="basic-addon1"><i class="fa fa-user" style="padding-right:5px;"> </i></span>
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="* Nombre"  style="font-style: italic;" />
                          <span id="msg_nombre"></span>
                        </div>
						<div class="input-group pb10">
                          <span class="input-group-addon adaptaraddon" id="basic-addon1"><i class="fa fa-user" style="padding-right:5px;"> </i></span>
                          <input type="text" class="form-control" id="ap1" name="ap1" placeholder="* Primer Apellido"  style="font-style: italic;" />
                          <span id="msg_ap1"></span>
                        </div>
						<div class="input-group pb10">
                          <span class="input-group-addon adaptaraddon" id="basic-addon1"><i class="fa fa-user" style="padding-right:5px;"> </i></span>
                          <input type="text" class="form-control" id="ap2" name="ap2" placeholder=" Segundo Apellido"  style="font-style: italic;" />
                          <span id="msg_ap2"></span>
                        </div>
						<div class="input-group pb10">
                            <select id="sexo" name="sexo" class="form-control pb10" style="padding-top: 10px;font-style: italic;">
                                <option value="nada" selected="">Seleccionar el sexo</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                            <span id="msg_sexo"></span>
                        </div>
                        <div class="input-group pb10">
                          <span class="input-group-addon adaptaraddon" id="basic-addon1"><i class="fa fa-phone" style="padding-right:5px;"> </i></span>
                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"  style="font-style: italic;" />
                          <span id="msg_nombre"></span>
                        </div>
                        <div class="input-group pb10">
                          <span class="input-group-addon adaptaraddon" id="basic-addon1"><i class="fa fa-envelope"> </i></span>
                          <input type="email" class="form-control" id="email" name="email" placeholder="* Correo " style="font-style: italic;" />
                          <span id="msg_mail"></span>
                        </div>

						<div class="input-group pb10">
                            <select id="procedencia" name="procedencia" class="form-control pb10" style="padding-top: 10px;font-style: italic;">
                                <option value="nada" selected="">Seleccionar la localidad</option>
                                <option value="Armería">Armería</option>
                                <option value="Colima">Colima</option>
								<option value="Comala">Comala</option>
								<option value="Coquimatlán">Coquimatlán</option>
								<option value="Cuauhtémoc">Cuauhtémoc</option>
								<option value="Ixtlahuacán">Ixtlahuacán</option>
								<option value="Manzanillo">Manzanillo</option>
								<option value="Minatitlán">Minatitlán</option>
								<option value="Tecomán">Tecomán</option>
								<option value="Villa de Álvarez">Villa de Álvarez</option>
                            </select>
                            <span id="msg_sexo"></span>
                        </div>

                        <div class="input-group pb10">
                            <select id="asunto" name="asunto" class="form-control pb10" style="padding-top: 10px;font-style: italic;">
                                <option value="nada" selected="">Seleccionar el tema</option>
                                <option value="comentario">Comentario</option>
                                <option value="sugerencia">Sugerencia</option>
                                <option value="petición">Petición</option>
                            </select>
                            <span id="msg_asunto"></span>
                        </div>
                        <div class="form-group pb10">
                            <textarea class="form-control" id='mensaje' name='mensaje' placeholder="Cuál es tu requerimiento" style="font-style: italic;" ></textarea>
                            <span id="msg_mensaje"></span>
                        </div>
                        <div class="row">
                        	<div class="col-md-8">
                        		<div class="form-group">
		                            <div class="g-recaptcha" data-sitekey="6LcJhlgUAAAAAMuyT1TGklVsDJvfSspi1DQZxQg4" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
		                            <span id="msg_capcha"></span>
		                        </div>
                        	</div>
                        	<div class="col-md-4" id="btn_respFix">
                        		<div class="form-group">
		                        	<button style="cursor:pointer;" type="button"  id="btn_atencionc" class="btn btn-danger col-12 boton-hover pull-right">Enviar</button>
		                        </div>
                        	</div>
                        </div>
                    </form>
                    	<a href="https://www.col.gob.mx/BuzonQuejas" title="Buzón de quejas virtual">	
                        <img src="https://www.col.gob.mx/assets/img/contraloria.jpg" class="img-fluid pull-right" style="padding-top: 15px;" />
                        </a>

				</div>
			</div>
		</div>
		<div class="col-md-6 contacto-section-separador">
			<div class="row">
				<div class="sep10"></div>
				<div class="col-12 separador-padding-bottom-20">
					<div class="titulo_blanco size20 bold">Descarga nuestra app Trámites GOBCOL</div>
					<div class="row pt-4">
						<div class="col-6">
							<a class="btn btn-block custom-buttom-noticias responsive-width  " href="https://apps.apple.com/us/app/tr%C3%A1mites-gobcol/id1437562414?l=es&amp;ls=1" target="_blank" title="IOS"> <i class="fa fa-apple"></i> </a></div>
						<div class="col-6">
							<a class="btn btn-block custom-buttom-noticias responsive-width " href="https://play.google.com/store/apps/details?id=mx.gob.col.icsic.TramitesGobCol&amp;hl=es_419" target="_blank" title="android"> <i class="fa fa-android"></i> </a></div>
					</div>

				</div>
			</div>

			<div class="row mt-5" id="lyr_aciudadana">
				<div class="col-12 texto-blanco">
					<div class="sep10"></div>
					<div class="titulo_blanco size18 bold">Nuestra dirección</div>
					<div class="row">
						<div class="col-12 lyr_mapa" style="height: 240px;"><br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.8485308081886!2d-103.71490748509619!3d19.2454319869909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255aa40ddc3e2d%3A0xe7ac50c33373e7da!2sAv.+San+Fernando+533%2C+Jardines+de+las+Lomas%2C+28014+Colima%2C+Col.!5e0!3m2!1ses!2smx!4v1531511989622" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>						</div>
					</div>
				</div>
				<br>
				<p>&nbsp;</p>




			</div>
		</div>
                <div class="sep10"></div>

	</div>
</div>
<div class="sep5"></div>

<div class="modal fade" id="mdlMensaje" name="mdlMensaje" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">
	<div class="modal-dialog modal-m">
		<div class="modal-content">
			<div class="modal-header">
				<h3 style="margin:0;"></h3>
			</div>
			<div class="modal-body">
				<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>
			</div>
		</div>
	</div>
</div>      <!-- Modal -->
	<div class="modal fade" id="modal-mensajes-pu" tabindex="-1" role="dialog" aria-labelledby="modalGenericaPu" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modal-titulo-pu"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="modal-contenido-pu">
	       
	      </div>
	      <div class="modal-footer" id="modal-footer-pu">
	        <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal -->
   <footer class="footer">
   	<div class="container-fluid footer-backgroundcolor-pu">
   		<div class="container-fluid footer-back-dark">&nbsp;</div>
   		<div class="container">
	   		<div class="row">
	   			<div class="col-md-6 col-12 container-img-footer">
	   			 	<div class="row">
	   			 		<div class="col-md-12 col-12 ">
	   			 			<img class="img-fluid" src="https://openapis.col.gob.mx/API_PU/img/logo-colima-2021.png" alt="Colima">
	   			 		</div>
	   			 		<div class="col-md-12 col-12 hidden-sm-down">
	   			 			<p class="footer-texto-pu ">Complejo Administrativo del Gobierno del Estado 3er. Anillo Perif&eacute;rico, Esq. Ej&eacute;rcito Mexicano S/N. Colonia el Diezmo. C.P. 28010, Colima, Colima, M&eacute;xico. Tel. (312) 316 2000</p>
	   			 		</div>
	   			 		<div class="col-12 footer-link-left footer-links-color-pu">
                            <a class="linksfooter" href="http://www.col.gob.mx/Portal/mapa_sitio" target="_self" title="">Mapa del sitio</a> <br>
	   			 			<a target="_blank" class="linksfooter" href="http://www.col.gob.mx/Portal/contenido/MTA3MzI=" title="Pol&iacute;ticas de uso">Pol&iacute;ticas de uso y privacidad</a>
	   			 			<!-- http://www.col.gob.mx/portal/contenido/OTQ5MA== -->

	   			 		</div>
	   			 	</div>
	   			 </div> 
	   			 <div class="col-md-6 col-12">
	   			 	<div class="row footer-social-separador-pu">
	   			 		 <div class="col-12 text-center footer-social-separador-pu"> 
			   			 	<ul class="list-inline">
			   			 	  <li class="list-inline-item"><span class="footer-icon-separador-pu"></span><a href="https://www.facebook.com/gobiernocolima/" target="_blank" title="Facebook"><i class="fa fa-facebook-official footer-facebook fa-3x" aria-hidden="true"></a></i></li>
							  <li class="list-inline-item "><span class="footer-icon-separador-pu"></span><a href="https://twitter.com/gobiernocolima" target="_blank" title="Twitter"><i class="fa fa-twitter-square footer-twitter fa-3x" aria-hidden="true"></a></i></li>
							  <li class="list-inline-item "><span class="footer-icon-separador-pu"></span><a href="https://www.youtube.com/user/GobiernoColima" target="_blank" title="Youtube"><i class="fa fa-youtube-play footer-youtube fa-3x" aria-hidden="true"></a></i></li>
							  <!-- <li class="list-inline-item "><span class="footer-icon-separador-pu"></span><a href="http://gobiernocolima.blogspot.mx/" target="_blank" title="Blogspot"><i class="fa fa-rss-square footer-rss fa-3x" aria-hidden="true"></a></i></li> -->
							  <!-- <li class="list-inline-item "><span class="footer-icon-separador-pu"></span><a href="https://soundcloud.com/gobcolradio/" target="_blank" title="SoundCloud"><i class="fa fa-soundcloud footer-soundcloud fa-3x" aria-hidden="true"></a></i></li> -->
							</ul>
	   			 		</div> 
	   			 		<div class="col-12" >
                        <div class="row padding-left-30">
                        	<div class="col text-center">
                        		<i class="fa fa-download fa-2x"></i><br>
			   			 	  	<a href="http://www.col.gob.mx/Portal/intranet" target="_blank" title="Intranet" class="linksfooter">Intranet</a>
                        	</div>
                        	<!-- <div class="col text-center">
                        		 <i class="fa fa-qrcode fa-2x" aria-hidden="true"></i><br>
			   			 	  		<a href="http://www.firel.col.gob.mx/" target="_blank" title="Validación e.firma SAT" class="linksfooter">Validaci&oacute;n <br>e.firma SAT</a> 
                        	</div> -->
                        	<div class="col text-center">
                        		<i class="fa fa-user fa-2x" aria-hidden="true"></i><br>
			   			 	  	<a href="http://directoriointegral.col.gob.mx/" target="_blank" title="Directorio integral" class="linksfooter">Directorio <br> integral</a>
                        	</div>
                        	<div class="col text-center">
                        		<i class="fa fa-check-circle-o fa-2x" aria-hidden="true"></i><br>
			   			 	  		<a href="http://www.firel.col.gob.mx/" target="_blank" title="Validación de documentos con firma electrónica" class="linksfooter">Validaci&oacute;n &nbsp; <br> de documentos</a>
                        	</div>
                        </div>
	   			 		</div>
	   			 	</div>
	   			 </div>
	   		</div>
	   </div>
   	</div>
  </footer>
    <script type="text/javascript" src="https://openapis.col.gob.mx/API_PU/js/b4/tether.min.js"></script>
    <script type="text/javascript" src="https://openapis.col.gob.mx/API_PU/js/b4/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://openapis.col.gob.mx/API_PU/js/plugins/sweetalert/sweetalert2.all.js"></script>
    <script src="<?= base_url() ?>/assets/js/view2.js"></script>
    <!-- Font awesome -->
    <script type='text/javascript'> var site_url ='https://www.col.gob.mx/index.php'; </script><script src='https://www.col.gob.mx/assets/js/customjs.js' type='text/javascript'></script><script src='https://www.col.gob.mx/assets/js/menu-fixed-top-dpcias.js' type='text/javascript'></script><script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js' type='text/javascript'></script> <script src='https://www.col.gob.mx/assets/js/jquery.validate.min.js' type='text/javascript'></script><script src='https://www.col.gob.mx/assets/js/additional-methods.js' type='text/javascript'></script><script src='https://www.google.com/recaptcha/api.js'></script><script src='https://www.col.gob.mx/assets/js/enviar-email.js' type='text/javascript'></script><script src='https://www.col.gob.mx/assets/js/busquedageneral.js' type='text/javascript'></script><script src='https://www.col.gob.mx/assets/js/destacados.js' type='text/javascript'></script>
    <script type="text/javascript" src="https://openapis.col.gob.mx/API_PU/js/b4/colgob.js"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"d4962eb93a","applicationID":"128179107","transactionName":"YQMDMEYHV0QHWkxdXFhJNBZdSVBZAlxAGkNeFg==","queueTime":0,"applicationTime":38,"atts":"TUQARg4dREo=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html><br/><i class="fa fa-bullseye" aria-hidden="true" style="color: white;position: absolute;font-size: 8px;"></i>