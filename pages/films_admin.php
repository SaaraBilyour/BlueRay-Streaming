<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../client/public/js/monJS.js"></script>
    <script src="../../client/public/js/films_tv_admin_js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../client/public/css/monCSS.css">
    <link rel="stylesheet" href="../../client/public/css/films_tv_admin.css">
    <title>Blue-Ray Cinema</title>
</head>
<body>
    <!-- Menu de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-perso px-2 py-2 fixed-top">
        <div class="container-fluid ">
          <img src="../../img/icon/Blue.png" alt="Blue-Ray cinema" width="70" height="70">
          <a class="navbar-brand" href="../../accueil.html">Blue-Ray Cinéma </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../accueil.html">Home</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="#">Films</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Séries Télévisées</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Members</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <section class="bg-dark text-light p-5 text-center text-sm-start">
        <div class="container">
          <div class="d-sm-flex align-items-center justify-content-between">
            <div>
              <h1>
                <h1>Bienvenue Admin sur votre compte, pour revenir à la page d'accueil principale cliquez accueil.</h1><br><br></h1>
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="../../img/icon/logo.svg" alt="Blue-Ray cinema" width="700" height="700">
          </div>
        </div>
      </section>
      <div class="container-lg">
    <div class="table-responsive">
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
</div>     


<!-- Footer -->
<footer class="text-white  justify-content-center" style="background-color: rgba(0, 0, 0);"">
    <div class="container p-4">
      <section>
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-12 mb-md-0 justify-content-center">
            <h5 class="text-uppercase text-center text-warning">Contact</h5>
  
            <ul class="list-unstyled mb-0 ">
              <li><i class="bi bi-telephone text-warning px-3 "></i>957-655-4324</li>
              <li><i class="bi bi-envelope-open text-warning px-3"></i>blue-ray@cinema.ca</li>
              <li><i class="bi bi-map text-warning px-3"></i>2233 Rue St-Hubert</li>
              <li class="text-white px-5">Montréal, G2K 1B2</li>
            </ul>
          </div>
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-12 mb-md-0 text-center">
  
            <ul class="list-unstyled mb-0 justify-content-start">
              <li>
                <a href="#" class="text-warning btn  btn-floating m-1"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-warning btn  btn-floating m-1"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-warning btn  btn-floating m-1"><i class="bi bi-twitter"></i></a>
              </li>
              <li>  <div class="">
                Copyright &copy; 2021 Blue-Ray Cinema
              </div>   
              </li>
            </ul>
          </div>
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-12 mb-md-0 text-center">
            <ul class="list-unstyled mb-lg-5">
              <li>
                <a href="#" class="text-warning"><i class="bi bi-arrow-up-circle h1"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </footer>
  <!-- Footer -->
  
</body>
</html>
