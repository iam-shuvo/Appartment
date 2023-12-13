<?= $this->extend('dashboard/partial/layout') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-12">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_gk"class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">National Identity Number</th>
                <th scope="col">Shift</th>
                <th scope="col">status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($gks)>0){
                    foreach ($gks as $gk) {              
                ?>
                <tr class="align-middle">
                    <td><?= $gk['gk_id'] ?></td>
                    <td><?= $gk['name'] ?></td>
                    <td><?= $gk['address'] ?></td>
                    <td><?= $gk['phone'] ?></td>
                    <td><?= $gk['nid'] ?></td>
                    <td><?= $gk['shift'] ?></td>
                    <td><?= $gk['status'] ?></td>
                    
                    <td><img src="<?= base_url('uploads/img/'.$gk['image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a class="edit" href="<?= base_url('dashboard/edit_use/'.$gk['gk_id'] ) ?>"><i class="fa-solid fa-eye p-1"></a></i></li>
                            <li><a href="<?= base_url('dashboard/edit_gk/'.$gk['gk_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/delete_gk/'.$gk['gk_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
                        </ul>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
 
            </tbody>
        </table>
        <div>
            <?= $pager->links('group') ?>
        </div>            
    </div>
    </div>
<?= $this->endSection(); ?>
