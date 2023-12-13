<?= $this->extend('dashboard/partial/layout') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>


<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            
            
            <form action="" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_flat" class="text-decoration-none btn btn-primary ">All new</a>
            </div>
              
                <div class="mb-3">
                    <label for="name" class="form-label">Flat ID</label>
                    <input type="text" class="form-control" id="flat_id" name="flat_id">
                    <!-- <span>display_error($validation, 'name')</span> -->
                    <small class="text-danger"><?= isset($validation["flat_id"]) ? $validation["Flat_id"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="flat_size" class="form-label">Flat Size</label>
                    <input type="text" class="form-control" id="flat_size" name="flat_size">
                    <small class="text-danger"><?= isset($validation['flat_size']) ?  $validation['flat_size'] :null ; ?></small>
                </div>

                <div class="mb-3">
                    <label for="rent" class="form-label">Rent</label>
                    <input type="text" class="form-control" id="rent" name="rent">
                    <small class="text-danger"><?= isset($validation['rent']) ? $validation['rent'] : null ;  ?></small>
                </div>

               
                <div class="mb-3">
                    <label for="status" class="form-label">Flat Status</label>
                    <input type="text" class="form-control" id="status" name="status">
                    <small class="text-danger"><?= isset($validation['status']) ?  $validation['status'] :null ; ?></small>
                </div>

                
                
               
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>