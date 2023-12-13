<?= $this->extend('dashboard/partial/layout') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            
            
            <form action="<?= base_url('/dashboard/update_pay/').$user['p_id'];?>"  method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a class="text-decoration-none btn btn-primary ">All new</a></div>
       
            <div class="mb-3">
                    <label for="tanent_name" class="form-label">Tanent Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $pay['tanent_name']; ?>" >
                    
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="flat" class="form-label">Flat</label>
                    <input type="text" class="form-control" id="flat" name="flat" value="<?= $pay['flat']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["flat"]) ? $validation["flat"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="rent" class="form-label">Rent</label>
                    <input type="text" class="form-control" id="rent" name="rent" value="<?= $pay['rent']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["rent"]) ? $validation["rent"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="cost" class="form-label">Service Charge</label>
                    <input type="text" class="form-control" id="cost" name="cost"value="<?= $pay['cost']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["cost"]) ? $validation["cost"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total Amount</label>
                    <input type="text" class="form-control" id="total" name="total"value="<?= $pay['total']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["total"]) ? $validation["total"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="paid" class="form-label">Paid Amount</label>
                    <input type="text" class="form-control" id="paid" name="paid" value="<?= $pay['paid']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["paid"]) ? $validation["paid"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="due" class="form-label">Due Amount</label>
                    <input type="text" class="form-control" id="due" name="due"value="<?= $pay['due']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["due"]) ? $validation["due"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="paymeth" class="form-label">Payment Method</label>
                    <input type="text" class="form-control" id="paymeth" name="paymeth"value="<?= $pay['paymeth']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["paymeth"]) ? $validation["paymeth"] : null;  ?></small>
                </div>
                <div class="mb-3">
                    <label for="tx_id" class="form-label">Transection ID</label>
                    <input type="text" class="form-control" id="tx_id" name="tx_id"value="<?= $pay['tx_id']; ?>">
                    
                    <small class="text-danger"><?= isset($validation["tx_id"]) ? $validation["tx_id"] : null;  ?></small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
    </form>
                
        </div>
        
    
</div>
<?= $this->endSection(); ?>