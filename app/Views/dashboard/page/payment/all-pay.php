<?= $this->extend('dashboard/partial/layout') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-12">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_pay"class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Flat</th>
                <th scope="col">Month</th>
                <th scope="col">Rent</th>
                <th scope="col">Service Charge</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Paid Amount</th>
                <th scope="col">Due Amount</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Invoice</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($pays)>0){
                    foreach ($pays as $pay) {              
                ?>
                <tr class="align-middle">
                    <td><?= $pay['p_id'] ?></td>
                    <td><?= $pay['tanent_name'] ?></td>
                    <td><?= $pay['flat'] ?></td>
                    <td><?= $pay['month'] ?></td>
                    <td><?= $pay['rent'] ?></td>
                    <td><?= $pay['cost'] ?></td>
                    <td><?= $pay['total'] ?></td>
                    <td><?= $pay['paid'] ?></td>
                    <td><?= $pay['due'] ?></td>
                    <td><?= $pay['paymeth'] ?></td>
                    <td><?= $pay['tx_id'] ?></td>
                    <td><?= $pay['invoice'] ?></td>
                    
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a class="edit" href="<?= base_url('dashboard/edit_pay/'.$pay['p_id'] ) ?>"><i class="fa-solid fa-eye p-1"></a></i></li>
                            <li><a href="<?= base_url('dashboard/edit_pay/'.$pay['p_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/delete_pay/'.$pay['p_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
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
