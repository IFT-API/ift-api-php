<?php
require '../vendor/autoload.php';
$client = new \GuzzleHttp\Client(['verify' => false]); // verify = false added to avoid SSL problem
?>
<html>
 <head>
  <title>Test oh PHP</title>
 </head>
 <body>



 <p><strong>GET /api/hello :</strong></p>
 <?php

 $res = $client->get('https://ift-api.herokuapp.com/api/hello');
 echo '<p>'.json_decode($res->getBody())->message.'</p>'

 ?>



 <p><strong>GET /api/campagnes :</strong></p>
 <?php

 $res = $client->get('https://ift-api.herokuapp.com/api/campagnes');
 echo '<p>'.$res->getBody().'</p>'

 ?>



 <p><strong>GET /api/campagnes/2017 :</strong></p>
 <?php

 $res = $client->get('https://ift-api.herokuapp.com/api/campagnes/2017');
 echo '<p>'.$res->getBody().'</p>'

 ?>



 <p><strong>GET /api/produits-doses-reference?campagneId={campagneId}&cultureId={cultureId}&produitId={produitId} :</strong></p>
 <?php

 $res = $client->get('https://ift-api.herokuapp.com/api/produits-doses-reference?campagneId=e02b1e37-669b-497e-be4c-e8b9359cb587&cultureId=6f288e46-ead7-491d-9213-b498dcf82329&produitId=64fa2f66-9cd6-46af-8ff0-2882edcfd869');
 echo '<p>'.$res->getBody().'</p>'

 ?>



 <p><strong>GET /api/ift/traitement?campagneId={campagneId}&numeroAmmId={numeroAmmId}&cultureId={cultureId}&cibleId={cibleId}&traitementId={traitementId}&uniteId={uniteId}&dose={dose}&facteurDeCorrection={facteurDeCorrection} :</strong></p>
 <?php

 $res = $client->get('https://ift-api.herokuapp.com/api/ift/traitement?'
    .'campagneId=e02b1e37-669b-497e-be4c-e8b9359cb587'
    .'&numeroAmmId=d76038c9-c456-4487-91ea-3fa1a8853978'
    .'&cultureId=6f288e46-ead7-491d-9213-b498dcf82329'
    .'&cibleId=19cc0b09-7d11-4ddf-848d-4f6c94a4febd'
    .'&traitementId=f4dd98e2-0638-4912-86ed-8cc3a9e9d728'
    .'&uniteId=d57ca2cc-a3ba-4bff-bae7-0d0bde82a0e3'
    .'&dose=0.06'
    .'&facteurDeCorrection=100'
);
 echo '<p>'.$res->getBody().'</p>'

 ?>
 </body>
</html>
