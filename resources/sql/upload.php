<?php
    require_once('dbConfig.php');
    $conn = con();
    $stmt = $conn->prepare("INSERT INTO plugins (name,description,full_name,plugin_url,cost,category)
                                        VALUES (:plugin_name,:description,:full_name,:plugin_url,:cost,:category)");
     
     $stmt->bindParam(':plugin_name', $plugin_name);
     $stmt->bindParam(':description', $description);
     $stmt->bindParam(':plugin_url', $plugin_url);
     $stmt->bindParam(':full_name', $full_name);
    //  $stmt->bindParam(':features', $features);
    //  $stmt->bindParam(':update_Date', $update_Date);kiif
     $stmt->bindParam(':cost', $cost);
     $stmt->bindParam(':category', $category);

     $plugin_name= $_POST['plugin_name'];
     $description=$_POST['description'];
     $plugin_url =$_POST['plugin_url'];
     $full_name=$_POST['full_name'];
    //  $features=$_POST['features'];
    //  $update_Date=$_POST['update_Date'];
     $cost=$_POST['cost'];
     $category=$_POST['category'];

     $stmt->execute();
     
    //***********************************************************/ 
    
     $conn = con();
     $stmt = $conn->prepare("INSERT INTO features (name,title,description)
                                         VALUES (:plugin_name,:t1,:d1)");
     $stmt->bindParam(':t1', $t1);
     $stmt->bindParam(':d1', $d1);
     $stmt->bindParam(':plugin_name', $plugin_name);
     $t1 = $_POST['t1'];
     $d1=$_POST['d1'];
     $plugin_name= $_POST['plugin_name'];
     $stmt->execute();

     $conn = con();
     $stmt = $conn->prepare("INSERT INTO features (name,title,description)
                                         VALUES (:plugin_name,:t2,:d2)");
     $stmt->bindParam(':t2', $t2);
     $stmt->bindParam(':d2', $d2);
     $stmt->bindParam(':plugin_name', $plugin_name);
     $t2 = $_POST['t2'];
     $d2 = $_POST['d2'];
     $plugin_name= $_POST['plugin_name'];
     $stmt->execute();

     $conn = con();
     $stmt = $conn->prepare("INSERT INTO features (name,title,description)
                                         VALUES (:plugin_name,:t3,:d3)");
     $stmt->bindParam(':t3', $t3);
     $stmt->bindParam(':d3', $d3);
     $stmt->bindParam(':plugin_name', $plugin_name);
     $t3 = $_POST['t3'];
     $d3 = $_POST['d3'];
     $plugin_name= $_POST['plugin_name'];
     $stmt->execute();

     $conn = con();
     $stmt = $conn->prepare("INSERT INTO features (name,title,description)
                                         VALUES (:plugin_name,:t4,:d4)");
     $stmt->bindParam(':t4', $t4);
     $stmt->bindParam(':d4', $d4);
     $stmt->bindParam(':plugin_name', $plugin_name);
     $t4 = $_POST['t4'];
     $d4 = $_POST['d4'];
     $plugin_name= $_POST['plugin_name'];
     $stmt->execute();

     $conn = con();
     $stmt = $conn->prepare("INSERT INTO features (name,title,description)
                                         VALUES (:plugin_name,:t5,:d5)");
     $stmt->bindParam(':t5', $t5);
     $stmt->bindParam(':d5', $d5);
     $stmt->bindParam(':plugin_name', $plugin_name);
     $t5 = $_POST['t5'];
     $d5 = $_POST['d5'];
     $plugin_name= $_POST['plugin_name'];
     $stmt->execute();


     header("Location:../dashboard.blade.php");
