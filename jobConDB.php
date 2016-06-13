 <?php
         if(isset($_POST['submit'])){
             $nic=$_POST['nic'];
             $cn=$_POST['name'];
             $vno=$_POST['vno'];
             $telno=$_POST['tele'];
             $adrs=$_POST['adrs'];
             $email=$_POST['email'];
             
             $enNo=$_POST['eno'];
             $chNo=$_POST['cno'];
             $fuelType=$_POST['fuelType'];
             $transType=$_POST['transType'];
             
             $jobDesc=$_POST['jobDesc'];
             $jobTyp=$_POST['jobType'];
             $jobSec=$_POST['section'];
             $secCode=$_POST['secCode'];
             $jobNo=$_POST['jobNo'];
             $jobDate=$_POST['date'];
             
             
             if($nic==""){
                 echo "please enter NIC";
             }
             else if($cn==""){
                 echo "Please Enter Customer Name";
             }
             else if($vno==""){
                 echo "Please enter the vehicle
                 No";
             }
             else if($telno==""){
                 echo "Plese enter the telephone
                 number";
                 
             }
             
             else if($adrs==""){
                 echo "Plese Enter the Address of
                 the Customer";
             }
             else if($email==""){
                 echo "Plese Enter the Email of the
                 customer";  
             }
             else if($enNo==""){
                 echo "Please Enter the Engine
                 Number";
             }
             else if($chNo==""){
                 echo "Plese Enter the Chassie
                 Number";  
             }else if($fuelType==""){
                 echo "Plese Select the fuel Type";  
             }
             else if($transType==""){
                 echo "Plese Select the
                 Transmission Type";  
             }
             
              else if($jobTyp==""){
                 echo "Plese Select the Job Type";  
             }
              else if($jobSec==""){
                 echo "Plese Enter the job
                 Section";  
             }
             
              else if($secCode==""){
                 echo "Please Enter the section
                 code";  
             }
             else if($jobNo==""){
                 echo "Please Enter the Job
                 Number";  
             }
             else if($secCode==""){
                 echo "Please Enter the Date";  
             } 
             
              
            else {
                 
                 $conn=mysql_connect('localhost','root','');
             if(!$conn){
                 die("could not connect".mysql_error());
             }else{
                 $db=mysql_select_db("cgtti",$conn);
             }
             
             
             $sql="INSERT INTO customer (NIC ,name,V_no,contact_no,address,email)
                   VALUES('$nic','$cn','$vno','$telno','$adrs','$email')";
                
             $sqlforVehicle="INSERT INTO vehicle (v_no,c_NIC,job_no,eng_no,che_no,fuel_typ,tra_typ) 
                             VALUES('$vno','$nic','$jobNo','$enNo','$chNo','$fuelType','$transType')";
                
             $sqlforJob="INSERT INTO jobservce (job_no,v_no,job_typ,details,sec_code,date)
                          VALUES('$jobNo','$vno','$jobTyp','$jobDesc','$secCode','$jobDate')";
                 
              
             $rsst=mysql_query($sql);
             $insertVeh=mysql_query($sqlforVehicle);
             $insertJob=mysql_query($sqlforJob);
             if($rsst && $insertVeh && $insertJob){
             echo "Customemr data Store
             succcessfully";
             echo "Vehicle data Store
             succcessfully";
             echo "Vehicle data Store
             succcessfully"; 
            ?> 
            <script type="text/javascript">  window.location="insertionSuccess.php";
                   </script> 
             <?php   

             }
             else if(!$rsst && $insertVeh && $insertJob){
                 echo "Some Error of insertion of
                 the customer data";
             }
             else if(!$insertVeh){
                 echo "Some Error of insertion of
                 the vehicle details";
             }
             else if(!$insertJob){
                 echo "Some Error of the insertion
                 of the Job Details";
             }
             else{
                  echo "Could not connect";
              }   
            
             }}
             
?>