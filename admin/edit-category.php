<?php include('includes/header.php');?>
<?php include('function/myfunction.php');?>




<div class="container" left:300px>
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_GET['id']))
            {
                $id= $_GET['id'];
                $category= getByID("categories",$id);

                if(mysqli_num_rows($category) > 0)
                {
                    $data=mysqli_fetch_array($category);

                
                ?>
                 <div class="card">
                <div class="card-header">
                    <h4>edit category</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                   <div class="col-md-6">
                    <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data['name'] ?>" placeholder="enter category name" >
                    </div>
                <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="<?= $data['slug'] ?>" placeholder="enter slug" >

                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea rows="3"  name="description" placeholder="enter discription" class="form-control">
                        <?=$data['description'] ?>
                    </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Upload image</label>
                    <input type="file"  name="image" class="form-control" >
                    <label for="">Current image</label>
                    <input type="hidden" name="old_image" value="<?= $data['image']?>">
                    <img src="uploads/<?=$data['image'] ?>" height="50px" width="50px" alt="">

                </div>
                <div class="col-md-12">
                    <label for="">Meta title</label>
                    <input type="text"  name="meta_title" value="<?= $data['meta_title'] ?>"placeholder=" enter meta title" class="form-control" >

                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea rows="3"  name="meta_description" placeholder="enter meta discription" class="form-control"><?=$data['meta_description'] ?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta keyword</label>
                    <textarea rows="3"  name="meta_keywords" placeholder="enter meta_keywords" class="form-control" ><?=$data['meta_keywords'] ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="">status</label>
                    <input type="checkbox"  <?=$data['status'] ? "checked":"" ?>name="status"  >
                </div>
                <div class="col-md-6">
                    <label for="">popular</label>
                    <input type="checkbox" <?=$data['status'] ? "checked":"" ?> name="popular"  >
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
                </div>
            </div>
                   </form>
                  </div>
                
            </div>
                


                <?php
                }
                else{
                    echo "category not found";
                }

            }
            else{
                  echo "Id missing from url";
            }

            ?>
           
        </div>
    </div>
    
</div>
<?php include('includes/footer.php'); ?>