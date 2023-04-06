<?php

session_start();
include('config/dbcon.php');
if(isset($_POST['add_category_btn']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title= $_POST['meta_title'];
    $meta_description= $_POST['meta_description'];
    $meta_keywords= $_POST['meta_keywords'];
    $status= isset($_POST['status']) ? '1':'0';
    $popular= isset($_POST['popular'])? '1':'0';

    $image = $_FILES['image']['name'];
    $path= "uploads";

    $image_ext=pathinfo($image, PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;

    $cate_query= "insert into categories (name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image)
    values ('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status','$popular','$filename')";

    $cate_query_run=mysqli_query($con, $cate_query);

    if($cate_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
   

    }
    else
    {
        echo "not reddy";
    }
}
else if(isset($_POST['update_category_btn']))
{
    $category_id=$_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title= $_POST['meta_title'];
    $meta_description= $_POST['meta_description'];
    $meta_keywords= $_POST['meta_keywords'];
    $status= isset($_POST['status']) ? '1':'0';
    $popular= isset($_POST['popular'])? '1':'0';

    $new_image = $_FILES['image']['name'];
    $old_image=$_POST['old_image'];
    if($new_image!="")
    {
       // $update_filename=$new_image;
        $image_ext=pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename=time().'.'.$image_ext;
    }
    else{
        $update_filename=$old_image;
    }

    $update_query= "UPDATE categories SET name='$name', slug='$slug',description='$description',meta_title='$meta_description',meta_description='meta_description',meta_keywords='$meta_description',status='$status', popular='$popular',image=' $update_filename ' where id='$category_id' ";
    $update_query_run= mysqli_query($con,$update_query);
    if($update_query_run)
    {
        if($_FILES['image']['name']!="")
        {
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename);
            if(file_exists("uploads/".$old_image))
            {
                unlink("uploads/".$old_image);
            }
        }
        
    }
    echo "done bhawa";


}
else if(isset($_POST['delete_category_btn']))
{
    $category_id=mysqli_real_escape_string($con,$_POST['category_id']);

    $category_query="SELECT * from categories where id='$category_id'";
    $category_query_run= mysqli_query($con, $category_query);
    $category_data= mysqli_fetch_array($category_query_run);

    $image=$category_data['image'];
    $delete_query="DELETE from categories where id='$category_id'";
    $delete_query_run= mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        echo "ok delete";
        if(file_exists("/uploads/".$old_image))
            {
                unlink("/uploads/".$old_image);
            }

    }
}
elseif(isset($_POST['slider1']))
{
    $image11 = $_FILES['image11']['name'];
    $image12 = $_FILES['image12']['name'];
    $image13 = $_FILES['image12']['name'];
    $path= "slider1";
    $image_ext=pathinfo($image11, PATHINFO_EXTENSION);
    $image_ext=pathinfo($image12, PATHINFO_EXTENSION);
    $image_ext=pathinfo($image13, PATHINFO_EXTENSION);

    $update_filename=time().'.'.$image_ext;


    $cate_query1= "insert into slider1 (image11,image12,image13)
    values ('$image11,$image12,$image13')";

    $cate_query_run1=mysqli_query($con, $cate_query1);

if($cate_query_run1)
{
    move_uploaded_file($_FILES['image11']['tmp_name'], $path);
    move_uploaded_file($_FILES['image12']['tmp_name'], $path);
    move_uploaded_file($_FILES['image13']['tmp_name'], $path);
    echo "File uploaded";



}
else
{
    echo "not reddy";
}
}
?>