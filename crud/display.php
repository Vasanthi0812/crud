

<?php
include("connection.php");

$query="SELECT *FROM FORM";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);


if($total !=0)
{
    ?>
    <marquee><h1>Welcome to Management Information Systems</h1></marquee>
    <bold> REGISTERED APPLICANTS LIST </bold >
    <table border="3">
        <tr>
       <th> FIRST NAME</th> 
       <th>LAST NAME</th>
       <th> GENDER</th>
       <th>E-MAIL</th>
       <th>PHONE</th>
       <th>ADDRESS</th>       
   
    </tr>
    <?php
    
    while($result =mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['fname']."</td> 
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <th>".$result['email']."</th>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>       
    
     </tr>";
    
    }

}
else{
    echo "no records found";
}

?>
</table> 

