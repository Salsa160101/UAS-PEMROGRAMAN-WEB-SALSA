<?php $this->load->view('includes/header'); ?>
<section class="slide fade-6 kenBurns" id="menu">
  <div class="content">
    <div class="container">
      <div class="wrap">
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Update Tamu</h5>
                <form method="post" action="<?= base_url() ?>user/edit/<?=$id?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" value="<?=$user->username?>" class="form-control" id="username" style="height: 30px; font-size: 15px;">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?=$user->email?>" placeholder="Email" aria-describedby="emailHelp" style="height: 30px; font-size: 15px;">

                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Telepon</label>
                        <input type="text" maxlength="10" class="form-control" value="<?=$user->mobile?>" name="mobile" placeholder="Mobile" id="mobile" style="height: 30px; font-size: 15px;">
                    </div>
                    <div class="mb-3">
                        <label for="paket" class="form-label">Paket</label>
                        <input type="text" name="paket" placeholder="paket" value="<?=$user->paket?>" class="form-control" id="paket" style="height: 30px; font-size: 15px;">
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100px; height: 40px; font-size: 15px;">Update</button>
                </form>
                <?php
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Updated
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
  </div>
  <div class="background" style="background-image:url(<?=base_url()?>public/assets/img/background/img-34.jpg)"></div>
</section>
<?php $this->load->view('includes/footer'); ?>