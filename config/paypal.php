<?php
return array(
    // set your paypal credential
    'client_id' => 'AcFzXB5417Av3fuDy9AKZeG6RETCJSln6gBLP3JJQ8z7qIty12Ba8Y8bHVuUBgt2EUOyaBMLROVSoggd',
    'secret' => 'EPUCjNMUeJbr3vWmLS-aM-b4FqbPXrl4Vi4sQfo_g-AD82Cw95OPQ1K0nTGPIZvNgppA4gRqXXl8MWKA',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);