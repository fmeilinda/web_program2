<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $judul; ?></title>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <br>
                        <br>
                        <br><br>
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                    <?= $this->session->flashdata('message'); ?> 
                                        <h1><font color="red">Welcome Back!</font></h1>
                                    </div>
                                    <hr>
                                    <form class="user" method="post" action=<?= base_url('auth'); ?>>
                                        <div class="form-group"> <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> </div>
                                        <div class="form-group"> <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password"> </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block"> Login </button>
                                    </form>
                                    <hr>
                                    <div class="text-center"> <a class="small" href="forgot-password.html"><font color="red">Forgot Password?</font></a> </div>
                                    <div class="text-center"> <a class="small" href="http://localhost/latihancodeigniter3/penjualan/auth/registration/"><font color="red">Create an Account!</font></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>