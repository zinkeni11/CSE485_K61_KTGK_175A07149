<?php include('partials/menu.php'); ?>


        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage </h1>

                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //REmoving Session Message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }

                ?>
                <br><br><br>

                <!-- Button to Add Admin -->
                <a href="add-duan.php" class="btn-primary">Add</a>

                <br /><br /><br />
                <form action="" class=" d-flex justify-content-center col-md-3 " method="POST">
                <input type="text" class="search" name="search" placeholder="Search .." >

             </form>
                <table class="tbl-full">
                    
                <thead>
                    <tr>
                        <th>Mã Dự Án</th>
                        <th>Tên Dự Án</th>
                        <th>Năm Thực Hiện</th>
                        <th>Lĩnh Vực</th>
                        <th>Nhiệm Vụ</th>
                        <th>Cơ quan thực hiện</th>
                    </tr>
                </thead>

                 <tbody class="danhsach">
                    <?php 
                 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM db_duan";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $id=$row['maduan'];
                                    $hoten=$row['tenduan'];
                                    $chucvu=$row['namthuchien'];
                                    $sdt=$row['linhvuc'];
                                    $email=$row['nhiemvu'];
                                    $coquan=$row['coquanthuchien']

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $id; ?>. </td>
                                        <td><?php echo $hoten; ?></td>
                                        <td><?php echo $chucvu; ?></td>
                                        <td><?php echo $sdt; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $coquan; ?></td>
                                        
                                        <td>
                                            
                                            <a href="<?php echo SITEURL; ?>admin/update-duan.php?id=<?php echo $id; ?>" class="btn-secondary">Update </a>
                                            <a href="<?php echo SITEURL; ?>admin/detele-duan.php?id=<?php echo $id; ?>" class="btn-danger">Delete </a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }
                    ?>
                </tbody>    
                </table>

            </div>
        </div>
        <!-- Main Content Setion Ends -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.search').keyup(function(){
                  var txt =$('.search').val();
                  $.post('ajax2.php',{data:txt},function(data){
                    $('.danhsach').html(data);
                  
                    })

                })
            
            })
         </script>

<?php include('partials/footer.php'); ?>