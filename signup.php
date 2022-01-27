<?php 
    include_once 'includes/connection.php';
    include_once 'function.php';

    if(isset($_POST['submit'])){

        $name = test_input($_POST['name']); //Kiracy
        $email = test_input($_POST['email']); //comment2
        $uid = test_input($_POST['uid']);
        $pwd = $_POST['pwd'];

        $errors = array();

        if(empty($name)) {
            $errors['name'] = "Name is required";
        }
    
        if (empty($email)){
            $errors["email"] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "Invalid email format";
        }

        if(empty($errors)){
            $query = "INSERT INTO 'users' ('name', 'email', 'uid', 'pwd') VALUES ('$name', '$email', '$uid', '$pwd')";
            mysqli_query($conn, $query);
        }
    }


?>
<?php include_once "header.php"?>
    <section class="signup-form">

        <div class="signup-form-box">
            <h2>Reģistrēšanās</h2>
            <form action="" method="post">

                <?php if(!empty($errors)): ?>
                    <?php foreach($errors as $error): ?>
                        <p class="error">
                            <?= $error ?>
                        </p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </p>

                <div class="input-group">
                    <input type="text" name="name" placeholder="Vārds">
                </div>
                
                <div class="input-group">
                    <input type="text" name="email" placeholder="Epasts">
                </div>

                <div class="input-group">
                    <input type="text" name="uid" placeholder="Lietotājvārds">
                </div>

                <div class="input-group">
                    <input type="password" name="pwd" placeholder="Parole">
                </div>

                <div class="input-group">
                    <input type="password" name="pwdrepeat" placeholder="Parole atkārtoti">
                </div>

                <button type="submit" name="submit">Reģistrēties</button>
            </form>
        </div>
        
    </section>
   
    <?php include_once 'footer.php';?>