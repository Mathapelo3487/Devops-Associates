<h1>Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="border-primary">
<style>
    #website-cover{
        width:100%;
        height:30em;
        object-fit:cover;
        object-position:center center;
    }
</style>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Total Packages</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `category_list` where delete_flag= 0 and `status` = 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-teal elevation-1"><i class="fas fa-file-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Active Policies</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `policy_list` where `status` = 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-maroon elevation-1"><i class="fas fa-file-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Inactive Policies</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `policy_list` where `status` = 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-user-tie"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `client_list` ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-teal elevation-1"><i class="fas fa-car"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Vehicles Insured</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `insurance_list` where `status` = 1 and date(expiration_date) > '".(date("Y-m-d"))."' ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
<<<<<<< HEAD
        <img src="http://localhost/vims/uploads/purple car.jpg" alt="Website Cover" class="img-fluid border w-100" id="website-cover">
=======
        <img src="http://localhost/vims/uploads/7.jpeg" alt="Website Cover" class="img-fluid border w-100" id="website-cover">
>>>>>>> 7dd7cea46b472e9556de4adfbe2a78c44ff3e8f7
    </div>
</div>
