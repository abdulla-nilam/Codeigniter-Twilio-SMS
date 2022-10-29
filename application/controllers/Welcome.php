<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './Twilio/autoload.php';

class Welcome extends CI_Controller {
    
    public function index()
    {
        $this->load->view('welcome_message');
    }
    
    public function sendSMS()
    {
        
        $number = $this->input->post('number');
        $country = $this->input->post('country');
        
        $to = '+'.$country.$number;        
        
        // Your Account SID and Auth Token from twilio.com/console
        $sid = 'Your SID';
        $token = 'Your Token';
        $client = new Twilio\Rest\Client($sid, $token);
        
        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
        // the number you'd like to send the message to
            $to,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => 'ADD Your Free/purchased Number',
                // the body of the text message you'd like to send
                'body' => "Hey Abdulla! It's Works"
            )
        );
    }
}
