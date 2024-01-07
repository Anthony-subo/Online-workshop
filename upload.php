<?php


if (isset($_POST['submit']) && isset($_FILES['my_image']) ) {
     include "db_conn.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "<pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ( $error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, you file is too large.";
            header("location: index1.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");

            if (in_array($img_ex_lc,  $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                // insert into Database
                $sql = "INSERT INTO images(image) 
                VALUES('$new_img_name')";
                mysqli_query($conn, $sql);
                header("location: view.php");

            }else {
                $em = "you cant upload file of this type!";
                header("location: index1.php?error=$em");
            }
        }
    }else {
        $em = "unknown error occurred!";
        header("location: index1.php?error=$em");
    }
}else {
    header("location: index1.php");
}
