<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mactha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script src="js/main.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

</head>
<body>
    <header class = "header">
        <nav class= "navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <a class= "navbar-brand" href=""><img src="img/matchalogo.png" height="100" width="100"></a>
            <ul class= "navbar-nav ml-auto">
                <li class = "nav-item dropdown" ><a class= "nav-link" href="">Home</a></li>
                <li class = "nav-item" ><a class= "nav-link" href="">Matches</a></li>
                <li class = "nav-item" ><a class= "nav-link" href="">Contacts</a></li>
                <li class = "nav-item"><a class= "nav-link" href="">About</a></li>
            </ul>
            </div>
        </nav>
         <img src="img/macthaheader.png" height="50%" width="100%" />
         <div class="btnlog">
         <button type="button" class="btn btn-outline-light" data-toggle= "modal" data-target="#signin" style="color: rgba(233, 65, 38, 1); margin-left: 5px;">Sign In</button>
         <button type="button" class="btn btn-outline-light" data-toggle= "modal" data-target="#signun" style="background: rgba(233, 65, 38, 1); margin-left: 5px;">Sign Up</button>
        </div>
    </header>
   
    <div class="modal fade" id = "signin">
    <div class="modal-dialog modal-dialog-centered">
    <div class= "modal-content">
        <div class="modal-header">
                <h3 style = "color :rgba(233, 65, 38, 1);" > Sign In</h3>   
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                <input class="form-control" type="text" placeholder="email@domain.com or username" name= "email" required/>
                </div>
                <div class="form-group">
                <input  class="form-control" type="password" placeholder="********" name= "passwd" required/>
                 </div>
                 <div class="form-group">
                <input  class="form-control" type="Submit"  value = "Sign In" />
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id = "signun">
            <div class="modal-dialog modal-dialog-centered">
            <div class= "modal-content">
                <div class="modal-header">
                    <h3 style = "color :rgba(233, 65, 38, 1);" > Sign Up</h3>   
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="username" name= "username" required/>
                         </div>
                        <div class="form-group">
                        <input class="form-control" type="text" placeholder="email@domain.com or username" name= "email" required/>
                        </div>
                        <div class="form-group">
                        <input  class="form-control" type="password" placeholder="********" name= "passwd" required/>
                         </div>
                         <div class="form-group">
                        <input  class="form-control" type="Submit"  value = "Sign Up" />
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
