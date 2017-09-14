<pre>
<?php
$seed_service= new SoapClient("https://maullin.sii.cl/DTEWS/CrSeed.jws?WSDL", array('trace' => 1,'soap_version' => SOAP_1_1));
$seed = $seed_service->__soapCall('getSeed',array());
var_dump($seed);

$token_service= new SoapClient("https://maullin.sii.cl/DTEWS/GetTokenFromSeed.jws?WSDL", array('trace' => 1,'soap_version' => SOAP_1_1));
$token_parm[] = new SoapVar('Semilla', XSD_STRING);
$token_parm[] = new SoapVar('SignedInfo', XSD_STRING);
$token_parm[] = new SoapVar('SignatureValue', XSD_STRING);
$token_parm[] = new SoapVar('Exponent', XSD_STRING);
$token_parm[] = new SoapVar('X509Certificate', XSD_STRING);

$token = $token_service->__soapCall("getToken", $token_parm);
var_dump($token_parm);
//var_dump($token_service->__getFunctions());
/*
//Estado DTD
$estado_service= new SoapClient("https://maullin.sii.cl/DTEWS/QueryEstDte.jws?WSDL", array('trace' => 1,'soap_version' => SOAP_1_1));
$estado_parm[] = new SoapVar('Token', XSD_STRING, null, null, '$token' );
$estado = $estado_service->__soapCall('getEstDte',array($estado_parm));*/
?>
</pre>
