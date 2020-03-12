<?php
require '../config/database.php';
$img_id = $_POST['img_id'];
// $stmt = $conn->prepare($sql);
// $stmt->execute();

           try {
               //Define the query
                $query = "DELETE FROM images WHERE ImageID=$img_id LIMIT 1";

                //sends the query to delete the entry
                $stmt = $db_connect->prepare($query);
                $stmt->execute();
                header("Location: ../update_info.php");
                exit();

                //if it failed
                
            } catch(PDOexception $e){
            die("Connection failed: " . $e->getMessage());
            }
                ?>