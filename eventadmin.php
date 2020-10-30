<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->

    </head>

<body>
<div class="row">
    <div class="col-md-6">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Event Name</th>
      <th scope="col">Event Description</th>
      <th scope="col">StartDateTime</th>
      <th scope="col">EnddateTime</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
                           $connection = mysqli_connect("localhost","root","","itp");
                            //$id= $_POST['EventID'];
                            $query= "SELECT * FROM events";
                            $query_out= mysqli_query($connection,$query);
                            while($row= mysqli_fetch_assoc($query_out))
                            {?>
                                
    
    <tr>
      <td><?php echo $row['EventName'];?></td>
      <td><?php echo $row['EventDescription'];?></td>
      <td><?php echo $row['StartDateTime'];?></td>
      <td><?php echo $row['EndDateTime'];?></td>
      <td><p>Edit: <button type="button" name="edit" onclick="editevent('<?php echo $row['EventID'];?>')" class="btn btn-default btn-sm" data-toggle="modal" data-target="#editmodal">
          <span class="glyphicon glyphicon-pencil"></span> Edit 
        </button><br>Delete <button type="button" name="delete" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span> Delete </a></p></td>
    </tr>
  
    

                            <?php } ?>

                            </tbody>
</table>


        
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Enter Event Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
                <form action="editevents.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Event Name</label>
                            <input type="text" id="Eventname" name="EventName" class="form-control" placeholder="Enter event name">

                        </div>
                        <div class="form-group">
                            <label>Event Description</label>
                            <input type="text" id="EventDescription" name="EventDescription" class="form-control" placeholder="Enter event description">
                        </div>
                        <div class="form-group">
                            <label>Event Start Date and Time</label>
                            <input type="datetime-local" id="StartDateTime" name="StartDateTime" class="form-control" data-toggle="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Event End Date and Time</label>
                            <input type="datetime-local" id="EndDateTime" name="EndDateTime" class="form-control" data-toggle="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Choose Event Image</label>
                            <input type="file" id="image" name="image" class="form-control-file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="addevent" class="btn btn-primary">Add event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script type="text/javascript">
    function editevent(eventid) {
        
        $.ajax({
            type: "POST",
            url: 'editevents.php',
            data: {"id":eventid},
            success: function(response)
            {
                console.log(response);
                var jsondata=JSON.parse(response);
                //console.log(eventid);
                $("#Eventname").val(jsondata.EventName);
                console.log(response[0].EventName);
                $("#EventDescription").val(jsondata.EventDescription);
                $("#StartDateTime").val(jsondata.StartDateTime);
                $("#EndDateTime").val(jsondata.EndDateTime);
                $("#image").val(jsondata.image);
           }
       });
     }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</html>
