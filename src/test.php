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

 $server_url = 'https://alim-pprd.agriculture.gouv.fr/ift-api';

 $res = $client->get($server_url.'/api/hello');
 echo '<p>'.json_decode($res->getBody())->message.'</p>'

 ?>



 <p><strong>GET /api/campagnes :</strong></p>
 <?php

 $res = $client->get($server_url.'/api/campagnes');
 echo '<p>'.$res->getBody().'</p>'

 ?>



 <p><strong>GET /api/campagnes/2017 :</strong></p>
 <?php

 $res = $client->get($server_url.'/api/campagnes/2017');
 echo '<p>'.$res->getBody().'</p>'

 ?>



 <p><strong>GET /api/produits-doses-reference?campagneIdMetier={campagneIdMetier}&cultureIdMetier={cultureIdMetier}&produitLibelle={produitLibelle} :</strong></p>
 <?php

 $res = $client->get($server_url.'/api/produits-doses-reference?'
    .'campagneIdMetier=2018'
    .'&cultureIdMetier=1161'
    .'&produitLibelle=BOUILLIE%20CAZORLA%2020%20PM'
    .'&type=culture'
 );
 echo '<p>'.$res->getBody().'</p>'

 ?>



 <p><strong>GET /api/ift/traitement?campagneIdMetier={campagneIdMetier}&numeroAmmIdMetier={numeroAmmIdMetier}&cultureIdMetier={cultureIdMetier}&cibleIdMetier={cibleIdMetier}&typeTraitementIdMetier={typeTraitementIdMetier}&uniteIdMetier={uniteIdMetier}&dose={dose}&facteurDeCorrection={facteurDeCorrection} :</strong></p>
 <?php

 $res = $client->get($server_url.'/api/ift/traitement?'
    .'campagneIdMetier=2018'
    .'&numeroAmmIdMetier=9900206'
    .'&cultureIdMetier=1161'
    .'&cibleIdMetier=82'
    .'&typeTraitementIdMetier=T22'
    .'&uniteIdMetier=U3'
    .'&dose=0.5'
    .'&facteurDeCorrection=60'
);
 echo '<p>'.$res->getBody().'</p>'

 ?>
 </body>
</html>
