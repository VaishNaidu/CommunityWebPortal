<?php

$connection= mysqli_connect("localhost","root","","itp");
//$db= mysqli_select_db($connection,'itp');
if($connection)
{
    echo "connection ok";
}
else
{
    echo "connec failed";
}
if(isset($_POST['addevent']))
{
    $target= "images/".basename($_FILES['image']['name']);


    $Name= $_POST['EventName'];
    $Description= $_POST['EventDescription'];
    $StartDatTime= $_POST['StartDateTime'];
    $EndDatTime= $_POST['EndDateTime'];
    $Image= $_FILES['image']['name'];
    print_r($_FILES);
    $query= "INSERT INTO events(EventName,EventDescription,StartDateTime,EndDateTime,image) VALUES ('$Name','$Description','$StartDatTime','$EndDatTime','$Image')";
    echo "$query";
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
        $queryrun= mysqli_query($connection, $query);
        echo "image uploades";
    }
    else
    {
        echo "not uploades";
    }
    //echo "$query_run";
    if($queryrun)
    {
        //echo "data saved";
        header('Location: test.php');
    }
    else
    {
        echo "not saved";
    }
}
?>