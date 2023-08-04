<?php session_start();
include_once('includes/config.php');

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/header.php'); ?>


        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>

            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <?php include_once('includes/phpchart.php'); ?>
                        <div class="container mt-5">

                       

                       
                        

                            <div class="row">
                                <div class="col-md-6">
                                <!-- <?php include_once('includes/phpchart.php'); ?> -->
                                    <canvas id="barChart"></canvas>
                                    <canvas id="horizontalBar"></canvas>
                                </div>
                                <div class="col-md-6">
                                    <canvas id="lineChart"></canvas>
                                    <canvas id="pieChart"></canvas>
                                </div>
                                

                                

                            </div>
                        </div>




                    </div>
                </main>
                <!-- <?php include_once('includes/footer.php');?> -->
                
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

        <script src="js/dashboard.js"></script>
        
        
    </body>
    

    </html>
<?php  ?>