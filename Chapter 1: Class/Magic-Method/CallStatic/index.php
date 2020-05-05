<?php

class EmailNotficationService {

    
    private static function subscriptionIsGoingToExpired(string $email, string $emailTemplateType)
    {
        //logic going to subscription expiration
        return 'email notifcation succesfully send';
    }

    public function __callStatic($methodName, $arguments) {
        
        if ($methodName != 'subscriptionIsGoingToExpired') {
            throw new Exception("$methodName method is not defined in the class.");
        }
        self::subscriptionIsGoingToExpired(...$arguments);
    }
    
}

// __call method is invoke when we tried to access undefined or unaccessable method from the object of class
 echo EmailNotficationService::subscriptionIsGoingToExpired('testemail@example.com', 'weekly');