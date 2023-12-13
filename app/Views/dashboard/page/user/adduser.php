<?= $this->extend('dashboard/partial/layout') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>


<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            
            
            <form action="" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_user" class="text-decoration-none btn btn-primary ">All new</a>
            </div>
              
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <!-- <span>display_error($validation, 'name')</span> -->
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Address</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <small class="text-danger"><?= isset($validation['username']) ?  $validation['username'] :null ; ?></small>
                </div>

                <div class="mb-3">
                    <label for="email1" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <small class="text-danger"><?= isset($validation['email']) ? $validation['email'] : null ;  ?></small>
                </div>

               
                <div class="mb-3">
                    <label for="password" class="form-label">Flat ID</label>
                    <input type="text" class="form-control" id="password" name="password">
                    <small class="text-danger"><?= isset($validation['password']) ?  $validation['password'] :null ; ?></small>
                </div>

                <div class="mb-3">
                    <label for="nid" class="form-label">National Identity Number</label>
                    <input type="number" class="form-control" id="nid" name="nid">
                    <small class="text-danger"><?= isset($validation['nid']) ?  $validation['nid'] :null ; ?></small>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>