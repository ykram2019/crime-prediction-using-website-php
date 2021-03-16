
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"> 
   <link rel="stylesheet" href= "https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	

    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
          
        }

        #search_wrapper{
            width: 100%;
        }

        table.dataTable > tbody > tr.child span.dtr-title{
            display: none;
        }
    </style>
 
 <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript" class="init">


        $(document).ready(function() {
            // Setup - add a text input to each footer cell
           // $('#search thead th').each( function () {
             //   var title = $(this).text();
               // $(this).html( ''+title+' <br><input type="text" class="filter" placeholder="Search '+title+'" />' );
            //} );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });

      
        } );


    </script>
	<?php
	include('headernfooter.php');
require "db_connect.php";
?>
</head>
<body style="padding:40px">

<div class="container py-5">
 
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">

            <table id="search" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                <tr>

                    <th><strong>Victim Name</strong></td>
                    <th><strong>Gender</strong></td>
                    <th><strong>Location of Crime</strong></td>
					<th><strong>Type of Crime</strong></td>
					<th><strong>Period of Crime</strong></td>
					<th><strong>Time of Crime</strong></td>
					<th><strong>No of Individuals involved</strong></td>
					<th><strong>Evidence</strong></td>
					
					
					
                </tr>
                </thead>
                <tbody>
                <?php

              $sql="SELECT * FROM records";

                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["locationofcrime"]; ?></td>
                            <td><?php echo $row["typeofcrime"]; ?></td>
                            <td><?php echo $row["periodofcrime"]; ?></td>
							<td><?php echo $row["timeofcrime"]; ?></td>
							<td><?php echo $row["criminalsno"]; ?></td>
							<td><form action='evidence.php' method='POST'> <input type='hidden' name='id' value=<?php echo($row['id'])?>><input type='submit' name='submit-btn' value='Add Evidence' /></form></td>
							
							
                        </tr>
                    <?php }
                } else {
                ?>
                <tr><td colspan="5">No results found.</td>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                    <th><strong>Victim Name</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Location of Crime</strong></th>
					<th><strong>Type of Crime</strong></th>
					<th><strong>Period of Crime</strong></th>
					<th><strong>Time of Crime</strong></th>
					<th><strong>No of Individuals involved</strong></th>
					<th><strong>Evidence</strong></th>
					
                </tr>
                </tfoot>
            </table>
			
			      </div>
        </div>
      </div>
    </div>
  </div>
</div>
			<?php
include('footer.php');
?>
	
</body>
</html>