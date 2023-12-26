<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
   
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'):
   
     $errors = array();
     
     $image = $_FILES['plugin_image'];
     $image_temp = $_FILES['plugin_image']['tmp_name'];
     $image_name = $_FILES['plugin_image']['name'];
     $image_size = $_FILES['plugin_image']['size'];
     $image_error = $_FILES['plugin_image']['error'];
     // echo  $image_name;

    $allowed_ext = array('jpg' , 'png' , 'jpeg' );

    $ext = explode('.' , $image_name);

    $file_ext =strtolower(end($ext)) ;
// echo '<img src=" ' . $_SERVER["DOCUMENT_ROOT"]  . '/laravel/plugin_store/resources/img/' .  $image_name .'">';
if($image_error ==4):

    $errors[] = '<div>no file uploaded</div>';
else:

        if($image_size > 100000):

            $errors[] = '<div> file canot be more than 100k this size file is :</div>' . $image_size ;

        endif;

    if(!in_array($file_ext , $allowed_ext)):
    
        $errors[] = '<div> file not image</div>';
    
    endif;
endif;
    if(empty($errors)):
        
        $plugin_name= $_POST['plugin_name'];
        echo  $plugin_name ."<br>";
        $full_name =$plugin_name . '.' .  $file_ext;
        move_uploaded_file($image_temp , $_SERVER['DOCUMENT_ROOT'] . '\laravel\plugin_store\resources\img\\' . $full_name);
        echo "file uploaded" ; 
        else:
        foreach ($errors as $error):
        $image_name = "";
            echo $error;
        endforeach;

    endif;

endif;

// echo realpath(dirname(getcwd())); 
// echo dirname(getcwd()); // the folder contain this folder
// echo getcwd(); // current working directory
// echo realpath(getcwd());
?>
<form method="post" enctype="multipart/form-data">
    <label for="plugin_image">image:</label><br><br>
    <img src="./img/<?php echo $full_name; ?>  " alt="" srcset="" style=""><br><br>
    <input type="file" id="plugin_image" name="plugin_image"><br><br>

    <label for="plugin_name">Plugin name:</label>
    <input type="text" id="plugin_name" name="plugin_name"><br><br>
    
    <input type="hidden" name="image_name" value='<?php echo $image_name ?>' >
    <input type="submit" value="Submit">
</form>  

<form action="./sql/upload.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>PLUGIN INFO :</legend>
            <input type="hidden" name="full_name" value='<?php echo $full_name ?>' >

            <label for="plugin_name">Plugin name:</label>
            <input type="text" id="plugin_name" name="plugin_name"><br><br>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description"><br><br>

            
            <label for="features">Features:</label><br><br>
            <label for="t1">title:</label>
            <input type="text" id="t1" name="t1">
            <label for="t1">description:</label>
            <input type="text" id="d1" name="d1"><br><br>
            
            <label for="t2">title:</label>
            <input type="text" id="t2" name="t2">
            <label for="t2">description:</label>
            <input type="text" id="d2" name="d2"><br><br>

            <label for="t3">title:</label>
            <input type="text" id="t3" name="t3">
            <label for="t3">description:</label>
            <input type="text" id="d3" name="d3"><br><br>

            <label for="t4">title:</label>
            <input type="text" id="t4" name="t4">
            <label for="t4">description:</label>
            <input type="text" id="d4" name="d4"><br><br>

            <label for="t5">title:</label>
            <input type="text" id="t5" name="t5">
            <label for="t5">description:</label>
            <input type="text" id="d5" name="d5"><br><br>

            <label for="update_Date">update Date:</label>
            <input type="date" id="update_Date" name="update_Date"><br><br>

            <label for="plugin_url">plugin url:</label>
            <input type="text" id="plugin_url" name="plugin_url"><br><br>

            <label for="cost">Cost:</label>
            <input type="text" id="cost" name="cost"><br><br>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category"><br><br>

            <input type="submit" value="Submit">
        </fieldset>
    </form>

</body>

</html>