<?php
// contactlist_form.php

// This page receives the first name and emails from the coming soon page

// Address error handling.

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

//
	
// Connect and select.

if (@mysql_connect('localhost', 'dingmed_aidan', 'BHprh7abJV'))
{
	if (!@mysql_select_db ('dingmed_contactList'))
	{
		die (print mysql_error());
	}
}
else
{
	die (print mysql_error());
}

//

// Define the query.

$query = "INSERT INTO emailList
(FirstName, email, dateEntered)
VALUES ('{$_POST['name']}',
'{$_POST['email']}', NOW())";

//

// Execute the query.

if (@mysql_query ($query))
{
	;
}
else
{
	print mysql_error();
}
mysql_close();

//

// Send thanks/confirmation email.

$headers = "From: info@dingconcussion.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">
@media only screen and (max-device-width: 480px) { 
table[class=w0], td[class=w0] { width: 0 !important; }
table[class=w10], td[class=w10], img[class=w10] { width:10px !important; }
table[class=w15], td[class=w15], img[class=w15] { width:5px !important; }
table[class=w30], td[class=w30], img[class=w30] { width:10px !important; }
table[class=w60], td[class=w60], img[class=w60] { width:10px !important; }
table[class=w125], td[class=w125], img[class=w125] { width:80px !important; }
table[class=w130], td[class=w130], img[class=w130] { width:55px !important; }
table[class=w140], td[class=w140], img[class=w140] { width:90px !important; }
table[class=w160], td[class=w160], img[class=w160] { width:180px !important; }
table[class=w170], td[class=w170], img[class=w170] { width:100px !important; }
table[class=w180], td[class=w180], img[class=w180] { width:80px !important; }
table[class=w195], td[class=w195], img[class=w195] { width:80px !important; }
table[class=w220], td[class=w220], img[class=w220] { width:80px !important; }
table[class=w240], td[class=w240], img[class=w240] { width:180px !important; }
table[class=w255], td[class=w255], img[class=w255] { width:185px !important; }
table[class=w275], td[class=w275], img[class=w275] { width:135px !important; }
table[class=w280], td[class=w280], img[class=w280] { width:135px !important; }
table[class=w300], td[class=w300], img[class=w300] { width:140px !important; }
table[class=w325], td[class=w325], img[class=w325] { width:95px !important; }
table[class=w360], td[class=w360], img[class=w360] { width:140px !important; }
table[class=w410], td[class=w410], img[class=w410] { width:180px !important; }
table[class=w470], td[class=w470], img[class=w470] { width:200px !important; }
table[class=w580], td[class=w580], img[class=w580] { width:280px !important; }
table[class=w640], td[class=w640], img[class=w640] { width:300px !important; }
table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }
table[class=h0], td[class=h0] { height: 0 !important; }
p[class=footer-content-left] { text-align: center !important; }
#headline p { font-size: 30px !important; }
.article-content, #left-sidebar{ -webkit-text-size-adjust: 90% !important; -ms-text-size-adjust: 90% !important; }
.header-content, .footer-content-left {-webkit-text-size-adjust: 80% !important; -ms-text-size-adjust: 80% !important;}
img { height: auto; line-height: 100%;}
 } 
#outlook a { padding: 0; }	
body { width: 100% !important; }
.ReadMsgBody { width: 100%; }
.ExternalClass { width: 100%; display:block !important; } 
body { background-color: #dedede; margin: 0; padding: 0; }
img { outline: none; text-decoration: none; display: block;}
br, strong br, b br, em br, i br { line-height:100%; }
h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; }
h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {	color: red !important; }
h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: purple !important; }
  
