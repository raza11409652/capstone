<?php
include_once "admin/includes/header.php"; 
$sql="select * from user";
$res=mysql_query($sql);
$countUser=mysql_num_rows($res);
$sqlReq="select * from user_request";
$resR=mysql_query($sqlReq);
$countReq=mysql_num_rows($resR);

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card teal-700">
                    <div class="text-center">
                        <div class="card-heading">
                            Total Registerd user
                        </div>
                        <div class="card-content">
                            <i class="fa fa-user"></i>
                           <?php  echo $countUser;?>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card orange-700">
                    <div class="text-center">
                        <div class="card-heading">
                            Pending Work
                        </div>
                        <div class="card-content">
                            <i class="fa fa-pencil"></i>
                            10
                        </div>
                    </div>
                </div>
            </div-->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card grey-blue-dark">
                    <div class="text-center">
                        <div class="card-heading">
                           User Request
                        </div>
                        <div class="card-content">
                            <i class="fa fa-pencil"></i>
                           <?php echo $countReq; ?>
                        </div>
                    </div>
                </div>
            </div>        
        </div>                           
    <section class="row margin-top-default">
            <form id="adminFileSearch" action="?admin=search" method="POST">
            <div class="col-lg-6" id="serchFile">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        File search
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="search" class="form-control" name="searchBox">
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" class=" btn btn-warning"  value="Search">
                        </div>
                    </div>
                </div>
            </div> 
            </form>
            <div class="col-lg-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Latest updates
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                     <?php
                     while($data=mysql_fetch_array($resR)){
                        // echo $data['services'];
                        /**get user details and serice details */
                        $idUSer=$data['ref_id'];
                        $sql="select * from user where id='$idUSer'";
                        $res=mysql_query($sql);
                        $dataUser=mysql_fetch_assoc($res);
                        $email=$dataUser['user_email'];
                      
                        $idService=$data['services'];
                        $sql="select * from services";
                        $res=mysql_query($sql);
                        $dataS=mysql_fetch_array($res);
                        echo "<li class='list-group-item'>".$dataS['services']." ". $email." ". $data['appointment']." ". $data['request_time']." " .$data['req_time']."</li>";
                     } 
                     ?>
                     </ul>
                    </div>
                </div>
            </div>
    </section>
    </div>

<?php
include_once "admin/includes/footer.php"; 
?>