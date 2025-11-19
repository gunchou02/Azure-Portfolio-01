<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Azure デプロイテスト</title>
    
    <script type="text/javascript">
    !function(T,l,y){var S=T.location,k="script",D="instrumentationKey",C="ingestionendpoint",I="disableExceptionTracking",E="ai.device.",b="toLowerCase",w="crossOrigin",N="POST",e="appInsightsSDK",t=y.name||"appInsights";(y.name||T[e])&&(T[e]=t);var n=T[t]||function(d){var g=!1,f=!1,m={initialize:!0,queue:[],sv:"5",version:2,config:d};function v(e,t){var n={},a="Browser";return n[E+"id"]=a[b](),n[E+"type"]=a,n["ai.operation.name"]=S&&S.pathname||"_unknown_",n["ai.internal.sdkVersion"]="javascript:snippet_"+(m.sv||m.version),{time:function(){var e=new Date;function t(e){var t=""+e;return 1===t.length&&(t="0"+t),t}return e.getUTCFullYear()+"-"+t(e.getUTCMonth()+1)+"-"+t(e.getUTCDate())+"T"+t(e.getUTCHours())+":"+t(e.getUTCMinutes())+":"+t(e.getUTCSeconds())+"."+((e.getUTCMilliseconds()/1e3).toFixed(3)+"").slice(2,5)+"Z"}(),iKey:e,name:"Microsoft.ApplicationInsights."+e.replace(/-/g,"")+"."+t,sampleRate:100,tags:n,data:{baseData:{ver:2}}}}var h=d.url||y.src;if(h){function a(e){var t,n,a,i,r,o,s,c,u,p,l;g=!0,m.queue=[],f||(f=!0,i=h,s=function(){var e,t={},n=d.connectionString;if(n)for(var a=n.split(";"),i=0;i<a.length;i++){var r=a[i].split("=");2===r.length&&(t[r[0][b]()]=r[1])}if(!t[C]){var o=t.endpointsuffix,s=o?t.location:null;t[C]="https://"+(s?s+".":"")+"dc."+(o||"services.visualstudio.com")}return t}(),c=s[D]||d[D]||"",u=s[C],p=u?u+"/v2/track":d.endpointUrl,(l=[]).push((t="SDK LOAD Failure: Failed to load Application Insights SDK script (See stack for details)",n=i,a=p,(o=(r=v(c,"Exception")).data.baseData).exceptions=[{typeName:"SDKLoadFailed",message:t.replace(".",""),hasFullStack:!1,stack:t+"\nJS User Error: \n<" + "script\nsrc='" + n + "'>",parsedStack:[]}],r)),l.push(function(e,t,n,a){var i=v(c,"Message"),r=i.data.baseData;return r.message='AI (Internal): 99 message:"'+(""+e).replace(/"/g,"")+'"',r.properties={t:a},i}(e,i,0,p)),function(e,t){if(JSON){var n=T.fetch;if(n&&!y.useXhr)n(t,{method:N,body:JSON.stringify(e),mode:"cors"});else if(XMLHttpRequest){var a=new XMLHttpRequest;a.open(N,t),a.setRequestHeader("Content-type","application/json"),a.send(JSON.stringify(e))}}}(l,p))}function i(e,t){f||setTimeout(function(){!t&&m.core||a()},500)}var r=function(){var n=l.createElement(k);n.src=h;var e=y[w];return!e&&""!==e||"undefined"==n[w]||(n[w]=e),n.onload=i,n.onerror=a,n.onreadystatechange=function(e,t){"loaded"!==n.readyState&&"complete"!==n.readyState||i(0,t)},n}();y.ld<0?l.getElementsByTagName("head")[0].appendChild(r):setTimeout(function(){l.getElementsByTagName(k)[0].parentNode.appendChild(r)},y.ld||0)}try{m.cookie=l.cookie}catch(p){}function s(e){for(;e.length;)!function(t){m[t]=function(){var e=arguments;g||m.queue.push(function(){m[t].apply(m,e)})}}(e.pop())}var c="track",u="TrackPage",p="TrackEvent";s([c+"Event",c+"PageView",c+"Exception",c+"Trace",c+"DependencyData",c+"Metric",c+"PageViewPerformance","start"+u,"stop"+u,"start"+p,"stop"+p,"addTelemetryInitializer","setAuthenticatedUserContext","clearAuthenticatedUserContext","flush"]),m.SeverityLevel={Verbose:0,Information:1,Warning:2,Error:3,Critical:4};var o=(d.extensionConfig||{}).ApplicationInsightsAnalytics||{};if(!0!==d[I]&&!0!==o[I]){var t="onerror";s(["_"+t]);var n=T[t];T[t]=function(e,t,a,i,r){var o=n&&n(e,t,a,i,r);return!0!==o&&m["_"+c+"Exception"]({exception:r,name:e,message:t,line:a,column:i,sourceURL:t,stack:r&&r.stack,severityLevel:m.SeverityLevel.Error}),o}}m[e]=m;var l=m;if(void 0!==name&&l.queue.push(function(){l.addTelemetryInitializer(function(e){e.tags=e.tags||{},e.tags["ai.cloud.role"]=name})}),l.config.connectionString=l.config.connectionString||y[C+"string"],!l.config.connectionString&&l.config[D]){var w=l.config[C]||l.config.endpointUrl;l.config.connectionString=D+"="+l.config[D]+(w?";"+C+"="+w:"")}l.initialize&&l.initialize(d);l}return l}(window,document,{
    src: "https://js.monitor.azure.com/scripts/b/ai.2.min.js", 
    
    connectionString: "InstrumentationKey=57ce6c24-1b1c-4a8a-84fb-9ad15aacfdab;IngestionEndpoint=https://japaneast-1.in.applicationinsights.azure.com/;LiveEndpoint=https://japaneast.livediagnostics.monitor.azure.com/;ApplicationId=4cf5a5d9-a006-446f-853f-69494fff3a3c",
    
    cfg: {
        disableFetchTracking: false,
        enableCorsCorrelation: true,
        enableRequestHeaderTracking: true,
        enableResponseHeaderTracking: true,
    }
    });
    window.appInsights.trackPageView();
    </script>
    <style>
        body { 
            font-family: "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif; 
            text-align: center; 
            padding-top: 50px; 
        }
        h1 { color: #0078D4; }
    </style>
</head>
<body>
    <h1>Azure デプロイ成功！</h1>
    <p>このページが表示されている場合、Webサーバーは正常に稼働しています。</p>
    <p>現在のPHPバージョン: <?php echo phpversion(); ?></p>
</body>
</html>