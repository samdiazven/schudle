<?php
    
    $info= array('lunes','OX functional Training', 'Presencial', 'Animal Flow', 'Jesus Morales', '7:00', '7:45', 'success', 6);
    list ($dia, $centro, $modalidad, $materia, $entrenador,$hinicial, $hfinal, $color, $aforo ) = $info;  

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<h1 id="principal">Disponibilidad</h1>
<div class="wrapper">
<div class="container">
<br>
<button type="button" class="btn btn-success">Registrar Disponibilidad</button>
<br><br>
<h1 id="titulo">Horario</h1>
<div class="col-md-12">

 <div id="fila">
    <div id="fila__titulo">
    <h5>Modalidades: </h5>
    </div>

        <div id="modalidades">
            <span class="badge badge-primary">Animal Flow</span>
        </div>
        <div id="modalidades">
            <span class="badge badge-info">Yoga</span>
           
        </div>
        <div id="modalidades">
            <span class="badge badge-danger">Clubbels</span>
           
        </div>
        <div id="modalidades">
            <span class="badge badge-warning">Biomecanics</span>
           
        </div>
        <div id="modalidades">
            <span class="badge badge-success">OX Training</span>
           
        </div>
</div>
<table class="table">
   
  <thead>
      <th scope="col">Lunes</th>
      <th scope="col">Martes</th>
      <th scope="col">Miercoles</th>
      <th scope="col">Jueves</th>
      <th scope="col">Viernes</th>
      <th scope="col">Sabado</th>
    </tr>
  </thead>
 <tbody>

    <tr>
            <td>
            <button type="button" class="btn btn-<?= $color ?> btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </td>
        <th>
        <button type="button" class="btn btn-<?= $color ?> btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th> 
            <th>
            <button type="button" class="btn btn-<?= $color ?> btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th> 
            <th>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th>
            <th>
            <button type="button" class="btn btn-<?= $color ?> btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th> 
            <th>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th>     
    </tr>


     <tr>
            <td>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </td>
        <th>
            </th> 
            <th>
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th> 
            <th>
            </th>
            <th>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th> 
            <th>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop"><?=$hinicial?> - <?= $hfinal?></button>
            </th>     
    </tr>

    
</div>

 </tbody>
</table>
</div>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content align-items-center ">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Informacion de la Clase</h5>
       
      </div>
      <div class="modal-body ">
      <div class="card col-md-12" style="width: 18rem;" >
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$centro?></h5>
    <p class="card-text"><span class="font-weight-bold"><?=$materia?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="font-weight-bold">Modalidad:</span> <?=$modalidad?></li>
    <li class="list-group-item"><span class="font-weight-bold">Entrenador:</span> <?=$entrenador?></li>
    <li class="list-group-item"><span class="font-weight-bold">Aforo:</span> <?=$aforo?></li>
  </ul>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-<?= $color?>">Apartar Cupo</button>
      </div>
    </div>
  </div>
</div>

</div>

<style>
    body{
        background-color: #e6e9ed;
    }
    #principal{
        margin-top: 20px;
        margin-left:120px;
    }

    .wrapper{
        background-color: white;
        margin:30 120;
        min-height: 500px;
    }
    #titulo{
        margin-left: 10px;
    }    
    #fila{
        display: flex;
        margin-left: 10px;
        margin-bottom: 10px;
    }
    #fila__titulo{
        margin-top:10px;

    }
    #modalidades{
        margin-right: 10px;
        margin-left: 30px;
        padding: 1rem;
    }
    
</style>