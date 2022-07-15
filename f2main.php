<?php
                            include '_dbconnect.php';
                                if(isset($_SESSION['id']))
                                {
                                    
                                    $uid=$_SESSION['id'];

                                    $query="SELECT COUNT(`id`) as cnt FROM `profilephoto` WHERE `id`=$uid;";
                                    $exe = mysqli_query($conn,$query);
                                    $output = mysqli_fetch_array($exe);
                                    if($output['cnt']==1){
                                        $sql="SELECT `photo` FROM `profilephoto` where `id`=$uid";
                                        $img = mysqli_query($conn,$sql );
                                    
                                        $element = mysqli_fetch_array($img);
                                        $photo = $element['photo'];
                                        echo "<img src='upload/".$photo."' onClick=window.open('/samvad/useracc.php')>"; 
                                    }
                                    else{
                                        echo "<img src='/samvad/profile-img.png'>"; 
                                    }
                                }
                            ?>

<?php
                                include '_dbconnect.php';
                                $uid=$_SESSION['id'];
                                $sql="select `name` from signup where `id`=$uid";
                                $name=mysqli_query($conn,$sql);
                                $element=mysqli_fetch_array($name);
                                $x=$element['name'];
                                echo "<label>$x</label>";
                            ?>

<?php
                        include '_dbconnect.php';
                        $query = "SELECT * FROM `question`;";
                        if($result=mysqli_query($conn,$query)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo"<div class='question-container>'$row[2]</div>";
                                }
                            }
                        }
                    ?>