table td, table tr { border-collapse: collapse; }
.yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;
}	
code {
  white-space: normal;
  word-break: break-all;
}
#background-table { background-color: #dedede; }
#top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #c7c7c7; color: #ededed; }
#top-bar a { font-weight: bold; color: #ffffff; text-decoration: none;}
#footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; }
body, td { font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif; }
.header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
.header-content { font-size: 12px; color: #ededed; }
.header-content a { font-weight: bold; color: #ffffff; text-decoration: none; }
#headline p { color: #444444; font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }
#headline p a { color: #444444; text-decoration: none; }
.article-title { font-size: 18px; line-height:24px; color: #b0b0b0; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif; }
.article-title a { color: #b0b0b0; text-decoration: none; }
.article-title.with-meta {margin-bottom: 0;}
.article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;}
.article-content { font-size: 13px; line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif; }
.article-content a { color: #0a3399; font-weight:bold; text-decoration:none; }
.article-content img { max-width: 100% }
.article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; }
.article-content li { font-size: 13px; line-height: 18px; color: #444444; }
.article-content li a { color: #0a3399; text-decoration:underline; }
.article-content p {margin-bottom: 15px;}
.footer-content-left { font-size: 12px; line-height: 15px; color: #ededed; margin-top: 0px; margin-bottom: 15px; }
.footer-content-left a { color: #ffffff; font-weight: bold; text-decoration: none; }
.footer-content-right { font-size: 11px; line-height: 16px; color: #ededed; margin-top: 0px; margin-bottom: 15px; }
.footer-content-right a { color: #ffffff; font-weight: bold; text-decoration: none; }
#footer { background-color: #c7c7c7; color: #ededed; }
#footer a { color: #ffffff; text-decoration: none; font-weight: bold; }
#permission-reminder { white-space: normal; }
#street-address { color: #636363; white-space: normal; }
</style>
<!--[if gte mso 9]>
<style _tmplitem="894" >
.article-content ol, .article-content ul {
   margin: 0 0 0 24px !important;
   padding: 0 !important;
   list-style-position: inside !important;
}
</style>
<![endif]--><meta name="robots" content="noindex,nofollow"></meta>
<meta property="og:title" content="Thanks for signing up with Ding! Med"></meta>
<link href="http://css.createsend1.com/css/social.min.css?h=BCE84E1Afeed2" media="screen,projection" rel="stylesheet" type="text/css" />
</head><body style="width:100% !important;background-color:#dedede;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;" ><table width="100%" cellpadding="0" cellspacing="0" border="0" id="background-table" style="background-color:#dedede;" >
	<tbody><tr style="border-collapse:collapse;" >
		<td align="center" bgcolor="#dedede" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
        	<table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" style="margin-top:0;margin-bottom:0;margin-right:10px;margin-left:10px;" >
            	<tbody><tr style="border-collapse:collapse;" ><td class="w640" width="640" height="20" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                
            	<tr style="border-collapse:collapse;" >
                	<td class="w640" width="640" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                        <table id="top-bar" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="border-radius:6px 6px 0px 0px;-moz-border-radius:6px 6px 0px 0px;-webkit-border-radius:6px 6px 0px 0px;-webkit-font-smoothing:antialiased;background-color:#c7c7c7;color:#ededed;" >
    <tbody><tr style="border-collapse:collapse;" >
        <td class="w15" width="15" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
        <td class="w325" width="350" valign="middle" align="left" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
            <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr style="border-collapse:collapse;" ><td class="w325" width="350" height="8" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
            </tbody></table>
            <div class="header-content" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;color:#ededed;" ><a href="http://preview.createsend1.com/t/t-e-cljujt-l-r/" style="font-weight:bold;color:#ffffff;text-decoration:none;" >Web Version</a><span class="hide">&nbsp;&nbsp;|&nbsp; <a href="http://client.updatemyprofile.com/t-l-2AD73FFF-l-y" lang="en" style="font-weight:bold;color:#ffffff;text-decoration:none;" >Update preferences</a>&nbsp;&nbsp;|&nbsp; <a href="http://preview.createsend1.com/t/t-u-cljujt-l-j/" style="font-weight:bold;color:#ffffff;text-decoration:none;" >Unsubscribe</a></span></div>
            <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr style="border-collapse:collapse;" ><td class="w325" width="350" height="8" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
            </tbody></table>
        </td>
        <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
        <td class="w255" width="255" valign="middle" align="right" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
            <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr style="border-collapse:collapse;" ><td class="w255" width="255" height="8" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
            </tbody></table>
            <table cellpadding="0" cellspacing="0" border="0">
    <tbody><tr style="border-collapse:collapse;" >
        
        <td valign="middle" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ><a href="http://preview.createsend1.com/t/t-fb-cljujt-l-t/" likeurl="http://www.facebook.com/pages/Ding-Med/167974579887131" rel="cs_facebox" style="font-weight:bold;color:#ffffff;text-decoration:none;" ><img src="https://img.createsend1.com/img/templatebuilder/like-glyph.png" border="0" width="8" height="14" alt="Facebook icon" ="" style="outline-style:none;text-decoration:none;display:block;" /></a></td>
        <td width="3" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
        <td valign="middle" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ><div class="header-content" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;color:#ededed;" ><a href="http://preview.createsend1.com/t/t-fb-cljujt-l-i/" likeurl="http://www.facebook.com/pages/Ding-Med/167974579887131" rel="cs_facebox" style="font-weight:bold;color:#ffffff;text-decoration:none;" >Like</a></div></td>
        
        
        
    </tr>
</tbody></table>
            <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr style="border-collapse:collapse;" ><td class="w255" width="255" height="8" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
            </tbody></table>
        </td>
        <td class="w15" width="15" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
    </tr>
</tbody></table>
                        
                    </td>
                </tr>
                <tr style="border-collapse:collapse;" >
                <td id="header" class="w640" width="640" align="center" bgcolor="#ffffff" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
    
    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr style="border-collapse:collapse;" ><td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w580" width="580" height="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
        <tr style="border-collapse:collapse;" >
            <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
            <td class="w580" width="580" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                <div align="center" id="headline">
                    <p style="color:#444444;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;font-size:36px;text-align:center;margin-top:0px;margin-bottom:30px;" >
                        <strong><a href="http://dingmed.createsend1.com/t/t-l-cljujt-l-k/" style="color:#444444;text-decoration:none;" >Thanks for signing up!</a></strong>
                    </p>
                </div>
            </td>
            <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
        </tr>
    </tbody></table>
    
    
</td>
                </tr>
                
                <tr style="border-collapse:collapse;" ><td class="w640" width="640" height="30" bgcolor="#ffffff" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                <tr id="simple-content-row" style="border-collapse:collapse;" ><td class="w640" width="640" bgcolor="#ffffff" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr style="border-collapse:collapse;" >
            <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
            <td class="w580" width="580" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                
                        <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr style="border-collapse:collapse;" >
                                <td class="w180" width="180" valign="top" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                    <table class="w180" width="180" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr style="border-collapse:collapse;" >
                                            <td class="w180" width="180" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
                                        </tr>
                                        <tr style="border-collapse:collapse;" ><td class="w180" width="180" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                                        <tr style="border-collapse:collapse;" >
                                            <td class="w180" width="180" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                                <div align="left" class="article-content" style="font-size:13px;line-height:18px;color:#444444;margin-top:0px;margin-bottom:18px;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;" >
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border-collapse:collapse;" ><td class="w180" width="180" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                                    </tbody></table>
                                </td>
                                <td width="20" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
                                <td class="w180" width="180" valign="top" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                    <table class="w180" width="180" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr style="border-collapse:collapse;" >
                                            <td class="w180" width="180" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ><a href="http://dingmed.createsend1.com/t/t-l-cljujt-l-c/"><img label="Image" class="w180" width="180" border="0" src="http://i1.createsend1.com/ei/t/D8/3E8/CE8/csimport/ScreenShot2013-01-16at5.56.20PM.175938.png" height="174" alt="Ding!&#32;Med" style="outline-style:none;text-decoration:none;display:block;" /></a></td>
                                        </tr>
                                        <tr style="border-collapse:collapse;" ><td class="w180" width="180" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                                        <tr style="border-collapse:collapse;" >
                                            <td class="w180" width="180" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                                <div align="left" class="article-content" style="font-size:13px;line-height:18px;color:#444444;margin-top:0px;margin-bottom:18px;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;" >
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border-collapse:collapse;" ><td class="w180" width="180" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                                    </tbody></table>
                                </td>
                                <td width="20" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
                                <td class="w180" width="180" valign="top" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                    <table class="w180" width="180" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr style="border-collapse:collapse;" >
                                            <td class="w180" width="180" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
                                        </tr>
                                        <tr style="border-collapse:collapse;" ><td class="w180" width="180" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                                        <tr style="border-collapse:collapse;" >
                                            <td class="w180" width="180" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                                <div align="left" class="article-content" style="font-size:13px;line-height:18px;color:#444444;margin-top:0px;margin-bottom:18px;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;" >
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border-collapse:collapse;" ><td class="w180" width="180" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                    
                        <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr style="border-collapse:collapse;" >
                                <td class="w580" width="580" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
                                    <p align="left" class="article-title" style="font-size:18px;line-height:24px;color:#b0b0b0;font-weight:bold;margin-top:0px;margin-bottom:18px;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;" >Hi there!</p>
                                    <div align="left" class="article-content" style="font-size:13px;line-height:18px;color:#444444;margin-top:0px;margin-bottom:18px;font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;" >
                                        <p style="margin-bottom:15px;" >
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; We are glad that you have decided to take the first step towward protecting your children, friends, teammates&nbsp;and family from the devistating effects of repeated concussions. Check out the LEARN section of our new website to continue learning about how to recognize the signs and symptoms of concussion and mTBI. In the mean time, we are working hard at brining you the best possible app for your iPhone and iPad. We will let you know as soon as it is avaiable on the iTunes app store.</p>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border-collapse:collapse;" ><td class="w580" width="580" height="10" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                        </tbody></table>
                    
            </td>
            <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
        </tr>
    </tbody></table>
</td></tr>
                <tr style="border-collapse:collapse;" ><td class="w640" width="640" height="15" bgcolor="#ffffff" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
                
                <tr style="border-collapse:collapse;" >
                <td class="w640" width="640" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
    <table id="footer" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#c7c7c7" style="border-radius:0px 0px 6px 6px;-moz-border-radius:0px 0px 6px 6px;-webkit-border-radius:0px 0px 6px 6px;-webkit-font-smoothing:antialiased;background-color:#c7c7c7;color:#ededed;" >
        <tbody><tr style="border-collapse:collapse;" ><td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w580 h0" width="360" height="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w0" width="60" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w0" width="160" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
        <tr style="border-collapse:collapse;" >
            <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
            <td class="w580" width="360" valign="top" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
            <span class="hide"><p id="permission-reminder" align="left" class="footer-content-left" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;line-height:15px;color:#ededed;margin-top:0px;margin-bottom:15px;white-space:normal;" ><span>Youre receiving this because you subscribed to recieve updates about the Ding! Med concussion iOS app.</span></p></span>
            <p align="left" class="footer-content-left" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;line-height:15px;color:#ededed;margin-top:0px;margin-bottom:15px;"><a href="http://client.updatemyprofile.com/t-l-2AD73FFF-l-d" lang="en" style="color:#ffffff;text-decoration:none;font-weight:bold;" >Edit your subscription</a> | <a href="http://preview.createsend1.com/t/t-u-cljujt-l-h/" style="color:#ffffff;text-decoration:none;font-weight:bold;" >Unsubscribe</a></p>
            </td>
            <td class="hide w0" width="60" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
            <td class="hide w0" width="160" valign="top" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" >
            <p id="street-address" align="right" class="footer-content-right" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:11px;line-height:16px;margin-top:0px;margin-bottom:15px;color:#636363;white-space:normal;" ><span>www.DingConcussion.com</span></p>
            </td>
            <td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td>
        </tr>
        <tr style="border-collapse:collapse;" ><td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w580 h0" width="360" height="15" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w0" width="60" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w0" width="160" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td><td class="w30" width="30" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
    </tbody></table>
</td>
                </tr>
                <tr style="border-collapse:collapse;" ><td class="w640" width="640" height="60" style="font-family:"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;" ></td></tr>
            </tbody></table>
        </td>
	</tr>
</tbody></table>

<div id="fb-root"></div>
</body></html>
';

mail ($_POST['email'], 'Hello from DingMed!', $message, $headers);

//

phpinfo();
?>