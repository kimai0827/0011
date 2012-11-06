<?php
	//http://emaken.com/sae/yahoo/news.php?value=fc/rss.xml&num=5
    $value = $_GET['value'];
	$num = $_GET['num'];
	$num0 = 0;
	$num1 = 1;

//XMLデータ取得用ベースURL
$req = "http://rss.dailynews.yahoo.co.jp/";
$req .= $value;

//XMLファイルをパースし、オブジェクトを取得
$xml = simplexml_load_file($req)
or die("XMLパースエラー");

//$xmlオブジェクトの中身を確認する場合は、以下のコメントを外す
	
	while( $num > 0){
		$ret .= "$num1.".$xml->channel->item[$num0]->title." ";
		$num0++;
		$num1++;
		$num--;
	}

echo $ret;
echo "by Yahoo!";

?>
