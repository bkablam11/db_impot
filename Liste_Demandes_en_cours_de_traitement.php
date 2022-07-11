<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Liste des demandes</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-uppercase" href="#"><img class="br-20 w-25 h-25" src="img/logo_TRESOR.png"/> Gestp</a>
            </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Home</a>
                    </li>
                </ul>
        </nav>
   <section id="containt" >
       <div class="container">

           <div class="w-100 text-center py-3 text-decoration-underline">
               <h2>Liste des demandes en cours de Traitement</h2>
           </div>
           <table class="table table-striped table-bordered">
               <thead>
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">N° Ticket</th>
                   <th scope="col">Date de Demande</th>
                   <th scope="col">Objet Demande</th>
                   <th scope="col">Résultat de la Demande</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <th scope="row">1</th>
                   <td>230</td>
                   <td>35</td>
                   <td>26/06/22</td>
                   <td><a href="Traitement_Demandes_en_cours.php">Traitement<span class="badge">42</span></a>

<button class="btn btn-primary" type="button">
  Messages <span class="badge"></span>
</button></td>
               </tr>
               <tr>
                   <th scope="row">2</th>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td><a href="Traitement_Demandes_en_cours.php">Traitement<span class="badge">42</span></a>

<button class="btn btn-primary" type="button">
  Messages <span class="badge"></span>
</button></td>
               </tr>
               <tr>
                   <th scope="row">3</th>
                   <td colspan="2">Larry the Bird</td>
                   <td>@twitter</td>
                   <td><a href="Traitement_Demandes_en_cours.php">Traitement<span class="badge">42</span></a>

<button class="btn btn-primary" type="button">
  Messages <span class="badge"></span>
</button></td>
               </tr>
               </tbody>
           </table>
       </div>

   </section>
   <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>