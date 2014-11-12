/*
Name:       ImageFlow
Version:    1.3.0 (March 9 2010)
Author:     Finn Rudolph
Support:    http://finnrudolph.de/ImageFlow

License:    ImageFlow is licensed under a Creative Commons 
            Attribution-Noncommercial 3.0 Unported License 
            (http://creativecommons.org/licenses/by-nc/3.0/).

            You are free:
                + to Share - to copy, distribute and transmit the work
                + to Remix - to adapt the work

            Under the following conditions:
                + Attribution. You must attribute the work in the manner specified by the author or licensor 
                  (but not in any way that suggests that they endorse you or your use of the work). 
                + Noncommercial. You may not use this work for commercial purposes. 

            + For any reuse or distribution, you must make clear to others the license terms of this work.
            + Any of the above conditions can be waived if you get permission from the copyright holder.
            + Nothing in this license impairs or restricts the author's moral rights.

Credits:    This script is based on Michael L. Perrys Cover flow in Javascript [1].
            The reflections are generated server-sided by a slightly hacked version 
            of Richard Daveys easyreflections [2] written in PHP. The mouse wheel 
            support is an implementation of Adomas Paltanavicius JavaScript mouse 
            wheel code [3]. It also uses the domReadyEvent from Tanny O'Haley [4].

            [1] http://www.adventuresinsoftware.com/blog/?p=104#comment-1981
            [2] http://reflection.corephp.co.uk/v2.php
            [3] http://adomas.org/javascript-mouse-wheel/
            [4] http://tanny.ica.com/ICA/TKO/tkoblog.nsf/dx/domcontentloaded-for-browsers-part-v
*/

