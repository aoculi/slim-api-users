<?php

namespace Api\Endpoints\Authentication\Routes;

use Api\Endpoints\Authentication\Controllers\AuthenticationController;
use Api\Route;

class Authentication extends Route
{
    public function render(): void
    {
        $app = $this->app;
        $app->group(
            $this->getApiVersion() .'/auth',
            function () {
                $this->post('/login', AuthenticationController::class . ':login');
                $this->post('/logout', AuthenticationController::class . ':logout');

                //$this->post('/auto-login', AuthenticationController::class . ':autologin');

                // Check email, create a new token , send email
                $this->post('/password/forget', AuthenticationController::class . ':passwordForget');

                // check id token and the new password +save new password
                $this->post('/password/reset', AuthenticationController::class . ':passwordReset');
            }
        );
    }
}
