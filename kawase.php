<?php
//http://simplehtmldom.sourceforge.net/
//http://emaken.com/sae/yahoo/kawase.php?val=USDJPY

	$val = $_GET['val'];
	$url = 'http://stocks.finance.yahoo.co.jp/stocks/detail/?code='.$val.'=X';
 	include('../simple_html_dom.php');
  	$html = file_get_html($url);

foreach($html->find('td class="stoksPrice"') as $e)
    $ret .= $e->plaintext;

   $ret1 = mb_substr($ret, 0, 6, "utf-8");
    echo $ret1;
    echo " by Yahoo!";

?>
