
<?php include('includes/header.php');?>

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
               <h4> customer Details</h4>
            </div>
            <div class="card-body">
                <table class="table" table-bordered table-striped>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>mobile</th>
                            <th>type</th>
                            <th>quantity</th>
                            <th>message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('function/myfunction.php');
                          $customer= getAll("customer");
                          if(mysqli_num_rows($customer)>0)
                          {
                            foreach($customer as $item)
                            {
                                ?>
                                    <tr>
                                        <td><?=$item['c_id']; ?></td>
                                        <td><?=$item['c_name']; ?></td>
                                        <td><?=$item['c_mob']; ?></td>
                                        <td><?=$item['b_type']; ?></td>
                                        <td><?=$item['b_quantity']; ?></td>
                                        <td><?=$item['c_message']; ?></td>





                                    </tr>

                                 <?php

                            }
                            
                                 
                                
                            
                          }
                          else
                          {
                                 echo "record not found";
                          }



                        ?>

                        
                    </tbody>

                </table>
            </div>

        </div>
    </div>
    
</div>
<?php include('includes/footer.php');?>
