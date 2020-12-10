<?php
if(isset($_GET['btnsubmit'])){
    //print_r($_GET);
    $name=$_GET['name'];
    $email=$_GET['email'];
    $passw=$_GET['password'];

    echo "$name => $email => $passw";
}

?>
<!doctype html>
<html lang="en">

<head>
    <?php include "10template/meta.php" ?>
    <title>Simple Form</title>
</head>

<body>
    <?php
    include "10template/nav.php";
    ?>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4 col-md-12"></div>
            <div class="col-lg-4 col-md-12 bg-light p-3">
                <form action="" method="get">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                        <input type="checkbox">
                        <label for="">show password</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary text-light" value="Register" name="btnsubmit">
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12"></div>
        </div>
    </div>

    <?php require "10template/footer.php" ?>
</body>
<?php require "10template/script.php" ?>

<script>
    function showPassword(){
        obj=document.getElementById('password')
        if(obj.type=="password"){
            obj.type="text"
        }
        else{
            obj.type="password"
        }
    }
</script>
</html>