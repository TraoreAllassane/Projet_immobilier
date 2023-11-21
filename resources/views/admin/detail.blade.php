<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Detail d'un bien</title>
</head>
<body>
    <div class="container">
        <h3 style="text-align: center" class="mb-3">Informations sur {{ $bien->titre }}</h3>
        <div class="row">
            <div class="col-md-8">
               <img src="{{ Storage::url($bien->image) }}" alt="" width="100%" height="75%">
            </div>
            <div class="col-md-4">
                <h6 class="text-primary">Description</h6>
                <hr>
                <p>{{ $bien->description }}</p>

                <h6 class="text-primary">Addresse</h6>
                <hr>
                <p>{{ $bien->adresse }}</p>

                <h6 class="text-primary">Nombre de chambre</h6>
                <hr>
                <p>{{ $bien->nb_chambre }} chambre(s)</p>

                <h6 class="text-primary">Superficie</h6>
                <hr>
                <p>{{ $bien->superficie }}</p>

                <h6 class="text-primary">prix</h6>
                <hr>
                <p>{{ $bien->prix }} fcfa</p>
                <a href="{{ route('admin.index') }}" style="text-align: center" class="btn  btn-primary btn-lg btn-block" >Retour à la page d'acceuil      </a>
            </div>
        </div>
        
    </div>
</body>
</html>