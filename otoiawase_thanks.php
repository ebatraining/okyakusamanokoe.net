<?php
mysql_connect('mysql440.db.sakura.ne.jp', 'okyakusamanokoe', 'samasama13') or die(mysql_error());
mysql_select_db('okyakusamanokoe_db');
mysql_query('SET NAMES UTF8');

session_start();

$sql = sprintf('INSERT INTO otoiawase SET name="%s", name1="%s", name2="%s", pref="%s", address="%s", mail="%s", telban="%s", domain="%s", hobby="%s", question="%s"',
mysql_real_escape_string($_POST['name']),
mysql_real_escape_string($_POST['name1']),
mysql_real_escape_string($_POST['name2']),
mysql_real_escape_string($_POST['pref']),
mysql_real_escape_string($_POST['address']),
mysql_real_escape_string($_POST['mail']),
mysql_real_escape_string($_POST['telban']),
mysql_real_escape_string($_POST['domain']),
mysql_real_escape_string($_POST['hobby']),
mysql_real_escape_string($_POST['question']));
mysql_query($sql) or die(mysql_error());

/*****************************
   メール送信
*****************************/
mb_language("Japanese");
mb_internal_encoding("UTF-8");
// 宛先
$to = "postmaster@okyakusamanokoe.net";
// 差出人
$from ="<postmaster@okyakusamanokoe.net>";
// 題名
$sbj .= "お客様の声.net（企業様用）でお問い合わせがありました。";

// 本文
$msg = "会社名\n";
$msg .= html_entity_decode($_POST['name'], ENT_QUOTES)."\n\n";
$msg .= "担当者名\n";
$msg .= html_entity_decode($_POST['name1'], ENT_QUOTES)."\n\n";
$msg .= "住所（都道府県）\n";
$msg .= html_entity_decode($_POST['pref'], ENT_QUOTES)."\n\n";
$msg .= "メールアドレス\n";
$msg .= html_entity_decode($_POST['mail'], ENT_QUOTES)."\n\n";
$msg .= "電話番号\n";
$msg .= html_entity_decode($_POST['telban'], ENT_QUOTES)."\n\n";

