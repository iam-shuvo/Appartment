<?= $this->extend('dashboard/partial/layout');?>

<?= $this->section('title');?>
<?= $page_title;?>
<?= $this->endsection();?>


<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-8 m-3">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4">
            <h3><?=$page_heading;?></h3><a href="<?= base_url()?>dashboard/all_gk" class="text-decoration-none btn btn-primary">All Gatekeeper list </a></div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label> <br>
                    <input type="text" class="form-control" id="name" name="name">
                    <!-- <span>display_error($validation, 'name')</span> -->
                    <small class="text-danger"><?=isset($validation["name"]) ? $validation["name"] : null; ?>
                    </small>

                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">address</label>
                    <input type="text" class="form-control" id="address" name="address">
                    <small class="text-danger"><?= isset($validation['address']) ? $validation['address'] : null ;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                    <small class="text-danger"><?= isset($validation['phone']) ? $validation['phone'] : null ;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="nid" class="form-label">NID number</label>
                    <input type="text" class="form-control" id="nid" name="nid">
                    <small class="text-danger"><?= isset($validation['nid']) ? $validation['nid'] : null ;  ?></small>
                </div>


                

                <div class="mb-3">
                    <label for="shift" class="form-label">shift</label>
                    <input type="text" class="form-control" id="shift" name="shift">
                    <small class="text-danger"><?= isset($validation['shift']) ? $validation['shift'] : null ;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">status</label>
                    <input type="text" class="form-control" id="status" name="status">
                    <small class="text-danger"><?= isset($validation['status']) ? $validation['status'] : null ;  ?></small>
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