<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include "./includes/config.php";
    ?>
    <div class="container">
        <div>Các ngành xét tuyển  </div>
        <select id="sel_fac">
            <option value="0">- Select -</option>
            <?php        // Fetch Department

            $sql = "SELECT * FROM faculty";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $fac_id = $row['id'];
                $fac_name = $row['faculty'];
                // Option
                echo "<option value='" . $fac_id . "' >" . $fac_name . "</option>";
            }
            ?>
        </select>
        <div class="clear"></div>
        <div>Major</div>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>id_major</th>
                    <th>combination</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody id="sel_maj">

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $("#sel_fac").change(function() {
                var fac_id = $(this).val();
                $.ajax({
                    url: 'getMajor.php',
                    type: 'post',
                    data: {
                        faculty: fac_id
                    },
                    dataType: 'json',
                    success: function(response) { 
                        $("#sel_maj").empty(); 
                        for (var i = 0; i < response.length; i++) {
                            var id = response[i]['id']; 
                            var name = response[i]['name']; 
                            var id_major = response[i]['id_major']; 
                            var combination = response[i]['combination']; 
                            var id_major = response[i]['total']; 
                            $("#sel_maj").append(
                                ` <tr>
                                    <td>${id}</td>
                                    <td>${name}</td>
                                    <td>${id_major}</td>
                                    <td>${combination}</td>
                                    <td>${total}</td>
                                </tr>`);
                        }
                    } 
                });
            });
        });
    </script>

    
   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <scrip src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></scrip>
    <scrip src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></scrip>
  </body>
</html>