// ヘッダ作成
$header = "From: {$from}";
// 送信
mb_send_mail($to, $sbj , $msg , $header);
/*****************************
   メール送信「完了」
*****************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="お客様の声.netへのお問い合わせ、誠にありがとうございました。" />
<meta name="keywords" content="お客様の声,お客様の声.net,okyakusamanokoe,お客様,customervoice,お客様の声一覧,口コミ" />
<title>お問い合わせありがとうございました</title>
<link rel="stylesheet" href="css/top.css" type="text/css" />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<script type="text/javascript" src="./jsp/rollover_jsp.js"></script>
<script type="text/javascript" src="./jsp/google.js"></script>
</head>
<body onload="MM_preloadImages('img/syukkou_on.jpg','img/housyuu_on.jpg','img/housyuu_top_on.jpg','img/friends_on.jpg','img/toiawase_bottun_on.jpg','img/home_on.jpg','img/voice_on.jpg','img/voice_towa_on.jpg','img/keisai_on.jpg','img/toiawase_on.jpg','img/mail_on.jpg','img/syouhin/uruoi_on.jpg','img/syouhin/adoopi_on.jpg','img/syouhin/eba_on.jpg','img/syouhin/coolstyle_on.jpg','img/syouhin/namacora_on.jpg','img/syouhin/rinreitya_on.jpg')">
      <!--ここはヘッダー-->
<div id="my_header">
  <div class="top_adoopi"><a href="index.html"><img src="img/logo.jpg" width="280" height="100" border="0" alt="お客様の声.net" title="お客様の声.net"/></a>
</div>

<div class="top_down">
<div class="tom_img">

<div class="top_message">
<h1 class="h_font">お客様の声.net</h1>
<p class="top_moji"><strong>お客様の声</strong>を参考に、商品比較、商品購入しましょう！</p>
</div>

<div class="koefont_2" align="right">
<img src="img/tel.jpg" width="260" height="80" alt="お電話でのお問い合わせ" title="お電話でのお問い合わせ" />
<a href="mailto:postmaster@okyakusamanokoe.net" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('mai','','img/mail_on.jpg',1)"><img src="img/mail.jpg" alt="メールでのお問い合わせ" title="メールでのお問い合わせ" name="mai" width="220" height="80" border="0" id="mai" /></a>
</div>

</div>
</div>
</div>
<!--ヘッダーの終了div-->

<!--コンテンツ始まり-->
<div class="top_cont">
      <ul>
      <li class="yoko"><a href="index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('hom','','img/home_on.jpg',1)"><img src="img/home.jpg" alt="HOME" title="HOME" name="hom" width="150" height="70" border="0" id="hom" /></a></li><!--3.--><li class="yoko"><a href="voice.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('voic','','img/voice_on.jpg',1)"><img src="img/voice.jpg" alt="お客様の声" title="お客様の声" name="voic" width="180" height="70" border="0" id="voic" /></a></li><!--3.--><li class="yoko"><a href="voice_towa.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('towa','','img/voice_towa_on.jpg',1)"><img src="img/voice_towa.jpg" alt="お客様の声とは？" title="お客様の声とは？" name="towa" width="220" height="70" border="0" id="towa" /></a></li><!--3.--><li class="yoko"><a href="keisai.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('keisai','','img/keisai_on.jpg',1)"><img src="img/keisai.jpg" alt="掲載について" title="掲載について" name="keisai" width="200" height="70" border="0" id="keisai" /></a></li><!--3.--><li class="yoko"><a href="otoiawase.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('toi','','img/toiawase_on.jpg',1)"><img src="img/toiawase.jpg" alt="お問い合わせ" title="お問い合わせ" name="toi" width="200" height="70" border="0" id="toi" /></a></li><!-- 3.--></ul>
</div>

<div class="service_main"> 
<div class="service">
  <img src="img/otoiawase/thanks_main.jpg" width="950" height="250" alt="お問い合わせありがとうございました" title="お問い合わせありがとうございました" /></div>
</div>

<!--コンテンツのしばり-->
<div id="container">
<div id="my_body">
      <!--ここは右サイドバーの司令塔-->
      <div id="my_main">
      <!--ここは右サイドバーの操作部分-->
            
      <div id="my_navigation">
      <div id="my_navigation_1" align="center">
<div class="twitter_size">
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 20,
  interval: 30000,
  width: 260,
  height: 150,
  theme: {
    shell: {
      background: '#ff9900',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#ff6600'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
	 hashtags: true,
     timestamp: true,
     avatars: false,
    behavior: 'default'
  }
}).render().setUser('okyakusamakoe').start(); <!--←の('　　')に、twitterのユーザー名を入れると、そのつぶやきが反映される-->
</script>
</div>

<div class="fb_yoha">
<div class="fb-like-box" data-href="http://www.facebook.com/pages/%E3%81%8A%E5%AE%A2%E6%A7%98%E3%81%AE%E5%A3%B0net/233840450079016" data-width="260" data-height="750" data-show-faces="true" data-stream="false" data-header="true"></div>
</div>
</div>
</div>
<!--右サイドバー終わり-->

      <div id="my_contents">
      <!--ここはメインコンテンツ-->
<!--mixi・twitterページへ-->
<div class="koukoku">
<div class="syukkou">
  <img src="img/otoiawase/thanks_title.jpg" width="670" height="50" alt="お問い合わせありがとうございました" title="お問い合わせありがとうございました" /></div>
</div>


<div class="naiyou">

<div class="naiyou_1">
<a href="http://okyakusamanokoe.net" title="お客様の声.net">HOME</a> > お問い合わせありがとうございました
</div>

<div class="setumei">
<p class="form_yoha">この度はお問い合わせ下さいまして、誠にありがとうございます。</p>
<p class="form_yoha">お客様の御請求内容に応じて、ご対応させていただきます。<br />
（但し、お問い合わせ内容によりご回答が遅くなることや、ご回答できない場合もございますので、<br />
あらかじめご了承下さいませ。）</p>
<p class="form_yoha">今後とも、お客様の声.netを何卒よろしくお願い申し上げます。</p>
</div>

</div>
</div>

</div>
</div>
<!--container終了-->
</div>
</div>

<div class="footer_kankaku">
<hr align="left" size="1" color="#FF9900" class="last_line"/>
</div>
<div class="las_cate">
<div class="my_footer">
<div class="last_list">
<ul>
<li><a href="index.html" class="siz">ＨＯＭＥ</a></li>
<li><a href="voice.html" class="siz">お客様の声</a></li>
<li><a href="voice_towa.html" class="siz">お客様の声とは</a></li>
<li><a href="keisai.html" class="siz">掲載について</a></li>
<li><a href="otoiawase.html" class="siz">お問い合わせ</a></li>
</ul>
</div>

<div class="last_list_1">
<ul>
<li><a href="sitemap.html" class="siz">サイトマップ</a></li>
<li><a href="privacy.html" class="siz">プライバシーポリシー</a></li>
<li><a href="http://ebacorp.jp/kaisyagaiyou.html" class="siz" target="_blank">運営会社</a></li>
</ul>
</div>

<table width="794" border="0" align="center" class="foot_yohaku">
              <tr>
                <td width="300"><a href="/"><img src="img/logo.jpg" width="280" height="100" border="0" alt="お客様の声.net" title="お客様の声.net" class="top_img" /></a></td>
                <td width="260" style="vertical-align:bottom"><img src="img/tel.jpg" width="260" height="80" alt="お電話でのお問い合わせ" title="お電話でのお問い合わせ" /></td>
                <td width="220" style="vertical-align:bottom"><a href="mailto:postmaster@okyakusamanokoe.net" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('mail2','','img/mail_on.jpg',1)"><img src="img/mail.jpg" alt="メールでのお問い合わせ" title="メールでのお問い合わせ" name="mail2" width="220" height="80" border="0" id="mail2" /></a></td>
              </tr>
    </table>
</div>
</div>
<div class="footer_haikei" align="center">
<p class="moji_foot">Copyrights (C) 2012 okyakusamanokoe,Inc. All Rights Reserved.</p>
</div>
<!--facebook用API-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=503985332945239";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--facebook用API「終わり」-->
</body>
</html>