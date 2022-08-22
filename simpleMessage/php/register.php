<?php
session_start();
ob_start();

include("db.php");

if(isset($_POST['registerbtn'])){
    $name = FilterSecurity($_POST["name"]);
    $lastname = FilterSecurity($_POST["lastname"]);
    $email = FilterSecurity($_POST["email"]);
    $phone = FilterSecurity($_POST["phone"]);
    $password = FilterSecurity(md5($_POST["password"]));
    $cryptopassword = hash('sha256', $password);

    if($name == "" || $name== null){
       header('Refresh:1;../register.html'); 
    }else if($lastname == "" || $lastname== null){
        header('Refresh:1;../register.html'); 
    }else if($email == "" || $email== null){
        header('Refresh:1;../register.html'); 
    }else if($phone == "" || $phone== null){
        header('Refresh:1;../register.html'); 
    }else if($cryptopassword == "" || $cryptopassword== null){
        header('Refresh:1;../register.html'); 
    }else{

        if(true){
            $queryuser = $db->prepare("SELECT * FROM register WHERE email=:email and phone=:phone LIMIT 1");
            $queryuser->execute([
                'email' => $email,
                'phone' => $phone
            ]);
            $email_phone_true = $queryuser->rowCount();
            if($email_phone_true == true){
                echo "<script>alert('Username or Phone number registered. Please use a different username or phone number');</script>";
                header('Refresh:1;../register.html'); 
                die();
                
        }else{
                $insert = $db->prepare("INSERT INTO register SET name = ?, lastname=?, phone = ?, email=?,  upassword=?");

                if($insert == true){
                    $userİnsert = $insert->execute([
                        $name,
                        $lastname,
                        $phone,
                        $email,
                        $cryptopassword,
                    ]);
            
                    if($userİnsert==1){
                        echo "<script>alert('Tebrikler Kaydiniz Başarılı, Giriş Sayfasına Yönlendiriliyorsunuz');</script>";
                        header('Refresh:1;../login.html'); 
                    }
                }
            }
        }

    }
}

