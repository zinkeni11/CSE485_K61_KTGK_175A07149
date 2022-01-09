<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add </h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST" >
        
            <table class="tbl-30">

                <tr>
                    <td>Mã Dự Án </td>
                    <td>
                        <input type="text" name="maduan" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>Tên Dự Án</td>
                    <td>
                        <input type="text" name="tenduan" placeholder=""></input>
                    </td>
                </tr>

                <tr>
                    <td>Năm Thực Hiện: </td>
                    <td>
                        <input type="text" name="namthuchien">
                    </td>
                </tr>

                <tr>
                    <td>Lĩnh Vực: </td>
                    <td>
                        <input type="text" name="linhvuc">
                    </td>
                </tr>
                <tr>
                    <td>Nhiệm Vụ </td>
                    <td>
                        <input type="text" name="nhiemvu">
                    </td>
                </tr>
                <tr>
                    <td>Cơ quan thực hiện </td>
                    <td>
                        <input type="text" name="coquanthuchien">
                    </td>
                </tr>

                
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add " class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            //CHeck whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the Food in Database
                //echo "Clicked";
                
                //1. Get the DAta from Form
                $id = $_POST['maduan'];
                $chuc_vu = $_POST['tenduan'];
                $number_phone = $_POST['namthuchien'];
                $address_email = $_POST['linhvuc'];
                $ma_khoa_id = $_POST['nhiemvu'];
                $coquan = $_POST['coquanthuchien'];


                //Check whether radion button for featured and active are checked or not
                
                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO db.duan SET 
                    maduan = '$ho_ten',
                    tenduan = '$chuc_vu',
                    namthuchien = $number_phone,
                    linhvuc = '$address_email',
                    nhiemvu = '$ma_khoa_id'
                    coquanthuchien = '$coquan'
                    
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'> Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/duan.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add .</div>";
                    header('location:'.SITEURL.'admin/duan.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>