<?php
//  session_start();
include_once "./controller/Config.php";
// $_SESSION['currentRegisterUserEmail'];
 //    $_SESSION['currentRegisterUSerAdhar'];
$handler =new Config();
if(isset($_POST['upload']))
{
  /**
   * fetch current current user id for reference to
   */
  $email=$_SESSION['currentRegisterUserEmail'];
  $sql="select id from user where user_email='$email'";
  echo $sql;
  $res=mysql_query($sql);
  $count=mysql_num_rows($res);
  $id="";
  if($count==1)
  {
    $data=mysql_fetch_array($res);
    $id=$data['id'];
  }
    $err="";
  $adhar=$_FILES['adhar']['name'];
  $pan=$_FILES['pan']['name'];
  $sign=$_FILES['sign']['name'];
  $image=$_FILES['userImage']['name'];
    $adhar_tmp=$_FILES['adhar']['tmp_name'];
    $pan_tmp=$_FILES['pan']['tmp_name'];
    $sign_tmp=$_FILES['sign']['tmp_name'];
    $image_tmp=$_FILES['userImage']['tmp_name'];
    /* adhar card upload */
    $targetDir="./upload/adhar/";
    $targetFileName=$targetDir.basename($adhar);

    //var_dump($targetFileName);
    $imageFileType=pathinfo($targetFileName,PATHINFO_EXTENSION);
    $target_file_to_upload=$targetDir.str_replace(' ', '_', $_SESSION['currentRegisterUserEmail'].$_SESSION['currentRegisterUSerAdhar']).".".$imageFileType;
    //echo $imageFileType;
    //var_dump($target_file_to_upload);
     
        if($imageFileType=='jpg'||$imageFileType=='JPG'||$imageFileType=='PNG'||$imageFileType=='png'||$imageFileType=='jpeg'||$imageFileType=='JPEG'){
          $upload_adhar=move_uploaded_file($adhar_tmp, $target_file_to_upload);

        }else{
          $err.="file format not sported for Adhar card";
        }
           /* upload pan card */
           $targetDirPan="./upload/pan/";
           $targetFileNamePan=$targetDirPan.basename($pan);
           //var_dump($targetFileNamePan);
           $imageFileTypePan=pathinfo($targetFileNamePan,PATHINFO_EXTENSION);
           $target_file_to_upload_pan=$targetDirPan.str_replace(' ','_',$_SESSION['currentRegisterUserEmail'].$_SESSION['currentRegisterUSerAdhar']).".".$imageFileTypePan;
           if($imageFileTypePan=='jpg'||$imageFileTypePan=='JPG'||$imageFileTypePan=='PNG'||$imageFileTypePan=='png'||$imageFileTypePan=='jpeg'||$imageFileTypePan=='JPEG'){
            $upload_pan=move_uploaded_file($pan_tmp,$target_file_to_upload_pan);
           }else{
             $err.="File format not supported for Pan Card";
           }
           /**
            * upload sign
            */
            $targetDirSign="./upload/sign/";
            $targetFileNameSign=$targetDirSign.basename($sign);
            //var_dump($targetFileNameSign);
            $imageFileTypeSign=pathinfo($targetFileNameSign,PATHINFO_EXTENSION);
            $target_file_to_upload_sign=$targetDirSign.str_replace(' ','_',$_SESSION['currentRegisterUserEmail'].$_SESSION['currentRegisterUSerAdhar']).".".$imageFileTypeSign;
            if($imageFileTypeSign=='jpg' || $imageFileTypeSign=='JPG' || $imageFileTypeSign=='png' || $imageFileTypeSign=='jpeg' || $imageFileTypeSign=='JPEG'){
              $upload_sign=move_uploaded_file($sign_tmp,$target_file_to_upload_sign);
            }
            else{
              $err.="File Format not supported for Sign";
            }
            /**
             * upload Image
             * 
             */
            $targetDirImage="./upload/userImage/";
            $targetFileNameImage=$targetDirImage.basename($image);
           // var_dump($targetFileNameImage);
            $imageFileTypeImage=pathinfo($targetFileNameImage,PATHINFO_EXTENSION);
            $target_file_to_upload_image=$targetDirImage.str_replace(' ','_',$_SESSION['currentRegisterUserEmail'].$_SESSION['currentRegisterUSerAdhar']).".".$imageFileTypeImage;
            if($imageFileTypeImage=='jpg' || $imageFileTypeImage=='JPG' || $imageFileTypeImage=='png' || $imageFileTypeImage=='jpeg' || $imageFileTypeImage=='JPEG'){
              $upload_sign=move_uploaded_file($image_tmp,$target_file_to_upload_image);
            }
            else{
              $err.="File Format not supported for Sign";
            }
          if(empty($err))
          {
            /**
             * Insert All image link into database
             */
            $sql="insert into user_image (adhar,pan,sign,image,ref_id) values('$target_file_to_upload','$target_file_to_upload_pan','$target_file_to_upload_sign','$target_file_to_upload_image','$id') ";
            $resImage=mysql_query($sql);
            if($resImage)
            {
              $succ="Image has been  uploaded";
            }
           

          }
  } 
?>