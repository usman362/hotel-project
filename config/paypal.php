<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

 return [
    'client_id' => 'AdkzinXCs0dRIHswUn-zJAH-9d2cI6ksuq5o4OmiEL9Ly_04oZ_3GQsHA9F21h0A9J2YMYMidOcFq9xg',
	'secret' => 'EBRxLAPpaEzoT8LExcq5Q7RQmfNmntru4dTN3Ig__d311BacExvH4zyveVL54weWvBZtYKi5I2eMB1PR',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];
