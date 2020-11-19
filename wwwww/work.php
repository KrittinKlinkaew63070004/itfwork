<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-sm-3" >
                    <form action = "insert.php" method = "post" id="CommentForm" >
                        NAME:<br>
                        <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
                        COMMENT:<br>
                        <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
                        LINK:<br>
                        <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
                        <input type="submit" id="commentBtn">
                    </form> 

                
                </div>
                <div class="col-sm-3" >

                    <form action = "updatename.php" method = "post" id="DeleteForm" >
                        NAME CHANGE:<br>
                        <input type="text" name = "namechange" id="idName" placeholder="Enter Name Change"> <br>
                        ROW THAT YOU WANT TO CHANGE:<br>
                        <input type="text" name = "delnc" id="idnc" placeholder="Enter ROW"> <br>
                        <input type="submit" id="commentBtndel">
                    </form> 
                
                </div>
                <div class="col-sm-5">
                    <?php
                    $conn = mysqli_init();
                    mysqli_real_connect($conn, 'polarisdatabase.mysql.database.azure.com', 'kk_plr7@polarisdatabase', 'Neuatin2544', 'ITFLab', 3306);
                    if (mysqli_connect_errno($conn))
                    {
                        die('Failed to connect to MySQL: '.mysqli_connect_error());
                    }
                    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
                    ?>
                    <table class="table-info" width="700" border="2">
                        <tr>
                            <th width="100"> <div align="center">Name</div></th>
                            <th width="400"> <div align="center">Comment </div></th>
                            <th width="200"> <div align="center">Link </div></th>
                        </tr>
                    <?php
                    while($Result = mysqli_fetch_array($res))
                    {
                    ?>
                        <tr>
                            <td><?php echo $Result['name'];?></div></td>
                            <td><?php echo $Result['Commemt'];?></td>
                            <td><?php echo $Result['link'];?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </table>
                    <?php
                    mysqli_close($conn);
                    ?>
                    
                </div>
            </div> <!-- Close Row 2 -->
        </div>
    </div> <!-- Close container -->
</body>
</html>
