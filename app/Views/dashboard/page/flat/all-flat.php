<?= $this->extend('dashboard/partial/layout') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-12">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_user"class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Flat ID</th>
                <th scope="col">Flat Size</th>
                <th scope="col">Rent</th>
                <th scope="col">Status</th>
                
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($flats)>0){
                    foreach ($flats as $flat) {              
                ?>
                <tr class="align-middle">
                    <td><?= $user['serial'] ?></td>
                    <td><?= $user['flat_id'] ?></td>
                    <td><?= $user['flat_size'] ?></td>
                    <td><?= $user['rent'] ?></td>
                    <td><?= $user['status'] ?></td>
                    
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a class="edit" href="<?= base_url('dashboard/edit_flat/'.$user['serial'] ) ?>"><i class="fa-solid fa-eye p-1"></a></i></li>
                            <li><a href="<?= base_url('dashboard/edit_flat/'.$user['serial'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/delete_flat/'.$flat['serial'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
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
