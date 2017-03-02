
This project holds how to configure and setup the Twilio Messaging(SMS) using Codeigniter



###Server Requirements

* PHP **version 5.4 or newer is recommended**.
    - It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.
* cURL - [Check the cURL Installig video](https://www.youtube.com/watch?v=qlTVMuONazs)
 

<hr>

###Follow the manual changes need to be done
 * Path - application/config/config.php
 
     ```
     # Set the Base URL
     $config['base_url'] = '';
     ```
     
 * Path - application/config/autoload.php
 
     ```
     # Load the URL helper
     $autoload['helper'] = array('url');
     ```
     
 * Path - application/controllers/Welcome.php
 
     ```
    # Change these fields <Lines indicates in Git>
 1. $sid  <-- Line 25 
2. $token <-- Line 26
3. 'from' => 'ADD Your Free/purchased Number', <-- Line 35
     ```


<hr>

###Resources 
* [Twilio SMS and MMS php quickstart](https://www.twilio.com/docs/quickstart/php/sms)

<hr>
###Common Error's and Fixes  

>**Error -->** Message: [HTTP 400] Unable to create record: Permission to send an SMS has not been enabled for the region indicated by the 'To' number: +94somenumber.

**Fix -->** 
* Download [latest `cacert.pem` from curl.haxx.se](https://curl.haxx.se/docs/caextract.htmls)
* Open `php.ini`
* Search `curl.cainfo` 

      [curl]
      ; A default value for the CURLOPT_CAINFO option. This is required to be an
      ; absolute path.
      ;curl.cainfo =
   
 * Change  `;curl.cainfo =` to `curl.cainfo = C:\cUrl\cacert.pem` path where you have copyed the `cacert.pem`
 
 
 
