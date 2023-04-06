<?php include('includes/header.php');?>




<div class="container" left:300px>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add To Shop</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                   <div class="col-md-6">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" placeholder="enter category name" >
                    </div>
                <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="enter slug" >

                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea rows="3"  name="description" placeholder="enter discription" class="form-control">
                    </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Upload image</label>
                    <input type="file"  name="image" class="form-control" >

                </div>
                <div class="col-md-12">
                    <label for="">Meta title</label>
                    <input type="text"  name="meta_title" placeholder=" enter meta title" class="form-control" >

                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea rows="3"  name="meta_description" placeholder="enter meta discription" class="form-control">
                    </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta keyword</label>
                    <textarea rows="3"  name="meta_keywords" placeholder="enter meta_keywords" class="form-control" >
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="">status</label>
                    <input type="checkbox"  name="status"  >
                </div>
                <div class="col-md-6">
                    <label for="">popular</label>
                    <input type="checkbox"  name="popular"  >
                </div><br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="add_category_btn">save</button>
                </div>
            </div>
                   </form>
                  </div>
                
            </div>
        </div>
    </div>
    
</div>
<?php include('includes/footer.php'); ?>