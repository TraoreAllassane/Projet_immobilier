<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mise à jours</title>
</head>
<body>
   <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>

        <div class="col-md-6">
            <h3 style="text-align: center" class="text-primary">Mise à jours d'un bien immoblié</h3>
            <div class="card mt-3">
                
                <div class="card-body " style="padding: 25px;">
                    <form method="POST" action="{{ route('admin.update', $bien->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Titre</label>
                                    <input type="text" class="form-control" name="titre"  aria-describedby="emailHelp" placeholder="Entrez le titre" value="{{ $bien->titre }}">
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"> {{ $bien->description}} </textarea>
                                  
                                </div>

                                
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Adresse</label>
                                        <input type="text" class="form-control" name="addresse" aria-describedby="emailHelp" placeholder="Entez l'adresse" value="{{ $bien->adresse }}">
                                      
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Nombre de Chambre</label>
                                        <input type="number"  name="chambre" class="form-control"  aria-describedby="emailHelp" value="{{ $bien->nb_chambre }}">
                                      </div>
                                </div>
                            
                        </div>

                       
                        
                        <div class="form-group">
                          <label >Superfice</label>
                          <input type="text" name="superficie" class="form-control"  aria-describedby="emailHelp" placeholder="Entez la superficie" value="{{ $bien->superficie }}">
                        </div>
                        <div class="form-group">
                          <label >Prix</label>
                          <input type="text" name="prix" class="form-control"  aria-describedby="emailHelp" placeholder="Entez le prix" value="{{ $bien->prix }}">
                        </div>
                       
                        <button type="submit" class="btn btn-primary mt-2  btn-block" style="width: 100%">Mise à jours</button>
                      </form>
                </div>
            </div>
        </div>

        <div class="col-md-3"> </div>
      </div>
   </div>
</body>
</html>