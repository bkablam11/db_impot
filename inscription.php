  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/home_style.css" rel="stylesheet">
      <meta charset="utf-8">
      <script type="text/javascript" src="js/jquery.js"></script>
      <title>Home Page</title>
  </head>
  <body>
    <style>
          .box{
              background: rgb(255, 255, 255);
              padding: 2em;
              position: relative;
              width: 25%;
              box-shadow: 0 5px 25px 0 rgba(0,0,0, .25) ;
              border-radius: 10px;
              align-items: center;
              margin-left: 50px;
              height: 30%;
              color: black;
              
          }
          h1{
              text-align: height;
          }
      </style>

      <div class="nav-wrapper container-fluid d-flex align-items-center justify-content-center">
          <div>
              <span class="navbar-brand navbar-header" > Système de Gestion des préoccupations des agents du Trésor Public</span>
          </div>
      </div>
      <section class="header">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  <a class="navbar-brand text-uppercase" href="#"><img class="br-20 w-25 h-25" src="img/logo_TRESOR.png"/>TRESOR PUBLIC</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
               	<div class="collapse navbar-collapse"id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2">
                 		 <li class="nav-item dropdown"> 
                      		
                    	</li>
                 		    <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="Objet Demande" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-desktop"></i> Objet Demande
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li class="dropdown-item"><a href="Manuel.php">Liste des demandes</a></li>
                                  <li class="dropdown-item"><a href="fich_redirigé">Cas de redirection Demandes</a></li>
                              </ul>
  </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="Agent-Theme" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-desktop"></i> Agent 
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li class="dropdown-item"><a href="Agents_internes.html"></a></li>
                                  <li class="dropdown-item"><a href="#">Identifiants Agents</a></li>
                                  <li class="dropdown-item"><a href="#"></a></li>
                                  <li class="dropdown-item"><a href="#"></a></li>
                              </ul>
  </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="Service" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-desktop"></i> Service
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li class="dropdown-item"><a href="#">Nom Service</a></li>
                                  <li class="dropdown-item"><a href="#">Libellé Service</a></li>
                                  <li class="dropdown-item"><a href="#"></a></li>
                                  <li class="dropdown-item"><a href="#"></a></li>
                              </ul>
  </li>


                  </div>
              </div>
              <div class="w-75 position-relative" style="right:0;">
                         <div class="d-flex flex-row-reverse">

                                
                              

          </nav>
      </section>
      <section class="content">
         <div class="container p-1"> <!-- border border-2 border-dark rounded-3-->

             
           <form method="POST" action="demandetraitemant.php" >
           
           <div class="row mb-10">
                 <div class="col-md-12">
                     <div class="row mb-10">
                         <span class="text-uppercase fw-bold fs-8">Agent interne</span>
                     </div>
                    <div class="row">
                    	<div class="col-6">
                      	 <div class="mb-3">
                         <label for="in1" class="form-label">Nom</label>
                         <input class="form-control champs" data-bs-placement="right" data-bs-toggle="tooltip" id="nom" name="nom"
                                placeholder=""
                                title="Entrez votre nom svp!" type="text">
                     </div>
                      </div>
                      <div class="col-5">
                         <div class="mb-3">
                         <label for="in1" class="form-label">Matricule Agent</label>
                         <input class="form-control champs" data-bs-placement="right" data-bs-toggle="tooltip" id="matricule" name="matricule" placeholder="" title="Entrez votre matricule svp!" type="text">
                     </div>
                    </div>
                    
                      <div class="col-6">
                      	 <div class="mb-3">
                         <label for="in1" class="form-label">Prénoms</label>
                         <input type="text" class="form-control champs" id="prenom" name="prenom" placeholder="" data-bs-toggle="tooltip" data-bs-placement="right" title="Veuillez entrer votre prénom svp !">
                     </div>
                      </div>
                      
                    	<div class="col-6">
                      	 <div class="mb-3">
                         <h3><label for="in1" class="form-label">Commentaire</label></h3>
                         <textarea class="form-control" rows="10" name="comment" id="comment" placeholder="Entrer votre commentaire"></textarea>
                     </div>
                      </div>
                      <div class="col-6">
                         <div class="mb-3">
                         <label for="in1" class="form-label">Objet Demande</label>
                         <input class="form-control champs" data-bs-placement="right" data-bs-toggle="tooltip" id="Objetdemande" name="Objetdemande"
                                placeholder=""
                                title="Entrez votre demande svp!" type="text">

                     </div>
                   </div>

                      <div class="col-4">
                      <div class="mb-3">	 
                         <label for="in1" class="form-label champs">Date de dépot de la demande</label>
                         
                         <input type="date" class="form-control" name="datedepot" id="datedepot"
                                                 value=""/>
                                         
                         </div>
                       
                     		
                   
                     </div>
                      </div>
                      <br>
                    </div>
                  
                      
           <div class="row">
                    	<div class="col-2">
                        <div class="mb-2"> 
                         <label for="serv" class="form-label">Service Agent</label>
                         <div class="w-100 position-relative">
                             <select id="service" name="service" class="form-control">
                                 <option value="0" selected>--service--</option>
                                 <option value="1">DSI</option>
                                 <option value="2">DRH</option>
                                 <option value="3">DMG</option>
                                 <option value="4">SNDI</option>
                                 <option value="5">DCP</option>
                                 <option value="6">ACCT</option>
                                 <option value="7">RGF</option>
                                 <option value="8">PGAE</option>
                                 <option value="9">ACCD</option>
                                 <option value="10">PGPS</option>
                             </select>
                             <span class="w-auto caret position-absolute" style="right:2%; top:15%;">
                                 <i class="fa fa-caret-down"></i>
                             </span>
                         </div>
                        </div>
                        
                    
                     </div>
                          
                          
                 
                      </div>            
                          
                    
                    
                      </div>
                    </div>
                        
                        
                        
                      </div>
                      
                      </div>
                    </div>
                    
                    
                    
              <div class="w-75 position-relative" style="right:0;">
                         <div class="d-flex flex-row-reverse">
                                 <p>
                                  <input type="submit" class="btn btn-success btn-md mx-2" id="enregistrer" value="Enregistrer" name="enregistrer">
                                  <a class="btn btn-success btn-md mx-2" id="btn1" href="display.php" role="button">consulter</a>
                                 <a class="btn btn-warning btn-md mx-2" id="btn2" onClick="test()" >Effacer</a>
                                
                               </p>
                         </div>
                     </div>
                 </div>
           </form>
                   
                    

                  

             </div>
             
      </section>
  	

      <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/home.js"></script>
      <script type="text/javascript" src="vendor/js/myjquery.js"></script>

      <script type="text/javascript" src="vendor/js/swal.js"></script>
  </body>
  </html>
