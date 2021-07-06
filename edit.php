
<?php include_once "template/header.php";?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="my-5">
                <a href="index.php" class="btn btn-outline-primary">List</a>
                <?php

                $id = $_GET['id'];
                $category= category($id);
                if(isset($_POST['update'])){
                    if (updateCategory()){
                        echo showAlert('success','Updated Category');
                    }else {
                        echo showAlert('danger', 'Updated Category fail');
                    }

                }




                ?>

                <form  method="post">
                    <input type="hidden" name="id" value="<?php echo $category->id;?>">
                    <div class="mb-3">
                        <label  class="form-label">Item Name</label>
                        <input type="text" class="form-control" name="category" value="<?php echo $category->title;?>">
                    </div>

                    <button class="btn btn-outline-primary" name="update">Update</button>

                </form>
            </div>
        </div>
    </div>

</div>
<?php include_once "template/footer.php";?>



