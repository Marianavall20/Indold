/*
 Highcharts JS v6.1.2 (2018-08-31)
 Boost module

 (c) 2010-2017 Highsoft AS
 Author: Torstein Honsi

 License: www.highcharts.com/license
*/
(function(u){"object"===typeof module&&module.exports?module.exports=u:"function"===typeof define&&define.amd?define(function(){return u}):u(Highcharts)})(function(u){(function(k){function u(){var a=Array.prototype.slice.call(arguments),c=-Number.MAX_VALUE;l(a,function(a){if("undefined"!==typeof a&&null!==a&&"undefined"!==typeof a.length&&0<a.length)return c=a.length,!0});return c}function R(a){var c=0,d=0,f=F(a.options.boost&&a.options.boost.allowForce,!0),b;if("undefined"!==typeof a.boostForceChartBoost)return a.boostForceChartBoost;
if(1<a.series.length)for(var g=0;g<a.series.length;g++)b=a.series[g],A[b.type]&&++d,u(b.processedXData,b.options.data,b.points)>=(b.options.boostThreshold||Number.MAX_VALUE)&&++c;a.boostForceChartBoost=f&&d===a.series.length&&0<c||5<c;return a.boostForceChartBoost}function na(a){function c(b,e){e=a.createShader("vertex"===e?a.VERTEX_SHADER:a.FRAGMENT_SHADER);a.shaderSource(e,b);a.compileShader(e);return a.getShaderParameter(e,a.COMPILE_STATUS)?e:!1}function d(){function b(b){return a.getUniformLocation(g,
b)}var d=c("#version 100\nprecision highp float;\nattribute vec4 aVertexPosition;\nattribute vec4 aColor;\nvarying highp vec2 position;\nvarying highp vec4 vColor;\nuniform mat4 uPMatrix;\nuniform float pSize;\nuniform float translatedThreshold;\nuniform bool hasThreshold;\nuniform bool skipTranslation;\nuniform float plotHeight;\nuniform float xAxisTrans;\nuniform float xAxisMin;\nuniform float xAxisMinPad;\nuniform float xAxisPointRange;\nuniform float xAxisLen;\nuniform bool  xAxisPostTranslate;\nuniform float xAxisOrdinalSlope;\nuniform float xAxisOrdinalOffset;\nuniform float xAxisPos;\nuniform bool  xAxisCVSCoord;\nuniform float yAxisTrans;\nuniform float yAxisMin;\nuniform float yAxisMinPad;\nuniform float yAxisPointRange;\nuniform float yAxisLen;\nuniform bool  yAxisPostTranslate;\nuniform float yAxisOrdinalSlope;\nuniform float yAxisOrdinalOffset;\nuniform float yAxisPos;\nuniform bool  yAxisCVSCoord;\nuniform bool  isBubble;\nuniform bool  bubbleSizeByArea;\nuniform float bubbleZMin;\nuniform float bubbleZMax;\nuniform float bubbleZThreshold;\nuniform float bubbleMinSize;\nuniform float bubbleMaxSize;\nuniform bool  bubbleSizeAbs;\nuniform bool  isInverted;\nfloat bubbleRadius(){\nfloat value \x3d aVertexPosition.w;\nfloat zMax \x3d bubbleZMax;\nfloat zMin \x3d bubbleZMin;\nfloat radius \x3d 0.0;\nfloat pos \x3d 0.0;\nfloat zRange \x3d zMax - zMin;\nif (bubbleSizeAbs){\nvalue \x3d value - bubbleZThreshold;\nzMax \x3d max(zMax - bubbleZThreshold, zMin - bubbleZThreshold);\nzMin \x3d 0.0;\n}\nif (value \x3c zMin){\nradius \x3d bubbleZMin / 2.0 - 1.0;\n} else {\npos \x3d zRange \x3e 0.0 ? (value - zMin) / zRange : 0.5;\nif (bubbleSizeByArea \x26\x26 pos \x3e 0.0){\npos \x3d sqrt(pos);\n}\nradius \x3d ceil(bubbleMinSize + pos * (bubbleMaxSize - bubbleMinSize)) / 2.0;\n}\nreturn radius * 2.0;\n}\nfloat translate(float val,\nfloat pointPlacement,\nfloat localA,\nfloat localMin,\nfloat minPixelPadding,\nfloat pointRange,\nfloat len,\nbool  cvsCoord\n){\nfloat sign \x3d 1.0;\nfloat cvsOffset \x3d 0.0;\nif (cvsCoord) {\nsign *\x3d -1.0;\ncvsOffset \x3d len;\n}\nreturn sign * (val - localMin) * localA + cvsOffset + \n(sign * minPixelPadding);\n}\nfloat xToPixels(float value){\nif (skipTranslation){\nreturn value;// + xAxisPos;\n}\nreturn translate(value, 0.0, xAxisTrans, xAxisMin, xAxisMinPad, xAxisPointRange, xAxisLen, xAxisCVSCoord);// + xAxisPos;\n}\nfloat yToPixels(float value, float checkTreshold){\nfloat v;\nif (skipTranslation){\nv \x3d value;// + yAxisPos;\n} else {\nv \x3d translate(value, 0.0, yAxisTrans, yAxisMin, yAxisMinPad, yAxisPointRange, yAxisLen, yAxisCVSCoord);// + yAxisPos;\nif (v \x3e plotHeight) {\nv \x3d plotHeight;\n}\n}\nif (checkTreshold \x3e 0.0 \x26\x26 hasThreshold) {\nv \x3d min(v, translatedThreshold);\n}\nreturn v;\n}\nvoid main(void) {\nif (isBubble){\ngl_PointSize \x3d bubbleRadius();\n} else {\ngl_PointSize \x3d pSize;\n}\nvColor \x3d aColor;\nif (isInverted) {\ngl_Position \x3d uPMatrix * vec4(xToPixels(aVertexPosition.y) + yAxisPos, yToPixels(aVertexPosition.x, aVertexPosition.z) + xAxisPos, 0.0, 1.0);\n} else {\ngl_Position \x3d uPMatrix * vec4(xToPixels(aVertexPosition.x) + xAxisPos, yToPixels(aVertexPosition.y, aVertexPosition.z) + yAxisPos, 0.0, 1.0);\n}\n}",
"vertex"),f=c("precision highp float;\nuniform vec4 fillColor;\nvarying highp vec2 position;\nvarying highp vec4 vColor;\nuniform sampler2D uSampler;\nuniform bool isCircle;\nuniform bool hasColor;\nvoid main(void) {\nvec4 col \x3d fillColor;\nvec4 tcol;\nif (hasColor) {\ncol \x3d vColor;\n}\nif (isCircle) {\ntcol \x3d texture2D(uSampler, gl_PointCoord.st);\ncol *\x3d tcol;\nif (tcol.r \x3c 0.0) {\ndiscard;\n} else {\ngl_FragColor \x3d col;\n}\n} else {\ngl_FragColor \x3d col;\n}\n}","fragment");
if(!d||!f)return g=!1;g=a.createProgram();a.attachShader(g,d);a.attachShader(g,f);a.linkProgram(g);a.useProgram(g);a.bindAttribLocation(g,0,"aVertexPosition");k=b("uPMatrix");m=b("pSize");S=b("fillColor");v=b("isBubble");h=b("bubbleSizeAbs");B=b("bubbleSizeByArea");q=b("uSampler");e=b("skipTranslation");w=b("isCircle");l=b("isInverted");z=b("plotHeight");return!0}function f(e,c){e=b[e]=b[e]||a.getUniformLocation(g,e);a.uniform1f(e,c)}var b={},g,k,m,S,v,h,B,e,w,l,z,q;a&&d();return{psUniform:function(){return m},
pUniform:function(){return k},fillColorUniform:function(){return S},setPlotHeight:function(b){a.uniform1f(z,b)},setBubbleUniforms:function(b,e,c){var d=b.options,g=Number.MAX_VALUE,k=-Number.MAX_VALUE;"bubble"===b.type&&(g=F(d.zMin,Math.min(g,Math.max(e,!1===d.displayNegative?d.zThreshold:-Number.MAX_VALUE))),k=F(d.zMax,Math.max(k,c)),a.uniform1i(v,1),a.uniform1i(w,1),a.uniform1i(B,"width"!==b.options.sizeBy),a.uniform1i(h,b.options.sizeByAbsoluteValue),f("bubbleZMin",g),f("bubbleZMax",k),f("bubbleZThreshold",
b.options.zThreshold),f("bubbleMinSize",b.minPxSize),f("bubbleMaxSize",b.maxPxSize))},bind:function(){a.useProgram(g)},program:function(){return g},create:d,setUniform:f,setPMatrix:function(b){a.uniformMatrix4fv(k,!1,b)},setColor:function(b){a.uniform4f(S,b[0]/255,b[1]/255,b[2]/255,b[3])},setPointSize:function(b){a.uniform1f(m,b)},setSkipTranslation:function(b){a.uniform1i(e,!0===b?1:0)},setTexture:function(b){a.uniform1i(q,b)},setDrawAsCircle:function(b){a.uniform1i(w,b?1:0)},reset:function(){a.uniform1i(v,
0);a.uniform1i(w,0)},setInverted:function(b){a.uniform1i(l,b)},destroy:function(){a&&g&&(a.deleteProgram(g),g=!1)}}}function O(a,c,d){function f(){b&&(a.deleteBuffer(b),g=b=!1);l=0;k=d||2;v=[]}var b=!1,g=!1,k=d||2,m=!1,l=0,v;return{destroy:f,bind:function(){if(!b)return!1;a.vertexAttribPointer(g,k,a.FLOAT,!1,0,0)},data:v,build:function(d,B,e){var h;v=d||[];if(!(v&&0!==v.length||m))return f(),!1;k=e||k;b&&a.deleteBuffer(b);m||(h=new Float32Array(v));b=a.createBuffer();a.bindBuffer(a.ARRAY_BUFFER,b);
a.bufferData(a.ARRAY_BUFFER,m||h,a.STATIC_DRAW);g=a.getAttribLocation(c.program(),B);a.enableVertexAttribArray(g);return!0},render:function(c,d,e){var f=m?m.length:v.length;if(!b||!f)return!1;if(!c||c>f||0>c)c=0;if(!d||d>f)d=f;a.drawArrays(a[(e||"points").toUpperCase()],c/k,(d-c)/k);return!0},allocate:function(a){l=-1;m=new Float32Array(4*a)},push:function(a,b,e,c){m&&(m[++l]=a,m[++l]=b,m[++l]=e,m[++l]=c)}}}function pa(a){function c(a){var b,e;return a.isSeriesBoosting?(b=!!a.options.stacking,e=a.xData||
a.options.xData||a.processedXData,b=(b?a.data:e||a.options.data).length,"treemap"===a.type?b*=12:"heatmap"===a.type?b*=6:fa[a.type]&&(b*=2),b):0}function d(){e.clear(e.COLOR_BUFFER_BIT|e.DEPTH_BUFFER_BIT)}function f(a,b){function e(a){a&&(b.colorData.push(a[0]),b.colorData.push(a[1]),b.colorData.push(a[2]),b.colorData.push(a[3]))}function c(a,b,c,d,f){e(f);r.usePreallocated?B.push(a,b,c?1:0,d||1):(z.push(a),z.push(b),z.push(c?1:0),z.push(d||1))}function d(){b.segments.length&&(b.segments[b.segments.length-
1].to=z.length)}function f(){b.segments.length&&b.segments[b.segments.length-1].from===z.length||(d(),b.segments.push({from:z.length}))}function G(a,b,d,f,G){e(G);c(a+d,b);e(G);c(a,b);e(G);c(a,b+f);e(G);c(a,b+f);e(G);c(a+d,b+f);e(G);c(a+d,b)}function ha(a,e){r.useGPUTranslations||(b.skipTranslation=!0,a.x=D.toPixels(a.x,!0),a.y=y.toPixels(a.y,!0));e?z=[a.x,a.y,0,2].concat(z):c(a.x,a.y,0,2)}var h=a.pointArrayMap&&"low,high"===a.pointArrayMap.join(","),g=a.chart,P=a.options,m=!!P.stacking,I=P.data,
T=a.xAxis.getExtremes(),q=T.min,T=T.max,v=a.yAxis.getExtremes(),w=v.min,v=v.max,n=a.xData||P.xData||a.processedXData,E=a.yData||P.yData||a.processedYData,u=a.zData||P.zData||a.processedZData,y=a.yAxis,D=a.xAxis,K=a.chart.plotHeight,ea=a.chart.plotWidth,F=!n||0===n.length,J=P.connectNulls,p=a.points||!1,A=!1,S=!1,x,U,V,I=m?a.data:n||I,n={x:Number.MAX_VALUE,y:0},H={x:-Number.MAX_VALUE,y:0},L=0,M=!1,t,N,C=-1,Z=!1,aa=!1,ba,oa="undefined"===typeof g.index,Q=!1,Y=!1,R=fa[a.type],ga=!1,O=!0,X=P.threshold;
if(!(P.boostData&&0<P.boostData.length)){g.inverted&&(K=a.chart.plotWidth,ea=a.chart.plotHeight);a.closestPointRangePx=Number.MAX_VALUE;f();if(p&&0<p.length)b.skipTranslation=!0,b.drawMode="triangles",p[0].node&&p[0].node.levelDynamic&&p.sort(function(a,b){if(a.node){if(a.node.levelDynamic>b.node.levelDynamic)return 1;if(a.node.levelDynamic<b.node.levelDynamic)return-1}return 0}),l(p,function(b){var e=b.plotY,c;"undefined"===typeof e||isNaN(e)||null===b.y||(e=b.shapeArgs,c=b.series.colorAttribs(b),
b=c["stroke-width"]||0,U=k.color(c.fill).rgba,U[0]/=255,U[1]/=255,U[2]/=255,"treemap"===a.type&&(b=b||1,V=k.color(c.stroke).rgba,V[0]/=255,V[1]/=255,V[2]/=255,G(e.x,e.y,e.width,e.height,V),b/=2),"heatmap"===a.type&&g.inverted&&(e.x=D.len-e.x,e.y=y.len-e.y,e.width=-e.width,e.height=-e.height),G(e.x+b,e.y+b,e.width-2*b,e.height-2*b,U))});else{for(;C<I.length-1;){x=I[++C];if(oa)break;F?(p=x[0],t=x[1],I[C+1]&&(aa=I[C+1][0]),I[C-1]&&(Z=I[C-1][0]),3<=x.length&&(N=x[2],x[2]>b.zMax&&(b.zMax=x[2]),x[2]<b.zMin&&
(b.zMin=x[2]))):(p=x,t=E[C],I[C+1]&&(aa=I[C+1]),I[C-1]&&(Z=I[C-1]),u&&u.length&&(N=u[C],u[C]>b.zMax&&(b.zMax=u[C]),u[C]<b.zMin&&(b.zMin=u[C])));if(J||null!==p&&null!==t){if(aa&&aa>=q&&aa<=T&&(Q=!0),Z&&Z>=q&&Z<=T&&(Y=!0),h?(F&&(t=x.slice(1,3)),ba=t[0],t=t[1]):m&&(p=x.x,t=x.stackY,ba=t-x.y),null!==w&&"undefined"!==typeof w&&null!==v&&"undefined"!==typeof v&&(O=t>=w&&t<=v),p>T&&H.x<T&&(H.x=p,H.y=t),p<q&&n.x>q&&(n.x=p,n.y=t),null!==t||!J)if(null!==t&&O){if(p>=q&&p<=T&&(ga=!0),ga||Q||Y){r.useGPUTranslations||
(b.skipTranslation=!0,p=D.toPixels(p,!0),t=y.toPixels(t,!0),t>K&&(t=K),p>ea&&(p=ea));if(R){x=ba;if(!1===ba||"undefined"===typeof ba)x=0>t?t:0;h||m||(x=Math.max(X,w));r.useGPUTranslations||(x=y.toPixels(x,!0));c(p,x,0,0,!1)}b.hasMarkers&&!1!==A&&(a.closestPointRangePx=Math.min(a.closestPointRangePx,Math.abs(p-A)));!r.useGPUTranslations&&!r.usePreallocated&&A&&1>p-A&&S&&1>Math.abs(t-S)?r.debug.showSkipSummary&&++L:(P.step&&c(p,S,0,2,!1),c(p,t,0,"bubble"===a.type?N||1:2,!1),A=p,S=t,M=!0)}}else f()}else f()}r.debug.showSkipSummary&&
console.log("skipped points:",L);M||!1===J||"line_strip"!==a.drawMode||(n.x<Number.MAX_VALUE&&ha(n,!0),H.x>-Number.MAX_VALUE&&ha(H))}d()}}function b(){E=[];y.data=z=[];u=[];B&&B.destroy()}function g(a){h&&(h.setUniform("xAxisTrans",a.transA),h.setUniform("xAxisMin",a.min),h.setUniform("xAxisMinPad",a.minPixelPadding),h.setUniform("xAxisPointRange",a.pointRange),h.setUniform("xAxisLen",a.len),h.setUniform("xAxisPos",a.pos),h.setUniform("xAxisCVSCoord",!a.horiz))}function q(a){h&&(h.setUniform("yAxisTrans",
a.transA),h.setUniform("yAxisMin",a.min),h.setUniform("yAxisMinPad",a.minPixelPadding),h.setUniform("yAxisPointRange",a.pointRange),h.setUniform("yAxisLen",a.len),h.setUniform("yAxisPos",a.pos),h.setUniform("yAxisCVSCoord",!a.horiz))}function m(a,b){h.setUniform("hasThreshold",a);h.setUniform("translatedThreshold",b)}function n(c){if(c)w=c.chartWidth||800,K=c.chartHeight||400;else return!1;if(!e||!w||!K)return!1;r.debug.timeRendering&&console.time("gl rendering");e.canvas.width=w;e.canvas.height=
K;h.bind();e.viewport(0,0,w,K);h.setPMatrix([2/w,0,0,0,0,-(2/K),0,0,0,0,-2,0,-1,1,-1,1]);h.setPlotHeight(c.plotHeight);1<r.lineWidth&&!k.isMS&&e.lineWidth(r.lineWidth);B.build(y.data,"aVertexPosition",4);B.bind();h.setInverted(c.inverted);l(E,function(a,b){b=a.series.options;var c=b.marker,d;d="undefined"!==typeof b.lineWidth?b.lineWidth:1;var f=b.threshold,G=H(f),n=a.series.yAxis.getThreshold(f),f=F(b.marker?b.marker.enabled:null,a.series.xAxis.isRadial?!0:null,a.series.closestPointRangePx>2*((b.marker?
b.marker.radius:10)||10)),c=D[c&&c.symbol||a.series.symbol]||D.circle,l;if(!(0===a.segments.length||a.segmentslength&&a.segments[0].from===a.segments[0].to)){c.isReady&&(e.bindTexture(e.TEXTURE_2D,c.handle),h.setTexture(c.handle));c=a.series.markerGroup&&a.series.markerGroup.getStyle("fill");a.series.fillOpacity&&b.fillOpacity&&(c=(new X(c)).setOpacity(F(b.fillOpacity,1)).get());l=k.color(c).rgba;r.useAlpha||(l[3]=1);"lines"===a.drawMode&&r.useAlpha&&1>l[3]&&(l[3]/=10);"add"===b.boostBlending?(e.blendFunc(e.SRC_ALPHA,
e.ONE),e.blendEquation(e.FUNC_ADD)):"mult"===b.boostBlending?e.blendFunc(e.DST_COLOR,e.ZERO):"darken"===b.boostBlending?(e.blendFunc(e.ONE,e.ONE),e.blendEquation(e.FUNC_MIN)):e.blendFuncSeparate(e.SRC_ALPHA,e.ONE_MINUS_SRC_ALPHA,e.ONE,e.ONE_MINUS_SRC_ALPHA);h.reset();0<a.colorData.length&&(h.setUniform("hasColor",1),c=O(e,h),c.build(a.colorData,"aColor",4),c.bind());h.setColor(l);g(a.series.xAxis);q(a.series.yAxis);m(G,n);"points"===a.drawMode&&(b.marker&&b.marker.radius?h.setPointSize(2*b.marker.radius):
h.setPointSize(1));h.setSkipTranslation(a.skipTranslation);"bubble"===a.series.type&&h.setBubbleUniforms(a.series,a.zMin,a.zMax);h.setDrawAsCircle(A[a.series.type]||!1);if(0<d||"line_strip"!==a.drawMode)for(d=0;d<a.segments.length;d++)B.render(a.segments[d].from,a.segments[d].to,a.drawMode);if(a.hasMarkers&&f)for(b.marker&&b.marker.radius?h.setPointSize(2*b.marker.radius):h.setPointSize(10),h.setDrawAsCircle(!0),d=0;d<a.segments.length;d++)B.render(a.segments[d].from,a.segments[d].to,"POINTS")}});
r.debug.timeRendering&&console.timeEnd("gl rendering");a&&a();b()}function v(a){d();if(a.renderer.forExport)return n(a);J?n(a):setTimeout(function(){v(a)},1)}var h=!1,B=!1,e=!1,w=0,K=0,z=!1,u=!1,y={},J=!1,E=[],D={},fa={column:!0,columnrange:!0,bar:!0,area:!0,arearange:!0},A={scatter:!0,bubble:!0},r={pointSize:1,lineWidth:1,fillColor:"#AA00AA",useAlpha:!0,usePreallocated:!1,useGPUTranslations:!1,debug:{timeRendering:!1,timeSeriesProcessing:!1,timeSetup:!1,timeBufferCopy:!1,timeKDTree:!1,showSkipSummary:!1}};
return y={allocateBufferForSingleSeries:function(a){var b=0;r.usePreallocated&&(a.isSeriesBoosting&&(b=c(a)),B.allocate(b))},pushSeries:function(a){0<E.length&&E[E.length-1].hasMarkers&&(E[E.length-1].markerTo=u.length);r.debug.timeSeriesProcessing&&console.time("building "+a.type+" series");E.push({segments:[],markerFrom:u.length,colorData:[],series:a,zMin:Number.MAX_VALUE,zMax:-Number.MAX_VALUE,hasMarkers:a.options.marker?!1!==a.options.marker.enabled:!1,showMarksers:!0,drawMode:{area:"lines",arearange:"lines",
areaspline:"line_strip",column:"lines",columnrange:"lines",bar:"lines",line:"line_strip",scatter:"points",heatmap:"triangles",treemap:"triangles",bubble:"points"}[a.type]||"line_strip"});f(a,E[E.length-1]);r.debug.timeSeriesProcessing&&console.timeEnd("building "+a.type+" series")},setSize:function(a,b){if(w!==a||b!==b)w=a,K=b,h.bind(),h.setPMatrix([2/w,0,0,0,0,-(2/K),0,0,0,0,-2,0,-1,1,-1,1])},inited:function(){return J},setThreshold:m,init:function(a,c){function d(a,b){var c={isReady:!1,texture:L.createElement("canvas"),
handle:e.createTexture()},d=c.texture.getContext("2d");D[a]=c;c.texture.width=512;c.texture.height=512;d.mozImageSmoothingEnabled=!1;d.webkitImageSmoothingEnabled=!1;d.msImageSmoothingEnabled=!1;d.imageSmoothingEnabled=!1;d.strokeStyle="rgba(255, 255, 255, 0)";d.fillStyle="#FFF";b(d);try{e.activeTexture(e.TEXTURE0),e.bindTexture(e.TEXTURE_2D,c.handle),e.texImage2D(e.TEXTURE_2D,0,e.RGBA,e.RGBA,e.UNSIGNED_BYTE,c.texture),e.texParameteri(e.TEXTURE_2D,e.TEXTURE_WRAP_S,e.CLAMP_TO_EDGE),e.texParameteri(e.TEXTURE_2D,
e.TEXTURE_WRAP_T,e.CLAMP_TO_EDGE),e.texParameteri(e.TEXTURE_2D,e.TEXTURE_MAG_FILTER,e.LINEAR),e.texParameteri(e.TEXTURE_2D,e.TEXTURE_MIN_FILTER,e.LINEAR),e.bindTexture(e.TEXTURE_2D,null),c.isReady=!0}catch(da){}}var f=0,g=["webgl","experimental-webgl","moz-webgl","webkit-3d"];J=!1;if(!a)return!1;for(r.debug.timeSetup&&console.time("gl setup");f<g.length&&!(e=a.getContext(g[f],{}));f++);if(e)c||b();else return!1;e.enable(e.BLEND);e.blendFunc(e.SRC_ALPHA,e.ONE_MINUS_SRC_ALPHA);e.disable(e.DEPTH_TEST);
e.depthFunc(e.LESS);h=na(e);B=O(e,h);d("circle",function(a){a.beginPath();a.arc(256,256,256,0,2*Math.PI);a.stroke();a.fill()});d("square",function(a){a.fillRect(0,0,512,512)});d("diamond",function(a){a.beginPath();a.moveTo(256,0);a.lineTo(512,256);a.lineTo(256,512);a.lineTo(0,256);a.lineTo(256,0);a.fill()});d("triangle",function(a){a.beginPath();a.moveTo(0,512);a.lineTo(256,0);a.lineTo(512,512);a.lineTo(0,512);a.fill()});d("triangle-down",function(a){a.beginPath();a.moveTo(0,0);a.lineTo(256,512);
a.lineTo(512,0);a.lineTo(0,0);a.fill()});J=!0;r.debug.timeSetup&&console.timeEnd("gl setup");return!0},render:v,settings:r,valid:function(){return!1!==e},clear:d,flush:b,setXAxis:g,setYAxis:q,data:z,gl:function(){return e},allocateBuffer:function(a){var b=0;r.usePreallocated&&(l(a.series,function(a){a.isSeriesBoosting&&(b+=c(a))}),B.allocate(b))},destroy:function(){b();B.destroy();h.destroy();e&&(qa(D,function(a){D[a].handle&&e.deleteTexture(D[a].handle)}),e.canvas.width=1,e.canvas.height=1)},setOptions:function(a){ra(!0,
r,a)}}}function ia(a,c){var d=a.chartWidth,f=a.chartHeight,b=a,g=a.seriesGroup||c.group,l=L.implementation.hasFeature("www.http://w3.org/TR/SVG11/feature#Extensibility","1.1"),b=a.isChartSeriesBoosting()?a:c,l=!1;b.renderTarget||(b.canvas=sa,a.renderer.forExport||!l?(b.renderTarget=a.renderer.image("",0,0,d,f).addClass("highcharts-boost-canvas").add(g),b.boostClear=function(){b.renderTarget.attr({href:""})},b.boostCopy=function(){b.boostResizeTarget();b.renderTarget.attr({href:b.canvas.toDataURL("image/png")})}):
(b.renderTargetFo=a.renderer.createElement("foreignObject").add(g),b.renderTarget=L.createElement("canvas"),b.renderTargetCtx=b.renderTarget.getContext("2d"),b.renderTargetFo.element.appendChild(b.renderTarget),b.boostClear=function(){b.renderTarget.width=b.canvas.width;b.renderTarget.height=b.canvas.height},b.boostCopy=function(){b.renderTarget.width=b.canvas.width;b.renderTarget.height=b.canvas.height;b.renderTargetCtx.drawImage(b.canvas,0,0)}),b.boostResizeTarget=function(){d=a.chartWidth;f=a.chartHeight;
(b.renderTargetFo||b.renderTarget).attr({x:0,y:0,width:d,height:f}).css({pointerEvents:"none",mixedBlendMode:"normal",opacity:1});b instanceof k.Chart&&b.markerGroup.translate(a.plotLeft,a.plotTop)},b.boostClipRect=a.renderer.clipRect(),(b.renderTargetFo||b.renderTarget).clip(b.boostClipRect),b instanceof k.Chart&&(b.markerGroup=b.renderer.g().add(g),b.markerGroup.translate(c.xAxis.pos,c.yAxis.pos)));b.canvas.width=d;b.canvas.height=f;b.boostClipRect.attr(a.getBoostClipRect(b));b.boostResizeTarget();
b.boostClear();b.ogl||(b.ogl=pa(function(){b.ogl.settings.debug.timeBufferCopy&&console.time("buffer copy");b.boostCopy();b.ogl.settings.debug.timeBufferCopy&&console.timeEnd("buffer copy")}),b.ogl.init(b.canvas),b.ogl.setOptions(a.options.boost||{}),b instanceof k.Chart&&b.ogl.allocateBuffer(a));b.ogl.setSize(d,f);return b.ogl}function ja(a,c,d){a&&c.renderTarget&&c.canvas&&!(d||c.chart).isChartSeriesBoosting()&&a.render(d||c.chart)}function ka(a,c){a&&c.renderTarget&&c.canvas&&!c.chart.isChartSeriesBoosting()&&
a.allocateBufferForSingleSeries(c)}function ta(a){var c=!0;this.chart.options&&this.chart.options.boost&&(c="undefined"===typeof this.chart.options.boost.enabled?!0:this.chart.options.boost.enabled);if(!c||!this.isSeriesBoosting)return a.call(this);this.chart.isBoosting=!0;if(a=ia(this.chart,this))ka(a,this),a.pushSeries(this);ja(a,this)}var M=k.win,L=M.document,ua=function(){},ca=k.Chart,X=k.Color,q=k.Series,n=k.seriesTypes,l=k.each,qa=k.objectEach,la=k.extend,N=k.addEvent,va=k.fireEvent,wa=k.grep,
H=k.isNumber,ra=k.merge,F=k.pick,y=k.wrap,Q=k.getOptions().plotOptions,sa=L.createElement("canvas"),Y,ma="area arearange column columnrange bar line scatter heatmap bubble treemap".split(" "),A={};l(ma,function(a){A[a]=1});X.prototype.names={aliceblue:"#f0f8ff",antiquewhite:"#faebd7",aqua:"#00ffff",aquamarine:"#7fffd4",azure:"#f0ffff",beige:"#f5f5dc",bisque:"#ffe4c4",black:"#000000",blanchedalmond:"#ffebcd",blue:"#0000ff",blueviolet:"#8a2be2",brown:"#a52a2a",burlywood:"#deb887",cadetblue:"#5f9ea0",
chartreuse:"#7fff00",chocolate:"#d2691e",coral:"#ff7f50",cornflowerblue:"#6495ed",cornsilk:"#fff8dc",crimson:"#dc143c",cyan:"#00ffff",darkblue:"#00008b",darkcyan:"#008b8b",darkgoldenrod:"#b8860b",darkgray:"#a9a9a9",darkgreen:"#006400",darkkhaki:"#bdb76b",darkmagenta:"#8b008b",darkolivegreen:"#556b2f",darkorange:"#ff8c00",darkorchid:"#9932cc",darkred:"#8b0000",darksalmon:"#e9967a",darkseagreen:"#8fbc8f",darkslateblue:"#483d8b",darkslategray:"#2f4f4f",darkturquoise:"#00ced1",darkviolet:"#9400d3",deeppink:"#ff1493",
deepskyblue:"#00bfff",dimgray:"#696969",dodgerblue:"#1e90ff",feldspar:"#d19275",firebrick:"#b22222",floralwhite:"#fffaf0",forestgreen:"#228b22",fuchsia:"#ff00ff",gainsboro:"#dcdcdc",ghostwhite:"#f8f8ff",gold:"#ffd700",goldenrod:"#daa520",gray:"#808080",green:"#008000",greenyellow:"#adff2f",honeydew:"#f0fff0",hotpink:"#ff69b4",indianred:"#cd5c5c",indigo:"#4b0082",ivory:"#fffff0",khaki:"#f0e68c",lavender:"#e6e6fa",lavenderblush:"#fff0f5",lawngreen:"#7cfc00",lemonchiffon:"#fffacd",lightblue:"#add8e6",
lightcoral:"#f08080",lightcyan:"#e0ffff",lightgoldenrodyellow:"#fafad2",lightgrey:"#d3d3d3",lightgreen:"#90ee90",lightpink:"#ffb6c1",lightsalmon:"#ffa07a",lightseagreen:"#20b2aa",lightskyblue:"#87cefa",lightslateblue:"#8470ff",lightslategray:"#778899",lightsteelblue:"#b0c4de",lightyellow:"#ffffe0",lime:"#00ff00",limegreen:"#32cd32",linen:"#faf0e6",magenta:"#ff00ff",maroon:"#800000",mediumaquamarine:"#66cdaa",mediumblue:"#0000cd",mediumorchid:"#ba55d3",mediumpurple:"#9370d8",mediumseagreen:"#3cb371",
mediumslateblue:"#7b68ee",mediumspringgreen:"#00fa9a",mediumturquoise:"#48d1cc",mediumvioletred:"#c71585",midnightblue:"#191970",mintcream:"#f5fffa",mistyrose:"#ffe4e1",moccasin:"#ffe4b5",navajowhite:"#ffdead",navy:"#000080",oldlace:"#fdf5e6",olive:"#808000",olivedrab:"#6b8e23",orange:"#ffa500",orangered:"#ff4500",orchid:"#da70d6",palegoldenrod:"#eee8aa",palegreen:"#98fb98",paleturquoise:"#afeeee",palevioletred:"#d87093",papayawhip:"#ffefd5",peachpuff:"#ffdab9",peru:"#cd853f",pink:"#ffc0cb",plum:"#dda0dd",
powderblue:"#b0e0e6",purple:"#800080",red:"#ff0000",rosybrown:"#bc8f8f",royalblue:"#4169e1",saddlebrown:"#8b4513",salmon:"#fa8072",sandybrown:"#f4a460",seagreen:"#2e8b57",seashell:"#fff5ee",sienna:"#a0522d",silver:"#c0c0c0",skyblue:"#87ceeb",slateblue:"#6a5acd",slategray:"#708090",snow:"#fffafa",springgreen:"#00ff7f",steelblue:"#4682b4",tan:"#d2b48c",teal:"#008080",thistle:"#d8bfd8",tomato:"#ff6347",turquoise:"#40e0d0",violet:"#ee82ee",violetred:"#d02090",wheat:"#f5deb3",white:"#ffffff",whitesmoke:"#f5f5f5",
yellow:"#ffff00",yellowgreen:"#9acd32"};ca.prototype.isChartSeriesBoosting=function(){return F(this.options.boost&&this.options.boost.seriesThreshold,50)<=this.series.length||R(this)};ca.prototype.getBoostClipRect=function(a){var c={x:this.plotLeft,y:this.plotTop,width:this.plotWidth,height:this.plotHeight};a===this&&l(this.yAxis,function(a){c.y=Math.min(a.pos,c.y);c.height=Math.max(a.pos-this.plotTop+a.len,c.height)},this);return c};k.eachAsync=function(a,c,d,f,b,g){b=b||0;f=f||3E4;for(var l=b+f,
m=!0;m&&b<l&&b<a.length;)m=c(a[b],b),++b;m&&(b<a.length?g?k.eachAsync(a,c,d,f,b,g):M.requestAnimationFrame?M.requestAnimationFrame(function(){k.eachAsync(a,c,d,f,b)}):setTimeout(function(){k.eachAsync(a,c,d,f,b)}):d&&d())};q.prototype.getPoint=function(a){var c=a,d=this.xData||this.options.xData||this.processedXData||!1;!a||a instanceof this.pointClass||(c=(new this.pointClass).init(this,this.options.data[a.i],d?d[a.i]:void 0),c.category=c.x,c.dist=a.dist,c.distX=a.distX,c.plotX=a.plotX,c.plotY=a.plotY,
c.index=a.i);return c};y(q.prototype,"searchPoint",function(a){return this.getPoint(a.apply(this,[].slice.call(arguments,1)))});N(q,"destroy",function(){var a=this,c=a.chart;c.markerGroup===a.markerGroup&&(a.markerGroup=null);c.hoverPoints&&(c.hoverPoints=wa(c.hoverPoints,function(c){return c.series===a}));c.hoverPoint&&c.hoverPoint.series===a&&(c.hoverPoint=null)});y(q.prototype,"getExtremes",function(a){if(!this.isSeriesBoosting||!this.hasExtremes||!this.hasExtremes())return a.apply(this,Array.prototype.slice.call(arguments,
1))});l(ma,function(a){Q[a]&&(Q[a].boostThreshold=5E3,Q[a].boostData=[],n[a].prototype.fillOpacity=!0)});l(["translate","generatePoints","drawTracker","drawPoints","render"],function(a){function c(c){var d=this.options.stacking&&("translate"===a||"generatePoints"===a),b=F(this.chart&&this.chart.options&&this.chart.options.boost&&this.chart.options.boost.enabled,!0);if(!this.isSeriesBoosting||d||!b||"heatmap"===this.type||"treemap"===this.type||!A[this.type])c.call(this);else if(this[a+"Canvas"])this[a+
"Canvas"]()}y(q.prototype,a,c);"translate"===a&&l("column bar arearange columnrange heatmap treemap".split(" "),function(d){n[d]&&y(n[d].prototype,a,c)})});y(q.prototype,"processData",function(a){function c(a){return d.chart.isChartSeriesBoosting()||(a?a.length:0)>=(d.options.boostThreshold||Number.MAX_VALUE)}var d=this,f=this.options.data;A[this.type]?(c(f)&&"heatmap"!==this.type&&"treemap"!==this.type&&!this.options.stacking&&this.hasExtremes&&this.hasExtremes(!0)||(a.apply(this,Array.prototype.slice.call(arguments,
1)),f=this.processedXData),(this.isSeriesBoosting=c(f))?this.enterBoost():this.exitBoost&&this.exitBoost()):a.apply(this,Array.prototype.slice.call(arguments,1))});N(q,"hide",function(){this.canvas&&this.renderTarget&&(this.ogl&&this.ogl.clear(),this.boostClear())});q.prototype.enterBoost=function(){this.alteredByBoost=[];l(["allowDG","directTouch","stickyTracking"],function(a){this.alteredByBoost.push({prop:a,val:this[a],own:this.hasOwnProperty(a)})},this);this.directTouch=this.allowDG=!1;this.stickyTracking=
!0;this.animate=null;this.labelBySeries&&(this.labelBySeries=this.labelBySeries.destroy())};q.prototype.exitBoost=function(){l(this.alteredByBoost||[],function(a){a.own?this[a.prop]=a.val:delete this[a.prop]},this);this.boostClear&&this.boostClear()};q.prototype.hasExtremes=function(a){var c=this.options,d=this.xAxis&&this.xAxis.options,f=this.yAxis&&this.yAxis.options;return c.data.length>(c.boostThreshold||Number.MAX_VALUE)&&H(f.min)&&H(f.max)&&(!a||H(d.min)&&H(d.max))};q.prototype.destroyGraphics=
function(){var a=this,c=this.points,d,f;if(c)for(f=0;f<c.length;f+=1)(d=c[f])&&d.destroyElements&&d.destroyElements();l(["graph","area","tracker"],function(b){a[b]&&(a[b]=a[b].destroy())})};k.hasWebGLSupport=function(){var a=0,c,d=["webgl","experimental-webgl","moz-webgl","webkit-3d"],f=!1;if("undefined"!==typeof M.WebGLRenderingContext)for(c=L.createElement("canvas");a<d.length;a++)try{if(f=c.getContext(d[a]),"undefined"!==typeof f&&null!==f)return!0}catch(b){}return!1};k.hasWebGLSupport()?(k.extend(q.prototype,
{renderCanvas:function(){function a(a,b){var c,d,f=!1,h="undefined"===typeof g.index,k=!0;if(!h&&(N?(c=a[0],d=a[1]):(c=a,d=q[b]),F?(N&&(d=a.slice(1,3)),f=d[0],d=d[1]):L&&(c=a.x,d=a.stackY,f=d-a.y),G||(k=d>=w&&d<=y),null!==d&&c>=u&&c<=e&&k))if(a=Math.ceil(l.toPixels(c,!0)),H){if(void 0===W||a===A){F||(f=d);if(void 0===O||d>Q)Q=d,O=b;if(void 0===W||f<M)M=f,W=b}a!==A&&(void 0!==W&&(d=m.toPixels(Q,!0),D=m.toPixels(M,!0),da(a,d,O),D!==d&&da(a,D,W)),W=O=void 0,A=a)}else d=Math.ceil(m.toPixels(d,!0)),da(a,
d,b);return!h}function c(){va(d,"renderedCanvas");delete d.buildKDTree;d.buildKDTree();R.debug.timeKDTree&&console.timeEnd("kd tree building")}var d=this,f=d.options||{},b=!1,g=d.chart,l=this.xAxis,m=this.yAxis,n=f.xData||d.processedXData,q=f.yData||d.processedYData,h=f.data,b=l.getExtremes(),u=b.min,e=b.max,b=m.getExtremes(),w=b.min,y=b.max,z={},A,H=!!d.sampling,J,E=!1!==f.enableMouseTracking,D=m.getThreshold(f.threshold),F=d.pointArrayMap&&"low,high"===d.pointArrayMap.join(","),L=!!f.stacking,r=
d.cropStart||0,G=d.requireSorting,N=!n,M,Q,W,O,R,X="x"===f.findNearestPointBy,ca=this.xData||this.options.xData||this.processedXData||!1,da=function(a,b,c){Y=X?a:a+","+b;E&&!z[Y]&&(z[Y]=!0,g.inverted&&(a=l.len-a,b=m.len-b),J.push({x:ca?ca[r+c]:!1,clientX:a,plotX:a,plotY:b,i:r+c}))},b=ia(g,d);g.isBoosting=!0;R=b.settings;if(this.visible){if(this.points||this.graph)this.animate=null,this.destroyGraphics();g.isChartSeriesBoosting()?(this.markerGroup=g.markerGroup,this.renderTarget&&(this.renderTarget=
this.renderTarget.destroy())):this.markerGroup=d.plotGroup("markerGroup","markers",!0,1,g.seriesGroup);J=this.points=[];d.buildKDTree=ua;b&&(ka(b,this),b.pushSeries(d),ja(b,this,g));g.renderer.forExport||(R.debug.timeKDTree&&console.time("kd tree building"),k.eachAsync(L?d.data:n||h,a,c))}}}),l(["heatmap","treemap"],function(a){n[a]&&y(n[a].prototype,"drawPoints",ta)}),n.bubble&&(delete n.bubble.prototype.buildKDTree,y(n.bubble.prototype,"markerAttribs",function(a){return this.isSeriesBoosting?!1:
a.apply(this,[].slice.call(arguments,1))})),n.scatter.prototype.fill=!0,la(n.area.prototype,{fill:!0,fillOpacity:!0,sampling:!0}),la(n.column.prototype,{fill:!0,sampling:!0}),k.Chart.prototype.callbacks.push(function(a){N(a,"predraw",function(){a.boostForceChartBoost=void 0;a.boostForceChartBoost=R(a);a.isBoosting=!1;!a.isChartSeriesBoosting()&&a.didBoost&&(a.didBoost=!1);a.boostClear&&a.boostClear();a.canvas&&a.ogl&&a.isChartSeriesBoosting()&&(a.didBoost=!0,a.ogl.allocateBuffer(a));a.markerGroup&&
a.xAxis&&0<a.xAxis.length&&a.yAxis&&0<a.yAxis.length&&a.markerGroup.translate(a.xAxis[0].pos,a.yAxis[0].pos)});N(a,"render",function(){a.ogl&&a.isChartSeriesBoosting()&&a.ogl.render(a)})})):"undefined"!==typeof k.initCanvasBoost?k.initCanvasBoost():k.error(26)})(u)});
