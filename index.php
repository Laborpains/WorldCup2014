<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="viewport" content="width=320, user-scalable=no" />
<title>SAMURAI BLUE GIRLS</title>

<script type="text/javascript">


</script>
<!--Ajaxで指定エレメントの内容を定期的に書き換えるのサンプル-->
<script type="text/javascript" src="./js/prototype.js"></script>
<script type="text/javascript">
var myajax;
function execute() {
	myajax = new Ajax.PeriodicalUpdater(
		"container",
		"git/WorldCup2014/blue_girls.cgi",
		{
			"method": "get",
//			"parameters": "p=hoge",
			frequency: 2, // 5秒ごとに実行
			onSuccess: function(request) {
				// 成功時の処理を記述
				// alert('成功しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
				
				// ↓IEでもキャッシュを読み込まずに毎回リモート接続を実行するためのコード(パラメータの書き換え)
				var str = myajax.options.parameters;
				var hash = str.parseQuery();
				hash["ajax_request_id"] = Math.random();
				hash = $H(hash);
				myajax.options.parameters = hash.toQueryString();
			},
			onComplete: function(request) {
				// 完了時の処理を記述
				// alert('読み込みが完了しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onFailure: function(request) {
				alert('読み込みに失敗しました');
			},
			onException: function (request) {
				alert('読み込み中にエラーが発生しました');
			}
		}
	);
}
function stop() {
	if (myajax != null && myajax != undefined) {
		myajax.stop();
	}
}
</script>
</head>
<body onLoad="execute();">
<div id="container"></div>
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SAMURAI BLUE GIRLS -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:50px"
     data-ad-client="ca-pub-9038017433503334"
     data-ad-slot="1071551292"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>
