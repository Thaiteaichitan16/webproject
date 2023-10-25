<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <style>
	*{
        font-family: 'poppins', sans serif;
        }
        body{
        background: linear-gradient(120deg,#ffcfdf,#a5dee5 );
        background-size:cover ;
        height: 100vh;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        }
        .box{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
        }
        
        
        header{
        color: black;
        font-size: 30px;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        }
        .input-field{
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        margin: auto;
        }
        
        
        .sumbit{
        
        border: none;
        border-radius: 30px;
        font-size: 15px;
        height: 45px;
        outline: none;
        width: 100px;
        background: (255, 255, 255,0,7);
        cursor: pointer;
        transition: .3s;
        }
        .submit:hover{
        box-shadow: 1px 5px 7px 1px rgba(0,0,0,0.2) ;
        }
        
        </style>
        <div class="box">
        <div class="box1">
        <div class="top-header">
        <form action="" method="post">
        <header>Logout|Masyarakat</header>
        <header>Apakah Anda yakin akan Logout dari aku ini?</header>
        </div>
        
        
        <div class="input-field">
        <a href=""><input type="submit" class="submit" value="Yes"></a>
        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="No">
            </div>
        </form>
        </div>
        </div>
        </div>
</body>
</html>