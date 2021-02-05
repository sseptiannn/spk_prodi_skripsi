<?php

function UploadImageku($fupload_name){
//direktori gambar
	$vdir_upload = "../../images/";
	$vfile_upload = $vdir_upload . $fupload_name;
//Simpan gambar dalam ukuran sebenarnya
	move_uploaded_file($_FILES["foto"]["tmp_name"], $vfile_upload);
//identitas file asli
	$im_src = imagecreatefromjpeg($vfile_upload);
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);
//Simpan dalam versi small 110 pixel
//Set ukuran gambar hasil perubahan
	$dst_width = 55;
	$dst_height = ($dst_width/$src_width)*$src_height;
//proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width,$dst_height);
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
//Simpan gambar
	imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
//Hapus gambar di memori komputer
	imagedestroy($im_src);
	imagedestroy($im);
}


// Upload gambar untuk berita

function UploadImage($fupload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_berita/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["foto1"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 130;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 390;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

function UploadImageSaya($fupload_name){
  //direktori gambar
  $vdir_upload = "../admin/app/images/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 130;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 390;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}


function UploadImages($fupload_name){
  //direktori gambar
  $vdir_upload = "../../foto_user/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 100;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 390;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran

  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);

}
function UploadImage1($fupload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_portofolio/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 110;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 390;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

function UploadBanner($fupload_name){
  //direktori banner
  $vdir_upload = "../../../foto_banner/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadBg1($fupload_name){
  //direktori banner
  $vdir_upload = "../../../img/assets/bg/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
function UploadBg($fupload_name){
  //direktori banner
  $vdir_upload = "../../../img/assets/bg/pattern/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
function UploadImage2($fupload_name){
  //direktori banner
  $vdir_upload = "../../../foto_slide/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

// Upload file untuk download file
function UploadFile($fupload_name){
  //direktori file
  $vdir_upload = "../../../files/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan file
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}


// Upload gambar untuk album galeri foto
function UploadAlbum($fupload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_album/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 120 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 120;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "kecil_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}


// Upload gambar untuk galeri foto
function UploadGallery($fupload_name){
 $vdir_upload = "../../../img_galeri/";
 
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 130;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "kecil_" . $fupload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 700;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran

  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  
}


// Upload gambar untuk sekilas info
function UploadInfo($fupload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_info/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);
  
  
    $dst_width = 760;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "" . $fupload_name);
  

  //Simpan dalam versi small 54 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 54;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "kecil_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}

// Upload gambar untuk favicon
function UploadFavicon($fupload_name){
  //direktori favicon di root
  $vdir_upload = "../../../foto_halaman/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}


function UploadFilegambar5($fupload_name,$ekstensi,$nomor_file){
  
 $vdir_upload = "../../../foto_halaman/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 50;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 390;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);

}



function UploadFilefoto9($fupload_name,$ekstensi,$nomor_file){
  
  //direktori gambar
  $vdir_upload = "../../foto_user/";
  $vfile_upload = $vdir_upload . $fupload_name;
  
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload".$nomor_file]["tmp_name"], $vfile_upload);
  
  //identitas file asli
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      $dataim_src = imagecreatefromjpeg($vfile_upload);
  }
  elseif ($ekstensi=='png'){
      $dataim_src = imagecreatefrompng($vfile_upload);
  }
  elseif ($ekstensi=='gif'){
      $dataim_src = imagecreatefromgif($vfile_upload);
  }
  $im_src = $dataim_src;
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);
  
  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 110;
  $dst_height = ($dst_width/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im,$vdir_upload . "small_" . $fupload_name);
  }
  
  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 200;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

function UploadFilegambar9($fupload_name,$ekstensi,$nomor_file){
  
  //direktori gambar
  $vdir_upload = "../../../foto_album/";
  $vfile_upload = $vdir_upload . $fupload_name;
  
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload".$nomor_file]["tmp_name"], $vfile_upload);
  
  //identitas file asli
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      $dataim_src = imagecreatefromjpeg($vfile_upload);
  }
  elseif ($ekstensi=='png'){
      $dataim_src = imagecreatefrompng($vfile_upload);
  }
  elseif ($ekstensi=='gif'){
      $dataim_src = imagecreatefromgif($vfile_upload);
  }
  $im_src = $dataim_src;
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);
  
  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 130;
  $dst_height = ($dst_width/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im,$vdir_upload . "small_" . $fupload_name);
  }
  
  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 260;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

function UploadFilegambar4($fupload_name,$ekstensi,$nomor_file){
  
  //direktori gambar
  $vdir_upload = "../../../banner/";
  $vfile_upload = $vdir_upload . $fupload_name;
  
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload".$nomor_file]["tmp_name"], $vfile_upload);
  
  //identitas file asli
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      $dataim_src = imagecreatefromjpeg($vfile_upload);
  }
  elseif ($ekstensi=='png'){
      $dataim_src = imagecreatefrompng($vfile_upload);
  }
  elseif ($ekstensi=='gif'){
      $dataim_src = imagecreatefromgif($vfile_upload);
  }
  $im_src = $dataim_src;
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);
  
  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 130;
  $dst_height = ($dst_width/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im,$vdir_upload . "small_" . $fupload_name);
  }
  
  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 260;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}

function UploadFilegambar6($fupload_name,$ekstensi,$nomor_file){
  
  //direktori gambar
  $vdir_upload = "../../../foto_struktur/";
  $vfile_upload = $vdir_upload . $fupload_name;
  
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload".$nomor_file]["tmp_name"], $vfile_upload);
  
  //identitas file asli
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      $dataim_src = imagecreatefromjpeg($vfile_upload);
  }
  elseif ($ekstensi=='png'){
      $dataim_src = imagecreatefrompng($vfile_upload);
  }
  elseif ($ekstensi=='gif'){
      $dataim_src = imagecreatefromgif($vfile_upload);
  }
  $im_src = $dataim_src;
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);
  
  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 80;
  $dst_height = ($dst_width/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im,$vdir_upload . "small_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im,$vdir_upload . "small_" . $fupload_name);
  }
  
  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 140;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;
  
  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);
  
  //Simpan gambar
  if ($ekstensi=='jpg' OR $ekstensi=='jpeg'){
      imagejpeg($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='png'){
      imagepng($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  elseif ($ekstensi=='gif'){
      imagegif($im2,$vdir_upload . "medium_" . $fupload_name);
  }
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}
?>