/* ImageFlow - compressed with http://dean.edwards.name/packer/ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('v 4Z(){u.2v={3Q:50,2N:1.5a,2J:y,30:C,1a:y,3j:\'1E\',S:\'5u\',2h:1.0,J:4,33:\'\',2f:C,3a:0.49,36:1.0,2z:v(){B.3V=u.2i},1Y:y,1T:[10,8,6,4,2],2x:5t,2y:1d,3e:C,2M:C,3G:\'\',1N:0.5,31:y,3L:\'\',3u:0.6,2G:C,2X:\'e-5m\',1q:14,1y:y,34:5n,3k:y,3r:1,3D:C,3H:y,1g:4w};9 t=u;u.X=v(a){17(9 b 3T t.2v){u[b]=(a!==1t&&a[b]!==1t)?a[b]:t.2v[b]}9 c=B.R(t.S);7(c){c.A.1H=\'2g\';u.N=c;7(u.3N()){u.H=B.R(t.S+\'5j\');u.2j=B.R(t.S+\'4z\');u.1V=B.R(t.S+\'3X\');u.1B=B.R(t.S+\'4c\');u.1R=B.R(t.S+\'4f\');u.3x=B.R(t.S+\'4j\');u.3l=B.R(t.S+\'4s\');u.1L=B.R(t.S+\'5e\');u.1M=[];u.1w=0;u.E=0;u.1C=0;u.1D=0;u.2q=C;u.2s=C;u.T=y;9 d=u.N.3F;9 e=W.11(d/t.2N);B.R(t.S+\'2A\').A.3b=((e*0.5)-22)+\'M\';c.A.1c=e+\'M\';u.21()}}};u.3N=v(){9 a=t.D.U(\'12\',\'23\');9 b,2S,1l,15;9 c=t.N.F.1r;17(9 d=0;d<c;d++){b=t.N.F[d];7(b&&b.24==1&&b.29==\'2b\'){7(t.2M===C){2S=(t.31)?\'3\':\'2\';1l=t.33+b.1z(\'1l\',2);1l=t.3L+\'3W\'+2S+\'.45?5p=\'+1l+t.3G;b.2d(\'1l\',1l)}15=b.1O(C);a.Q(15)}}7(t.1a){9 e=t.D.U(\'12\',\'23\');9 f=t.D.U(\'12\',\'23\');c=a.F.1r;7(c<t.J){t.J=c}7(c>1){9 i;17(i=0;i<c;i++){b=a.F[i];7(i<t.J){15=b.1O(C);e.Q(15)}7(c-i<t.J+1){15=b.1O(C);f.Q(15)}}17(i=0;i<c;i++){b=a.F[i];15=b.1O(C);f.Q(15)}17(i=0;i<t.J;i++){b=e.F[i];15=b.1O(C);f.Q(15)}a=f}}7(t.1y){9 g=t.D.U(\'12\',\'1y\');a.Q(g)}9 h=t.D.U(\'p\',\'52\');9 j=B.3h(\' \');h.Q(j);9 k=t.D.U(\'12\',\'3v\');9 l=t.D.U(\'12\',\'4o\');k.Q(l);9 m=t.D.U(\'12\',\'4J\');9 n=t.D.U(\'12\',\'57\');9 o=t.D.U(\'12\',\'2G\');n.Q(o);7(t.2J){9 p=t.D.U(\'12\',\'4t\',\'35\');9 q=t.D.U(\'12\',\'41\',\'35\');n.Q(p);n.Q(q)}9 r=t.D.U(\'12\',\'46\');r.Q(m);r.Q(n);9 s=y;7(t.N.Q(a)&&t.N.Q(h)&&t.N.Q(k)&&t.N.Q(r)){c=t.N.F.1r;17(d=0;d<c;d++){b=t.N.F[d];7(b&&b.24==1&&b.29==\'2b\'){t.N.5q(b)}}s=C}V s};u.21=v(){9 p=t.2Y();7((p<1d||t.2s)&&t.3e){7(t.2s&&p==1d){t.2s=y;L.1n(t.21,1d)}G{L.1n(t.21,40)}}G{B.R(t.S+\'2A\').A.1Z=\'2H\';B.R(t.S+\'4L\').A.1Z=\'2H\';L.1n(t.D.3c,4W);t.2m();7(t.O>1){t.1e.X();t.I.X();t.K.X();t.2o.X();7(t.1y){t.P.X()}7(t.2G){t.1B.A.1H=\'2g\'}}}};u.2Y=v(){9 a=t.H.F.1r;9 i=0,20=0;9 b=Z;17(9 c=0;c<a;c++){b=t.H.F[c];7(b&&b.24==1&&b.29==\'2b\'){7(b.2I){20++}i++}}9 d=W.11((20/i)*1d);9 e=B.R(t.S+\'5g\');e.A.1u=d+\'%\';7(t.1a){i=i-(t.J*2);20=(d<1)?0:W.11((i/1d)*d)}9 f=B.R(t.S+\'2A\');9 g=B.3h(\'3v 23 \'+20+\'/\'+i);f.5i(g,f.4i);V d};u.2m=v(){u.Y=t.H.3F+t.H.3I;u.1A=W.11(t.Y/t.2N);u.1U=t.J*t.1g;u.1I=t.Y*0.5;u.1q=t.1q*0.5;u.1f=(t.Y-(W.11(t.1q)*2))*t.3u;u.2u=W.11(t.1A*t.3a);t.N.A.1c=t.1A+\'M\';t.H.A.1c=t.2u+\'M\';t.1V.A.1c=(t.1A-t.2u)+\'M\';t.2j.A.1u=t.Y+\'M\';t.2j.A.3b=W.11(t.Y*0.3q)+\'M\';t.1B.A.1u=t.1f+\'M\';t.1B.A.4m=W.11(t.Y*0.3q)+\'M\';t.1B.A.2R=W.11(t.1q+((t.Y-t.1f)/2))+\'M\';t.1R.A.3s=t.2X;t.1R.4u=v(){t.I.1p(u);V y};7(t.2J){t.3l.1k=v(){t.1e.19(1)};t.3x.1k=v(){t.1e.19(-1)}}9 a=(t.2M===C)?t.1N+1:1;9 b=t.H.F.1r;9 i=0;9 c=Z;17(9 d=0;d<b;d++){c=t.H.F[d];7(c!==Z&&c.24==1&&c.29==\'2b\'){u.1M[i]=d;c.2i=c.1z(\'4D\');c.4F=(-i*t.1g);c.i=i;7(t.2q){7(c.1z(\'1u\')!==Z&&c.1z(\'1c\')!==Z){c.w=c.1z(\'1u\');c.h=c.1z(\'1c\')*a}G{c.w=c.1u;c.h=c.1c}}7((c.w)>(c.h/(t.1N+1))){c.1j=t.2x;c.26=t.2x}G{c.1j=t.2y;c.26=t.2y}7(t.2f===y){c.A.4O=\'4S\';c.A.1Z=\'4U\'}c.A.3s=t.3j;i++}}u.O=t.1M.1r;7(t.2f===y){c=t.H.F[t.1M[0]];u.3J=c.w*t.O;c.A.55=(t.Y/2)+(c.w/2)+\'M\';t.H.A.1c=c.h+\'M\';t.1V.A.1c=(t.1A-c.h)+\'M\'}7(t.2q){t.2q=y;t.E=t.3r-1;7(t.E<0){t.E=0}7(t.1a){t.E=t.E+t.J}2U=(t.1a)?(t.O-(t.J))-1:t.O-1;7(t.E>2U){t.E=2U}7(t.3D===y){t.1K(-t.E*t.1g)}7(t.3H){t.1K(5v)}}7(t.O>1){t.1J(t.E)}t.1K(t.1w)};u.1K=v(x){u.1w=x;u.1o=t.O;17(9 a=0;a<t.O;a++){9 b=t.H.F[t.1M[a]];9 c=a*-t.1g;7(t.2f){7((c+t.1U)<t.1D||(c-t.1U)>t.1D){b.A.1H=\'3S\';b.A.1Z=\'2H\'}G{9 z=(W.4I(4p+x*x)+1d)*t.36;9 d=x/z*t.1I+t.1I;b.A.1Z=\'4r\';9 e=(b.h/b.w*b.1j)/z*t.1I;9 f=0;1G(e>t.1A){1x y:f=b.1j/z*t.1I;13;1E:e=t.1A;f=b.w*e/b.h;13}9 g=(t.2u-e)+((e/(t.1N+1))*t.1N);b.A.2Z=d-(b.1j/2)/z*t.1I+\'M\';7(f&&e){b.A.1c=e+\'M\';b.A.1u=f+\'M\';b.A.5s=g+\'M\'}b.A.1H=\'2g\';1G(x<0){1x C:u.1o++;13;1E:u.1o=t.1o-1;13}1G(b.i==t.E){1x y:b.1k=v(){t.1J(u.i)};13;1E:u.1o=t.1o+1;7(b.2i!==\'\'){b.1k=t.2z}13}b.A.1o=t.1o}}G{7((c+t.1U)<t.1D||(c-t.1U)>t.1D){b.A.1H=\'3S\'}G{b.A.1H=\'2g\';1G(b.i==t.E){1x y:b.1k=v(){t.1J(u.i)};13;1E:7(b.2i!==\'\'){b.1k=t.2z}13}}t.H.A.2R=(x-t.3J)+\'M\'}x+=t.1g}};u.1J=v(a){9 b,1v;7(t.1a){7(a+1===t.J){1v=t.O-t.J;b=-1v*t.1g;a=1v-1}7(a===(t.O-t.J)){1v=t.J-1;b=-1v*t.1g;a=1v+1}}9 x=-a*t.1g;u.1C=x;u.1D=x;u.E=a;9 c=t.H.F[a].1z(\'4v\');7(c===\'\'||t.30===y){c=\'&56;\'}t.2j.4e=c;7(t.I.T===y){7(t.1a){u.1b=((a-t.J)*t.1f)/(t.O-(t.J*2)-1)-t.I.2k}G{u.1b=(a*t.1f)/(t.O-1)-t.I.2k}t.1R.A.2R=(t.1b-t.1q)+\'M\'}7(t.1Y===C||t.2h!==t.2v.2h){t.D.27(t.H.F[a],t.1T[0]);t.H.F[a].1j=t.H.F[a].1j*t.2h;9 d=0;9 e=0;9 f=0;9 g=t.1T.1r;17(9 i=1;i<(t.J+1);i++){7((i+1)>g){d=t.1T[g-1]}G{d=t.1T[i]}e=a+i;f=a-i;7(e<t.O){t.D.27(t.H.F[e],d);t.H.F[e].1j=t.H.F[e].26}7(f>=0){t.D.27(t.H.F[f],d);t.H.F[f].1j=t.H.F[f].26}}}7(b){t.1K(b)}7(t.T===y){t.T=C;t.2E()}};u.2E=v(){1G(t.1C<t.1w-1||t.1C>t.1w+1){1x C:t.1K(t.1w+(t.1C-t.1w)/3);L.1n(t.2E,t.3Q);t.T=C;13;1E:t.T=y;13}};u.2l=v(a){7(t.1y){t.P.2c()}t.1J(a)};u.P={2n:1,X:v(){(t.3k)?t.P.1p():t.P.1h()},2c:v(){t.D.2L(t.N,\'3m\',t.P.2c);t.P.1h()},3o:v(){t.D.16(t.N,\'3m\',t.P.2c)},1p:v(){t.D.25(t.1L,\'1y 43\');t.1L.1k=v(){t.P.1h()};t.P.3t=L.47(t.P.2P,t.34);L.1n(t.P.3o,1d)},1h:v(){t.D.25(t.1L,\'1y 4b\');t.1L.1k=v(){t.P.1p()};L.4d(t.P.3t)},2P:v(){9 a=t.E+t.P.2n;9 b=y;7(a===t.O){t.P.2n=-1;b=C}7(a<0){t.P.2n=1;b=C}(b)?t.P.2P():t.1J(a)}};u.1e={X:v(){7(L.1m){t.N.1m(\'4h\',t.1e.1W,y)}t.D.16(t.N,\'4k\',t.1e.1W)},1W:v(a){9 b=0;7(!a){a=L.1F}7(a.3z){b=a.3z/4q}G 7(a.3B){b=-a.3B/3}7(b){t.1e.19(b)}t.D.2p(a)},19:v(a){9 b=y;9 c=0;7(a>0){7(t.E>=1){c=t.E-1;b=C}}G{7(t.E<(t.O-1)){c=t.E+1;b=C}}7(b){t.2l(c)}}};u.I={1P:Z,2T:0,2e:0,2k:0,T:y,X:v(){t.D.16(t.N,\'4B\',t.I.3K);t.D.16(t.N,\'3M\',t.I.1h);t.D.16(B,\'3M\',t.I.1h);t.N.4H=v(){9 a=C;7(t.I.T){a=y}V a}},1p:v(o){t.I.1P=o;t.I.2T=t.I.2e-o.3I+t.1b},1h:v(){t.I.1P=Z;t.I.T=y},3K:v(e){9 a=0;7(!e){e=L.1F}7(e.2D){a=e.2D}G 7(e.3P){a=e.3P+B.2K.3d+B.4Q.3d}t.I.2e=a;7(t.I.1P!==Z){9 b=(t.I.2e-t.I.2T)+t.1q;7(b<(-t.1b)){b=-t.1b}7(b>(t.1f-t.1b)){b=t.1f-t.1b}9 c,E;7(t.1a){c=(b+t.1b)/(t.1f/(t.O-(t.J*2)-1));E=W.11(c)+t.J}G{c=(b+t.1b)/(t.1f/(t.O-1));E=W.11(c)}t.I.2k=b;t.I.1P.A.2Z=b+\'M\';7(t.E!==E){t.2l(E)}t.I.T=C}}};u.K={x:0,2B:0,2r:0,T:y,2F:C,X:v(){t.D.16(t.1V,\'4Y\',t.K.1p);t.D.16(B,\'51\',t.K.19);t.D.16(B,\'53\',t.K.1h)},3f:v(e){9 a=y;7(e.28){9 b=e.28[0].1C;7(b===t.1V||b===t.1R||b===t.1B){a=C}}V a},2C:v(e){9 x=0;7(e.28){x=e.28[0].2D}V x},1p:v(e){t.K.2B=t.K.2C(e);t.K.T=C;t.D.2p(e)},3w:v(){9 a=y;7(t.K.T){a=C}V a},19:v(e){7(t.K.3w&&t.K.3f(e)){9 a=(t.1a)?(t.O-(t.J*2)-1):(t.O-1);7(t.K.2F){t.K.2r=(a-t.E)*(t.Y/a);t.K.2F=y}9 b=-(t.K.2C(e)-t.K.2B-t.K.2r);7(b<0){b=0}7(b>t.Y){b=t.Y}t.K.x=b;9 c=W.11(b/(t.Y/a));c=a-c;7(t.E!==c){7(t.1a){c=c+t.J}t.2l(c)}t.D.2p(e)}},1h:v(){t.K.2r=t.K.x;t.K.T=y}};u.2o={X:v(){B.5d=v(a){t.2o.19(a)}},19:v(a){9 b=t.2o.1W(a);1G(b){1x 39:t.1e.19(-1);13;1x 37:t.1e.19(1);13}},1W:v(a){a=a||L.1F;V a.5h}};u.D={16:v(a,b,c){7(a.1m){a.1m(b,c,y)}G 7(a.3g){a["e"+b+c]=c;a[b+c]=v(){a["e"+b+c](L.1F)};a.3g("3y"+b,a[b+c])}},2L:v(a,b,c){7(a.32){a.32(b,c,y)}G 7(a.3A){7(a[b+c]===1t){5r(\'D.2L � 4G 3i 3C 1F 48 1t - 4K 4l 4M 42 3i 3C 4N 4n 1F?\')}a.3A(\'3y\'+b,a[b+c]);a[b+c]=Z;a[\'e\'+b+c]=Z}},27:v(a,b){7(t.1Y===C){a.A.1Y=b/10;a.A.4P=\'4a(1Y=\'+b*10+\')\'}},U:v(a,b,c){9 d=B.4R(a);d.2d(\'38\',t.S+\'4T\'+b);7(c!==1t){b+=\' \'+c}t.D.25(d,b);V d},25:v(a,b){7(a){a.2d(\'3Z\',b);a.2d(\'4V\',b)}},2p:v(e){7(e.3E){e.3E()}G{e.4X=y}V y},3c:v(){9 a=L.2t;7(1X L.2t!=\'v\'){L.2t=v(){t.2m()}}G{L.2t=v(){7(a){a()}t.2m()}}}}}9 1i={2Q:"1i",1S:{},1s:1,1Q:y,2O:Z,3n:v(a){7(!a.$$1s){a.$$1s=u.1s++;7(u.1Q){a()}u.1S[a.$$1s]=a}},58:v(a){7(a.$$1s){4x u.1S[a.$$1s]}},18:v(){7(u.1Q){V}u.1Q=C;17(9 i 3T u.1S){u.1S[i]()}},2w:v(){7(u.1Q){V}7(/5c|4y/i.3O(4g.5f)){7(/4A|2I/.3O(B.3p)){u.18()}G{1n(u.2Q+".2w()",1d)}}G 7(B.R("2V")){V C}7(1X u.2O==="v"){7(1X B.2W!==\'1t\'&&(B.2W(\'2K\')[0]!==Z||B.2K!==Z)){7(u.2O()){u.18()}G{1n(u.2Q+".2w()",4C)}}}V C},X:v(){7(B.1m){B.1m("5k",v(){1i.18()},y)}1n("1i.2w()",1d);v 18(){1i.18()}7(1X 16!=="1t"){16(L,"3R",18)}G 7(B.1m){B.1m("3R",18,y)}G 7(1X L.2a==="v"){9 a=L.2a;L.2a=v(){1i.18();a()}}G{L.2a=18}/*@4E@7(@5o||@3Y)B.44("<3U 38=2V 54 1l=\\"//:\\"><\\/3U>");9 b=B.R("2V");b.59=v(){7(u.3p=="2I"){1i.18()}};@5b@*/}};9 5l=v(a){1i.3n(a)};1i.X();',62,342,'|||||||if||var|||||||||||||||||||||this|function|||false||style|document|true|Helper|imageID|childNodes|else|imagesDiv|MouseDrag|imageFocusMax|Touch|window|px|ImageFlowDiv|max|Slideshow|appendChild|getElementById|ImageFlowID|busy|createDocumentElement|return|Math|init|imagesDivWidth|null||round|div|break||imageNode|addEvent|for|run|handle|circular|newSliderX|height|100|MouseWheel|scrollbarWidth|xStep|stop|domReadyEvent|pc|onclick|src|addEventListener|setTimeout|zIndex|start|sliderWidth|length|domReadyID|undefined|width|clonedImageID|current|case|slideshow|getAttribute|maxHeight|scrollbarDiv|target|memTarget|default|event|switch|visibility|size|glideTo|moveTo|buttonSlideshow|indexArray|reflectionP|cloneNode|object|bDone|sliderDiv|events|opacityArray|maxFocus|navigationDiv|get|typeof|opacity|display|completed|loadingProgress||images|nodeType|setClassName|pcMem|setOpacity|touches|nodeName|onload|IMG|interrupt|setAttribute|mouseX|imageScaling|visible|imageFocusM|url|captionDiv|newX|glideOnEvent|refresh|direction|Key|suppressBrowserDefault|firstRefresh|stopX|firstCheck|onresize|imagesDivHeight|defaults|schedule|percentLandscape|percentOther|onClick|_loading_txt|startX|getX|pageX|animate|first|slider|none|complete|buttons|body|removeEvent|reflections|aspectRatio|DOMContentLoadedCustom|slide|name|marginLeft|version|objectX|maxId|__ie_onload|getElementsByTagName|sliderCursor|loadingStatus|left|captions|reflectionPNG|removeEventListener|imagePath|slideshowSpeed|button|imagesM||id||imagesHeight|paddingTop|addResizeEvent|scrollLeft|preloadImages|isOnNavigationDiv|attachEvent|createTextNode|to|imageCursor|slideshowAutoplay|buttonPreviousDiv|click|add|addInterruptEvent|readyState|02|startID|cursor|action|scrollbarP|loading|isBusy|buttonNextDiv|on|wheelDelta|detachEvent|detail|detach|glideToStartID|preventDefault|offsetWidth|reflectionGET|startAnimation|offsetLeft|totalImagesWidth|drag|reflectPath|mouseup|createStructure|test|clientX|animationSpeed|load|hidden|in|script|location|reflect|_navigation|_win64|class||next|trying|pause|write|php|navigation|setInterval|is|67|alpha|play|_scrollbar|clearInterval|innerHTML|_slider|navigator|DOMMouseScroll|firstChild|_next|mousewheel|you|marginTop|unattached|loading_bar|10000|120|block|_previous|previous|onmousedown|alt|150|delete|WebKit|_caption|loaded|mousemove|250|longdesc|cc_on|xPosition|Pointer|onselectstart|sqrt|caption|perhaps|_loading|are|an|position|filter|documentElement|createElement|relative|_|inline|className|1000|returnValue|touchstart|ImageFlow||touchmove|loading_txt|touchend|defer|paddingLeft|nbsp|scrollbar|remove|onreadystatechange|964|end|KHTML|onkeydown|_slideshow|userAgent|_loading_bar|keyCode|replaceChild|_images|DOMContentLoaded|domReady|resize|1500|_win32|img|removeChild|alert|top|118|imageflow|5000'.split('|'),0,{}));

