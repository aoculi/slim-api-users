<?php

namespace Api\Endpoints\Users\Routes;

use Api\Endpoints\Users\Controllers\UsersController;
use Api\Route;

class Users extends Route
{
    public function render(): void
    {
        $app = $this->app;
        $app->group(
            $this->getApiVersion() .'/users',
            function () {
                $this->get('', UsersController::class . ':index');
                $this->post('', UsersController::class . ':store');

                $this->get('/{id}', UsersController::class . ':show');
                $this->patch('/{id}', UsersController::class . ':update');
                $this->delete('/{id}', UsersController::class . ':destroy');

                $this->post('/activate', UsersController::class . ':activate');

                // Return user for token === token for the user with this id
                $this->get('/{id}/{token}', UsersController::class . ':showByIdAndToken');

                // Return user by name
                $this->get('/username/{username}', UsersController::class . ':showByName');
            }
        );
    }
}
