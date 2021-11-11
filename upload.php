<?php  
if(isset($_POST['submit'])&&isset($_FILES['my_video'])){
    echo "<pre>";
    print_r($_FILES['my_video']);
    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];

    if($error === 0 )
    {
        //get video extension
        $vid_ext = pathinfo($video_name , PATHINFO_EXTENSION);
        //n7awlo l ext to lowerCase
        $vid_ext_lc = strtolower($vid_ext);
    
        //les extensions eli malezemch ndakhlo ghirhom 
        $allowed_exts = array("mp4" , "webm" , "avi" ,"flv" ,"mkv");
        if(in_array($vid_ext_lc,$allowed_exts)){
            $new_video_name = uniqid("video-",true). '.' .$vid_ext_lc; 
            $video_uploaded_path = 'uploads_videos/' . $new_video_name;
            move_uploaded_file($tmp_name,$video_uploaded_path);
        }else
        {
            $errorExtMsg = "you can't upload file of this type!";
            header("Location: index.php?error=$errorExtMsg");
        }
            
    }

}else
header("Location: index.php");
?>