<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/style.css'); ?>"> -->
    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<style>
      
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: poppins,sans-serif;

}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #081b29;
     

}
.wrapper{
    position: relative;
    width: 750px; 
    height: 450px;
    background: transparent;
    border: 2px solid #0ef;
    box-shadow: 0 0 25px #0ef;
    overflow: hidden;


}
.wrapper .form-box {
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
  
    display: flex;
    flex-direction: column;
    justify-content: center;

}

.wrapper .form-box.login{
    left: 0;
    padding: 0 60px 0 40px;
}

.form-box h2{
    font-size: 32px;
    color: #fff;
    text-align: center;
}

.form-box .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    
    margin: 25px 0;

}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #fff;
    transition: .5s;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    padding-right: 23px;

}

.input-box input:focus
.input-box input:valid {
    border-bottom-color: #0ef;


}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;  
}

.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
    color: #0ef;

}


.input-box i {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    color: #fff;
    transition: .5s;
    
}

.input-box input:focus~i,
.input-box input:valid~i{
    color: #0ef;
}

.btn {
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid #0ef;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;

} 

.btn::before {
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background:linear-gradient(#081b29,#0ef,#081b29,#0ef);
    z-index: -1;
    transition:.5s;
}

.btn:hover::before{
    top: 0 ;
}

.form-box .logreg-link {
  font-size: 14.5px;
  color: #fff;
  text-align: center; 
  margin: 20px 0 10px;  

}
 
.logreg-link p a {
    color:#0ef ;
    text-decoration: none;
    font-weight: 600;
}

.logreg-link p a:hover{
    text-decoration: underline;
}

.wrapper .info-text{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    
    display: flex;
    flex-direction: column;
    justify-content: center;

}

.wrapper .info-text.login {
    right: 0;
    text-align: right;
    padding: 0 40px 60px 150px;
}

.info-text h2{
    font-size: 36;
    color: #fff;
    line-height: 1.3;
    text-transform: uppercase;

}

.info-text p {
    font-size: 16;
    color: #fff;
}

.wrapper .bg-animate { 
    position: absolute;
    top:-4px;
    right: 0;
    width: 850px;
    height: 600px;
    border-bottom: 3px solid #0ef;
    background: linear-gradient(45deg,#081b29,#0ef);
    transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
} 
.btn a {
    text-decoration: none;
    color: #fff;
}

</style>
<body>
    <div class="wrapper">
<span class="bg-animate"></span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="" method="">
                <div class="input-box">
                    <input type="text" name="usernamw" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Pasword</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn"> <a  href="<?= base_url('/dashboard')?>">Login</a></button>
                <div class="logreg-link">
                    <p>Don't have an account? <a href="" class="register-link">Sign up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
             <h2>welcome Back!</h2>
             <p>Haque Residence</p>
        </div>
</body>
</html>