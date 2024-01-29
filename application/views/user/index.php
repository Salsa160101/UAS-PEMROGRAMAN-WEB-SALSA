
<?php $this->load->view('includes/header'); ?>
<section class="slide fade-6 kenBurns" id="menu">
  <div class="content">
    <div class="container">
      <div class="wrap">
<div class="container">
    <div class="row">
            <div class="card-body">
                <h5 class="card-title text-center">Data Tamu</h5>
                <a href="<?=base_url()?>user/add" class="btn btn-sm btn-primary" style="width: 150px; height: 35px; font-size: 15px;">Tambah Data Tamu</a><br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Paket</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($users as $row) { ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['mobile']?></td>
                            <td><?=$row['paket']?></td>
                            <td>
                                <a href="<?=base_url()?>user/edit/<?=$row['id']?>" class="btn btn-sm btn-warning" style="width: 50px; height: 25px; font-size: 15px;">Edit</a>
                                <a href="<?=base_url()?>user/delete/<?=$row['id']?>" onclick="return confirm('Are you sure want to delete this user ?')" class="btn btn-sm btn-danger" style="width: 50px; height: 25px; font-size: 15px;">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Added
                    </div>
                <?php }
                ?>
                <?php
                if ($this->session->flashdata('deleted')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Deleted
                    </div>
                <?php }
                ?>
                 <?php
                if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        Failed!
                    </div>
                <?php }
                ?>

            </div>
        </div>
</div>
</div>
    </div>
  </div>
  <div class="background" style="background-image:url(<?=base_url()?>public/assets/img/background/img-34.jpg)"></div>
</section>
<?php $this->load->view('includes/footer'); ?>