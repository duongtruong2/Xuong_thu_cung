<!-- <header></header> -->
<?php require './views/layout/header.php'; ?>
<?php include './views/layout/navbar.php'; ?>
<?php include './views/layout/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý danh mục sản phẩm </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sua danh mục sản phẩm </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= BASE_URL_ADMIN . '?act=sua-danh-muc'?>" method="POST">
            <input type="text" value="<?=$danhmuc['id'] ?>" name="id" hidden>
            <div class="card-body">
                <div class="form-group">
                    <label >Tên danh mục </label>
                    <input type="text" class="form-control" name="ten_danh_muc" value="<?=$danhmuc['ten_danh_muc'] ?>" placeholder="Nhập tên danh mục">
                <?php if(isset($errors['ten_danh_muc'])){?>
                   <p class="text-danger"><?=$errors['ten_danh_muc'] ?></p>
               <?php } ?>
                </div>
                 <div class="form-group">
                    <label >Mô tả </label>
                    <textarea name="mo_ta" id="" class="form-control" placeholder="Nhập mô tả "><?=$danhmuc['mo_ta'] ?></textarea>
                </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<?php include './views/layout/footer.php'; ?>


</body>

</html>