<?php
include("connection.php");
//include ("session.php");
?>
<div aria-label="Basic example">
            <h2>Recuento de votos:</h2>
        </div>
        <br>
        <table class="table" id="tab">

            <?php 
            $sql= "SELECT * FROM `tbl_curso`";
            $query = mysqli_query($con,$sql);
            
            while($tabquery = mysqli_fetch_array($query)) {
                $año = $tabquery['ano_curso'];
                $division = $tabquery['division_curso'];
                ?>
                <tr>
                    <td><button onclick="votos();" type="button" class="btn btn-outline-primary btn-lg mr-md-3 mb-2 mb-md-0"><?php echo $año;?> - <?php echo $division;?></button></td>
                
                </tr>
                <?php
                };
            ?>
            <script>
        function votos() {
            $("#tabla2").load("votos.php");
        }
                </script>
        </table> 
        
        <div id="tabla2">
        </div>