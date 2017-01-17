<?php
echo "hello";
$request='<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="urn:Magento" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Body><ns1:salesOrderAddComment><sessionId xsi:type="xsd:string">770004236f7f42772d8da3ba58f8d6b4</sessionId><orderIncrementId xsi:type="xsd:string"></orderIncrementId><status xsi:type="xsd:string">complete</status><comment xsi:nil="true"/><notify xsi:nil="true"/></ns1:salesOrderAddComment></SOAP-ENV:Body></SOAP-ENV:Envelope>';

if(strpos($request,"262076466147-1863460114016") !== false ||
strpos($request,"252080394292-1893737376015") !== false ||
strpos($request,"252080290631-1893668335015") !== false ||
strpos($request,"262163166416-1861904224016") !== false ||
strpos($request,"252068741980-1893262610015") !== false ||
strpos($request,"252079959953-1887114116015") !== false ||
strpos($request,"262035544355-1853606143016") !== false )
{
echo "buggy order-id found ";
$dbglog = "<pre>".print_r($request,true)."</pre>";
error_log($dbglog,3,'/var/www/html/archana/p_16/offline/magento-1924/serverapilog1.log');
exit;
}
else{
    echo "handle function is running";
//$soap->handle($request);
}