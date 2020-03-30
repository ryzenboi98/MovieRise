<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" type="text/css" href="../../assets/css.css">

     <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">


    <!-- JS plugins -->
    <script src="../../assets/javascript.js"></script>
    <script src="../../assets/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    
    
</head>

<body>

    <nav class="navbar bg-transparent navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">Move<span class="logoTitle">It</span></a>
                    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disableddddd</a>
            </div>
            

            <ul class="nav navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="btn btn-primary btn-space dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $nome ?>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <form method="" action="../logincontroller">
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </ul>
        </div>

    </nav>        

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 vh-100" src="../../assets/Imagens/happy.jpg" alt="First slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 vh-100" src="../../assets/Imagens/velhocego.jpg" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 vh-100" src="../../assets/Imagens/thor.jpg" alt="Third slide">
            </div>

        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br/>
    <br/>
    <br/>

    <h3 style="text-align:center;">Movies</h3>

	<br/>
	<br/>

	<div class="card-deck">
        <div class="card">
  	        <div class="Films">
    	        <img class="card-img-top" src="../../assets/Imagens/jumper.png" alt="Card image cap">
            </div>
            
            <div class="card-body">
                <h4 class="card-title">Jumper</h4>
                <p class="card-text">If you think you have seen all you will change your idea after facing this boi.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card">
          
            <div class="Films">
                <img class="card-img-top" src="../../assets/Imagens/jason.jpg" alt="Card image cap">
            </div>
            
            <div class="card-body">
                <h4 class="card-title">The Mechanic</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
  
        <div class="card">
  	        <div class="Films">
                <img class="card-img-top" src="../../assets/Imagens/snowden.jpg" alt="Card image cap">
            </div>
            
            <div class="card-body">
                <h4 class="card-title">Snowden</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card">
  	        <div class="Films">
                <img class="card-img-top" src="../../assets/Imagens/snowden.jpg" alt="Card image cap">
            </div>
            
            <div class="card-body">
                <h4 class="card-title">gdf</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>  
    </div>	

    <!-- Modal Sign In -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">
                        <form action="logincontroller/registar" method="POST">

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        
                            <button type="submit" value="submit" name="submit" class="btn btn-primary">Sign In</button>
                          </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                
                    <div class="modal-body">
                            <form action="logincontroller/entrar" method="POST">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" name="username1" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                                </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" name="email1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>

                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control" name="password1" id="exampleInputPassword1" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <a href="url"  data-toggle="modal" data-target="#exampleModal2">Forget password?</a>
                                    </div>
                                
                                    <button type="submit" value="submit" name="submit1" class="btn btn-primary">Login</button>
                                  </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Fortget Password -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Password Revive</h5>
                    
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                
                    <div class="modal-body">
                            <form action="logincontroller/recuperar_pass" method="POST">
                                <div class="form-group">
                                        <label for="exampleInputEmail2">Username</label>
                                        <input type="text" class="form-control" name="username2" id="username2" aria-describedby="emailHelp" placeholder="Enter username">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword2">Email</label>
                                    <input type="text" name="email2" class="form-control" id="exampleInputPassword2" placeholder="Email">
                                  </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword2">New password</label>
                                  <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="New password">
                                </div>
    
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Confirm new password</label>
                                    <input type="password" class="form-control" name="password3" id="exampleInputPassword2" placeholder="Confirm new password">
                                  </div>
                            
                                <button type="submit" value="submit" name="submit2" class="btn btn-primary">Sign In</button>
                              </form>
                    </div>
    
                </div>
            </div>
        </div>


        <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Administration</td>
                                <td>(171) 555-2222</td>
                                <td>
                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Peter Parker</td>
                                <td>Customer Service</td>
                                <td>(313) 555-5735</td>
                                <td>
                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fran Wilson</td>
                                <td>Human Resources</td>
                                <td>(503) 555-9931</td>
                                <td>
                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>     
                        </tbody>
                    </table>
                </div>
            </div>     

</body>

</html>