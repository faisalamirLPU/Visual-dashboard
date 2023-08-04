<?php session_start();
include_once('includes/config.php');

$query = "select * from shopping1.data order by id";
$result = mysqli_query($con, $query);
if(strlen( $_SESSION["aid"])==0)
{   
header('location:logout.php');
} else {

if(isset($_GET['del']))
{
mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='manage-products.php'</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
 <?php include_once('includes/header.php');?>
        <div id="layoutSidenav">
       <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Products</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Products Details
                            </div>
                            <div class="card-body table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">End Year</th>
                                        <th scope="col">Citying</th>
                                        <th scope="col">Citylat</th>
                                        <th scope="col">Intensity</th>
                                        <th scope="col">Sector</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Insight</th>
                                        <th scope="col">Swot</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Region</th>
                                        <th scope="col">Start Year</th>
                                        <th scope="col">Impact</th>
                                        <th scope="col">Added</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Relevance</th>
                                        <th scope="col">Pestle</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Likelihood</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">End Year</th>
                                        <th scope="col">Citying</th>
                                        <th scope="col">Citylat</th>
                                        <th scope="col">Intensity</th>
                                        <th scope="col">Sector</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Insight</th>
                                        <th scope="col">Swot</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Region</th>
                                        <th scope="col">Start Year</th>
                                        <th scope="col">Impact</th>
                                        <th scope="col">Added</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Relevance</th>
                                        <th scope="col">Pestle</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Likelihood</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 

while($row = mysqli_fetch_assoc($result)){
    ?>
                                        <th scope="row"><?php echo $row['id']; ?></th>
                                        <td><?php echo $row['end_year']; ?></td>
                                        <td><?php echo $row['citylng']; ?></td>
                                        <td><?php echo $row['citylat']; ?></td>
                                        <td><?php echo $row['intensity']; ?></td>
                                        <td><?php echo $row['sector']; ?></td>
                                        <td><?php echo $row['topic']; ?></td>
                                        <td><?php echo $row['insight']; ?></td>
                                        <td><?php echo $row['swot']; ?></td>
                                        <td><?php echo $row['url']; ?></td>
                                        <td><?php echo $row['region']; ?></td>
                                        <td><?php echo $row['start_year']; ?></td>
                                        <td><?php echo $row['impact']; ?></td>
                                        <td><?php echo $row['added']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['country']; ?></td>
                                        <td><?php echo $row['relevance']; ?></td>
                                        <td><?php echo $row['pestle']; ?></td>
                                        <td><?php echo $row['source']; ?></td>
                                        <td><?php echo $row['likelihood']; ?></td>
                                        
                                    </tr>
                                    <?php

                            }
                            

                            ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include_once('includes/footer.php');?>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
