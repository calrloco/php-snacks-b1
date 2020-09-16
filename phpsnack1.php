<?php
$partite = array(
    [
        'squadraCasa' => 'Milano Cantu',
        'squadraOspite' => 'Real Madrid',
        'risultato' => '30-45'
    ],
    [
        'squadraCasa' => 'Los Angeles Lakers',
        'squadraOspite' => 'Boston Celtics',
        'risultato' => '50-66'
    ],
    [
        'squadraCasa' => 'Los Angeles Clippers',
        'squadraOspite' => 'Houston Rockets',
        'risultato' => '10-55'
    ],
    [
        'squadraCasa' => 'Denver',
        'squadraOspite' => 'Miami Heats',
        'risultato' => '100-80'
    ],
    [
        'squadraCasa' => 'Milwakee Bucks',
        'squadraOspite' => 'San Ant Spurs',
        'risultato' => '90-120'
    ],

);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Risultati Basket</title>
    <style>
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Partita</th>
                            <th scope="col">Squdra Casa</th>
                            <th scope="col">Squadra Ospite</th>
                            <th scope="col">Risultato</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php for($i=0; $i<count($partite);$i++){?>
                        <tr>
                            <th scope="row"><?php echo $i+1 ?></th>
                            <td><?php echo $partite[$i]['squadraCasa']?></td>
                            <td><?php echo $partite[$i]['squadraOspite']?></td>
                            <td><?php echo $partite[$i]['risultato']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </div>
        </div>
    </div>
</body>

</html>