<?php
	//http://emaken.com/sae/yahoo/news.php?value=fc/rss.xml&num=5
    $value = $_GET['value'];
	$num = $_GET['num'];
	$num0 = 0;
	$num1 = 1;

//XML�f�[�^�擾�p�x�[�XURL
$req = "http://rss.dailynews.yahoo.co.jp/";
$req .= $value;

//XML�t�@�C�����p�[�X���A�I�u�W�F�N�g���擾
$xml = simplexml_load_file($req)
or die("XML�p�[�X�G���[");

//$xml�I�u�W�F�N�g�̒��g���m�F����ꍇ�́A�ȉ��̃R�����g���O��
	
	while( $num > 0){
		$ret .= "$num1.".$xml->channel->item[$num0]->title." ";
		$num0++;
		$num1++;
		$num--;
	}

echo $ret;
echo "by Yahoo!";

?>
