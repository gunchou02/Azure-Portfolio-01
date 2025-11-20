<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Azure デプロイテスト</title>

    <script type="text/javascript">
    var sdkInstance="appInsightsSDK";window[sdkInstance]="appInsights";var aiName=window[sdkInstance],aisdk=window[aiName]||function(e){var n={name:aiName,config:e,initialize:!0},t=document,i=window,a="script";setTimeout(function(){var e=t.createElement(a);e.src=n.config.url||"https://js.monitor.azure.com/scripts/b/ai.2.min.js",t.getElementsByTagName(a)[0].parentNode.appendChild(e)});try{n.cookie=t.cookie}catch(e){}n.queue=[],n.version=2;for(var r=["Event","PageView","Exception","Trace","DependencyData","Metric","PageViewPerformance"];r.length;)var s=r.pop();function o(e){n[e]=function(){var t=arguments;n.queue.push(function(){n[e].apply(n,t)})}}o("track"+s),o("startTrack"+s),o("stopTrack"+s);var c="Track"+r[0];if(o("start"+c),o("stop"+c),!(!0===n.config.disableExceptionTracking||(e.extensionConfig&&e.extensionConfig.ApplicationInsightsAnalytics&&!0===e.extensionConfig.ApplicationInsightsAnalytics.disableExceptionTracking))){o("_"+(r="onerror"));var u=i[r];i[r]=function(e,t,i,a,o){var c=u&&u(e,t,i,a,o);return!0!==c&&n["_"+r]({message:e,url:t,lineNumber:i,columnNumber:a,error:o}),c},n.config.disableExceptionTracking=!1}return n}({

        connectionString: "InstrumentationKey=57ce6c24-1b1c-4a8a-84fb-9ad15aacfdab;IngestionEndpoint=https://japaneast-1.in.applicationinsights.azure.com/;LiveEndpoint=https://japaneast.livediagnostics.monitor.azure.com/;ApplicationId=4cf5a5d9-a006-446f-853f-69494fff3a3c",

        cfg: {
            disableFetchTracking: false,
            enableCorsCorrelation: true,
            enableRequestHeaderTracking: true,
            enableResponseHeaderTracking: true
        }
    });
    window[aiName]=aisdk,aisdk.queue&&0===aisdk.queue.length&&aisdk.trackPageView({});
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