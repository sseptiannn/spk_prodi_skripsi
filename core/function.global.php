<?php if (!defined('BASEPATH')) exit('Nothing found here');
/* File berisi berbagai function Global yang bisa dipanggil dalam program 
 @ author CiptaHost
	Kamus:
	redirect($url)			-> Function untuk redirect page, load pada page yang sedang aktif no delay
	redirect_time($url,$time)	-> Function untuk redirect page, load dengan delay (delay=$time)
	base_url()			-> Function untuk mendapatkan base url (ex:www.cipta.com) , dengan echo
	base_uri()			-> Function untuk mendapatkan base url (ex:www.cipta.com) , tanpa echo
	img_path()			-> Function untuk mendapatkan path folder gambar (ada di /media/images/) , dengan echo
	img_path_()			-> Function untuk mendapatkan path folder gambar (ada di /media/images/) 
	css_path()			-> Function untuk mendapatkan path folder CSS (ada di /media/css/) , dengan echo
	css_path_()			-> Function untuk mendapatkan path folder CSS (ada di /media/css/) 
	js_path()			-> Function untuk mendapatkan path folder Javascript (ada di /media/js/) , dengan echo
	js_path_()			-> Function untuk mendapatkan path folder Javascript (ada di /media/js/) 
	url($url,$text)			-> Function untuk membuat hyperlink , load di main page
	url_new($url,$text)		-> Function untuk membuat hyperlink , load di tab baru
	tanggal()			-> Function untuk mendapatkan nilai tanggal hari ini
	tanggal_jam()			-> Function untuk mendapatkan nilai tanggal dan jam hari ini
	tanggal_en()			-> Function untuk mendapatkan nilai tanggal hari ini in English
	tanggal_jam_en()		-> Function untuk mendapatkan nilai tanggal dan jam hari ini in Englis
	tanggal_db()			-> Function untuk mendapatkan nilai tanggal hari ini utk insert DB
	tanggal_jam_db()		-> Function untuk mendapatkan nilai tanggal dan jam hari ini utk insert DB
	browser_client()		-> Function untuk mendapatkan informasi browser visitor
	ip_client()			-> Function untuk mendapatkan informasi ip address visitor
	img($file,$width,$alt,$title)	-> Function meload image
	random_string()			-> Function generate string random
*/

function redirect($url)
{
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
} 

function redirect_time($url,$time)
{
	echo '<META HTTP-EQUIV=Refresh CONTENT="'.$time.'; URL='.$url.'">';
} 

function base_url($base=site_url)
{
	echo $base;
}
function base_uri($base=site_url)
{
	return $base;
}
function img_path()
{
	echo "media/images/";
}
function img_path_()
{
	$value="media/images/";
	return $value;
}
function css_path()
{
	echo "media/css/";
}
function css_path_(){
	$value="media/css/";
	return $value;
}
function js_path(){
	echo "media/js/";
}
function js_path_(){
	$value="media/js/";
	return $value;
}
function url($url,$text)
{
	echo "<a href='".$url."'>".$text."</a>";
}
function url_new($url,$text)
{
	echo "<a href='".$url."' target='_blank'>".$text."</a>";
}
function tanggal_jam()
{
	$month=date("m");
	$bulan=bulan($month);
	$value=date("d")." ".$bulan." ".date("Y h:i:s");
	return $value;
}
function tanggal()
{
	$month=date("m");
	$bulan=bulan($month);
	$value=date("d")." ".$bulan." ".date("Y");
	return $value;
}
function tanggal_db()
{
	$value=date("Y-m-d");
	return $value;
}
function tanggal_jam_db()
{
	$value=date("Y-m-d h:i:s");
	return $value;
}
function tanggal_en()
{
	$value=date("d F Y");
	return $value;
}
function tanggal_jam_en()
{
	$value=date("d F Y h:i:s");
	return $value;
}
function browser_client()
{
	$value=getenv("HTTP_USER_AGENT");
	return $value;
}
function ip_client() 
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    return $ip;
                }
            }
        }
    }
}

function img($file,$width,$alt,$title)
{
	$path=img_path_();
	if((empty($width)) && (empty($alt)) && (empty($title))){
		$value="<img src='".$path.$file."'/>";			
	}else
	if(empty($alt) && empty($title)){
		$value="<img src='".$path.$file."' width='".$width."'/>";
	}else{
		$value="<img src='".$path.$file."' width='".$width."' alt='".$alt."' title='".$title."' />";
	}
	echo $value;
}

// function bulan($bulan)
// {
// 	switch($bulan){
// 		case 01: $bulan="Januari";
// 		break;
// 		case 02: $bulan= "Februari";
// 		break;
// 		case 03: $bulan= "Maret";
// 		break;
// 		case 04: $bulan= "April";
// 		break;
// 		case 05: $bulan= "Mei";
// 		break;
// 		case 06: $bulan= "Juni";
// 		break;
// 		case 07: $bulan= "Juli";
// 		break;
// 		case 08: $bulan= 'Agustus';
// 		break;
// 		case 09: $bulan= "September";
// 		break;
// 		case 10: $bulan= "Oktober";
// 		break;
// 		case 11: $bulan= "Nopember";
// 		break;
// 		case 12: $bulan= "Desember";
// 		break;
// 	} 
// 	return $bulan;
// }
function random_string($max = 20)
{
        $chars = "abcdefghijklmnopqrstuvwxwz0123456789";
        for($i = 0; $i < $max; $i++){
	   $rand_key = mt_rand(0, strlen($chars));
	$string  .= substr($chars, $rand_key, 1);
    }
    return str_shuffle($string);
}
?>
