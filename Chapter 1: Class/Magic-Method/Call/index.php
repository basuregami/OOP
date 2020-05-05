<?php

class EmailNotficationService {

    
    private function subscriptionIsGoingToExpired(string $email, string $emailTemplateType)
    {
        //logic going to subscription expiration
        return 'email notifcation succesfully send';
    }

    public function __call($methodName, $arguments) {
        
        if ($methodName != 'subscriptionIsGoingToExpired') {
            throw new Exception("$methodName method is not defined in the class.");
        }
        $this->subscriptionIsGoingToExpired(...$arguments);
    }
    
}

// __call method is invoke when we tried to access undefined or unaccessable method from the object of class
$notificationService = new EmailNotficationService();
$notificationService->subscriptionIsGoingToExpired('testemail@example.com', 'weekly');