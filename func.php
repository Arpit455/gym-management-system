<?php
$con=mysqli_connect("localhost","root","","gym2");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    } 
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name',$phone)";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
if(isset($_POST['ura_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name1=$_POST['Name'];
        $phone1=$_POST['phone'];
        $query1="update Trainer set Name='$Name1' where Trainer_id=$Trainer_id";
	$query2="update Trainer set phone=$phone1 where Trainer_id=$Trainer_id";
         $result1=mysqli_query($con,$query1);
	 $result2=mysqli_query($con,$query2);
	if($result2)
        {
          echo "<script>alert('Trainer updated.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
	if(isset($_POST['tra1_submit']))
    {
        $customer_id=$_POST['customer_id'];
        $Name=$_POST['Name'];
        $fee=$_POST['customer_fee'];
        $query="insert into customer(customer_id,Name,customer_fee)values('$customer_id','$Name','$fee')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('customer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
		if(isset($_POST['ura1_submit']))
    {
        $customer_id=$_POST['customer_id'];
        $Name=$_POST['Name'];
        $fee=$_POST['customer_fee'];
        $query1="update customer set Name='$Name' where customer_id=$customer_id";
	$query2="update customer set customer_fee=$fee where customer_id=$customer_id";
         $result1=mysqli_query($con,$query1);
	 $result2=mysqli_query($con,$query2);
	if($result2)
        {
          echo "<script>alert('customer table updated.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
	if(isset($_POST['tra2_submit']))
    {
        $manager_id=$_POST['manager_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into manager(manager_id,Name,phone)values('$manager_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('manager added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        }
if(isset($_POST['ura2_submit']))
    {
        $manager_id=$_POST['manager_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query1="update manager set Name='$Name' where manager_id=$manager_id";
	$query2="update manager set phone='$phone' where manager_id=$manager_id";
         $result1=mysqli_query($con,$query1);
	 $result2=mysqli_query($con,$query2);
	if($result2)
        {
          echo "<script>alert('manager updated.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
	    if(isset($_POST['tra3_submit']))
    {
        $package_id=$_POST['package_id'];
        $Name=$_POST['package_name'];
        $phone=$_POST['no_of_equipment'];
        $query="insert into package(package_id,package_name,no_of_equipment)values('$package_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('equipment added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        }
	    if(isset($_POST['ura3_submit']))
    {
        $package_id=$_POST['package_id'];
        $Name=$_POST['package_name'];
        $phone=$_POST['no_of_equipment'];
        $query1="update package set package_name='$Name' where package_id=$package_id";
	 $query2="update package set no_of_equipment='$phone' where package_id=$package_id";
         $result1=mysqli_query($con,$query1);
	 $result2=mysqli_query($con,$query2);
	if($result2)
        {
          echo "<script>alert('equipment updated.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
} 
        if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
	    $payment_type=$_POST['payment_type'];
            $query="insert into Payment(Payment_id,Amount,customer_id,payment_type)values($Payment_id,$Amount,'$customer_id','$payment_type')";
	    $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            } 
if(isset($_POST['dra3_submit']))
    {
        $package_id=$_POST['package_id'];
        $query="delete from package where package_id=$package_id";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('equipment deleted.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        }

if(isset($_POST['dra2_submit']))
    {
        $manager_id=$_POST['manager_id'];
        $query="delete from manager where manager_id=$manager_id";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('manager deleted.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        }
if(isset($_POST['dra1_submit']))
    {
        $customer_id=$_POST['customer_id'];
         $query="delete from customer where customer_id=$customer_id";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('customer deleted.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
	if(isset($_POST['dra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $query="delete from Trainer where Trainer_id=$Trainer_id";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer deleted.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
       
 function get_patient_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $docapp=$row['docapp'];
      echo "<tr>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$docapp</td>
        </tr>";
    }
}
function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
	$eq = $row['no_of_equipment'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
        <td>$eq</td>
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_equipment(){
    global $con;
    $query="select * from ";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_manager(){
    global $con;
    $query="select * from manager";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $manager_id=$row ['manager_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$manager_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_customer(){
    global $con;
    $query="select * from customer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $customer_id=$row['customer_id'];
        $Name=$row['Name'];
        $customer_fee=$row['customer_fee'];
        echo"<tr>
        <td>$customer_id</td>
        <td>$Name</td>
            <td>$customer_fee</td>
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
            </tr>";

    }
}


?>



