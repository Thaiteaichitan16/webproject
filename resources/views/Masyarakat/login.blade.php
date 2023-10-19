<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <style>
        * {
            font-family: 'poppins', sans serif;
        }

        body {
            background: linear-gradient(120deg, #ffcfdf, #a5dee5);
            background-size: cover;
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }

        .bok1 {
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 0 15px 0 15px;
        }

        span {
            color: #a5dee5;
            font-size: small;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        header {
            color: black;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        .input {
            
            height: 45px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 10px;
            color: black;
            margin-top: 7px;
            padding: 0 0 0 50px;
            background: rgba(255, 255, 255, 0.189);
        }

        ::-webkit-input-placeholder {
            color: black;
        }

        .sumbit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100px;
            background: (255, 255, 255, 0, 7);
            cursor: pointer;
            transition: .3s;
        }

        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }

        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: small;
            color: #a5dee5;
            margin-top: 10px;
        }

        .left {
            display: flex;
            padding: 2px;
        }

        label a {
            color: black;
            text-decoration: none;
        }
    </style>
       {{-- tampilan navbar --}}
       <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SIAP LAPOR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/registrasi">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              
                
            </ul>
          </div>
        </div>
      </nav>
      </head>
              </tbody>
          </table>

    <div class="box">
        <div class="box1">
            <div class="top-header">
                <form action="" method="post">
                    @csrf
                    <header>Login</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="Username" name="username" required>

                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" required>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
                <div class="buttom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check">Remember me</label>
                    </div>
                    <div class="left">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    </body>

</html>