/* Create ImageFlow instances when the DOM structure has been loaded */
domReady(function()
{
	/* Demo */
	var Demo = new ImageFlow();
	Demo.init({ ImageFlowID:'demo' });


	/* Basic Examples */
	var basic_1 = new ImageFlow();
	basic_1.init({ ImageFlowID:'myImageFlow' });

	var basic_2 = new ImageFlow();
	basic_2.init({ ImageFlowID:'basic_2', reflections:false, reflectionP:0.0 });

	var basic_3 = new ImageFlow();
	basic_3.init({ ImageFlowID:'basic_3', reflections:false, reflectionP:0.0, slider:false });

	var basic_4 = new ImageFlow();
	basic_4.init({ ImageFlowID:'basic_4', reflections:false, reflectionP:0.0, slider:false, captions:false });

	var basic_5 = new ImageFlow();
	basic_5.init({ ImageFlowID:'basic_5', reflections:false, reflectionP:0.4, slider:false, captions:false });


	/* Behaviour Examples */
	var behaviour_1 = new ImageFlow();
	behaviour_1.init({ ImageFlowID:'behaviour_1', startID:3 });

	var behaviour_2 = new ImageFlow();
	behaviour_2.init({ ImageFlowID:'behaviour_2', startAnimation:true });

	var behaviour_3 = new ImageFlow();
	behaviour_3.init({ ImageFlowID:'behaviour_3', imageFocusMax:1 });

	var behaviour_4 = new ImageFlow();
	behaviour_4.init({ ImageFlowID:'behaviour_4', imageFocusM:1.4, startID:3 });

	var behaviour_5 = new ImageFlow();
	behaviour_5.init({ ImageFlowID:'behaviour_5', xStep:300 });
	
	var behaviour_6 = new ImageFlow();
	behaviour_6.init({ ImageFlowID:'behaviour_6', buttons:true });


	/* Opacity Examples */
	var opacity_1 = new ImageFlow();
	opacity_1.init({ ImageFlowID:'opacity_1', opacity:true});

	var opacity_2 = new ImageFlow();
	opacity_2.init({ ImageFlowID:'opacity_2', opacity:true, opacityArray: [4,3,2,1,1] });
	
	
	/* Target Examples */
	var target_1 = new ImageFlow();
	target_1.init({ ImageFlowID:'target_1', onClick: function() { window.open(this.url, '_blank');  } });

	var target_2 = new ImageFlow();
	target_2.init({ ImageFlowID:'target_2', onClick: function() { window.open(this.url, '_blank', 'width=500,height=500,left=200,top=200');  } });


	/* Reflection Examples */
	var reflection_1 = new ImageFlow();
	reflection_1.init({ ImageFlowID:'reflection_1', reflectionGET:'&bgc=009cec' });

	var reflection_2 = new ImageFlow();
	reflection_2.init({ ImageFlowID:'reflection_2', reflectionGET:'&bgc=ffffff&fade_start=20%' });

	var reflection_3 = new ImageFlow();
	reflection_3.init({ ImageFlowID:'reflection_3', reflectionGET:'&fade_start=20%' });

	var reflection_4 = new ImageFlow();
	reflection_4.init({ ImageFlowID:'reflection_4', reflectionGET:'&height=20%', reflectionP:0.2 });

	var reflection_5 = new ImageFlow();
	reflection_5.init({ ImageFlowID:'reflection_5', reflectionPNG:true });

	
	/* Proportion Examples */
	var proportion_1 = new ImageFlow();
	proportion_1.init({ ImageFlowID:'proportion_1', aspectRatio:2.333, imagesHeight:0.7 });

	var proportion_2 = new ImageFlow();
	proportion_2.init({ ImageFlowID:'proportion_2', aspectRatio:3.0, imagesM:0.8, xStep: 70, percentLandscape:66, percentOther:50, imageFocusMax:3 });

	var proportion_3 = new ImageFlow();
	proportion_3.init({ ImageFlowID:'proportion_3', aspectRatio:1.618  });

	var proportion_4 = new ImageFlow();
	proportion_4.init({ ImageFlowID:'proportion_4', imageScaling:false, reflections:false, xStep:220, imageFocusMax:2 });
	
	
	/* Circular Examples */
	var circular_1 = new ImageFlow();
	circular_1.init({ ImageFlowID:'circular_1', circular:true, glideToStartID:false });
	
	var circular_2 = new ImageFlow();
	circular_2.init({ ImageFlowID:'circular_2', circular:true, glideToStartID:false, slider:false});
	
	var circular_3 = new ImageFlow();
	circular_3.init({ ImageFlowID:'circular_3',  circular:true, reflections:false, reflectionP:0.4, slider:false, captions:false, opacity:true, xStep:250, imageFocusM:1.5, startID:3 });

	
	/* Slideshow Examples */
	var slideshow_1 = new ImageFlow();
	slideshow_1.init({ ImageFlowID:'slideshow_1', slideshow:true});
	
	var slideshow_2 = new ImageFlow();
	slideshow_2.init({ ImageFlowID:'slideshow_2', slideshow:true, slideshowAutoplay:true});
	
	var slideshow_3 = new ImageFlow();
	slideshow_3.init({ ImageFlowID:'slideshow_3', slideshow:true, slideshowSpeed:3000, circular:true, slider:false});


	/* Highslide */
	var Highslide_1 = new ImageFlow();
	Highslide_1.init({ ImageFlowID:'Highslide_1', onClick: function() { return hs.expand(this, {src: this.getAttribute('longdesc')} ); } });

	var Highslide_2 = new ImageFlow();
	Highslide_2.init({ ImageFlowID:'Highslide_2', onClick: function() { return hs.expand(this, {src: this.getAttribute('longdesc'), outlineType: 'rounded-white', showCredits: false, fadeInOut:true }); } });

	var Highslide_3 = new ImageFlow();
	Highslide_3.init({ ImageFlowID:'Highslide_3', onClick: function() { return hs.expand(this, {src: this.getAttribute('longdesc'), outlineType: 'rounded-white', showCredits: false, fadeInOut:true, captionText: this.getAttribute('alt')}); } });

});