<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Administration</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              
                <table class="table">
                  <h3 class="text-primary">Liste des biens immobiliers</h3>
                    <thead class="table-light">
                      <tr>
                        <th>Nom</th> 
                        <th>addresse</th>  
                        <th>nb_chambre</th> 
                        <th>prix</th> 
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($biens as $bien)
                        <tr>
                          <td>{{ $bien->titre }}</td>
                          <td>{{ $bien->adresse }}</td>
                          <td>{{ $bien->nb_chambre }}</td>
                          <td>{{ $bien->prix }}</td>
                          <td width="350px">
                            <a href="{{route('admin.detail', $bien->id)}}" class="btn btn-warning"><i class="fa-solid fa-eye"></i> Details</a>
                            <a href="{{ route('admin.create', $bien->id) }}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Modifier</a>
                            <a href="{{ route('admin.delete', $bien->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>
                          </td>
                        </tr>
                      @empty
                          
                      @endforelse
                          
                    </tbody>
                  </table>
            </div>
            <div class="col-md-4">
                <h3 class="text-primary">Enregistrement des biens</h3>
                <form method="POST" action="{{ route('admin.nouveau') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group">
                      <label >Titre</label>
                      <input type="text" class="form-control" name="titre"  aria-describedby="emailHelp" placeholder="Entrez le titre">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label >Adresse</label>
                      <input type="text" class="form-control" name="addresse" aria-describedby="emailHelp" placeholder="Entez l'adresse">
                    </div>
                    <div class="form-group">
                      <label >Nombre de Chambre</label>
                      <input type="number"  name="chambre" class="form-control"  aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                      <label >Superfice</label>
                      <input type="text" name="superficie" class="form-control"  aria-describedby="emailHelp" placeholder="Entez la superficie">
                    </div>
                    <div class="form-group">
                      <label >Prix</label>
                      <input type="text" name="prix" class="form-control"  aria-describedby="emailHelp" placeholder="Entez le prix">
                    </div>
                    <div class="form-group">
                      <label >Image</label>
                      <input type="file" name="image" class="form-control"  aria-describedby="emailHelp" placeholder="Enter l'image">
                    </div>
                    <button type="submit" class="btn btn-success mt-2" >Enregistrer</button>
                  </form>
            </div>
        </div>
        
    </div>
</body>
</html>