<?php include_once "template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="my-3">
                <div>
                    <form method="post" class="d-flex d-inline-block" >

                        <input type="text" name="category" class="form-control" placeholder="Add Category">
                        <button class="btn btn-outline-primary ms-2" name="add">
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                <?php

                if (isset($_POST['add'])) {
                    if (createCategory()) {
                        echo showAlert('success', 'Created Product');
                    } else {
                        echo showAlert('danger', 'Created Product fail');
                    }

                }


                if (isset($_POST['delete'])) {
                    $id= $_POST['id'];
                    if (deleteCategory($id)) {
                        echo showAlert('success', 'Deleted Categories');
                    } else {
                        echo showAlert('danger', 'Deleted Categories Fail');
                    }

                }

                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="my-3">
                            <table class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CATEGORY</th>
                                    <th>CONTROL</th>
                                    <th>CreatedTime</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (categories() as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row->id; ?></td>
                                        <td><?php echo $row->title; ?></td>
                                        <td>

                                            <div class="d">
                                                <a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-outline-warning">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <form method="post" class="d-inline-block">
                                                    <input type="hidden" name="id" value="<?php echo $row->id; ?>" >
                                                    <button class="btn btn-outline-danger" name="delete">
                                                        <i class="bi bi-trash"></i>

                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                        <td><?php echo date('d F Y',strtotime($row->created)); ?></td>

                                    </tr>


                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include_once "template/footer.php"; ?>
