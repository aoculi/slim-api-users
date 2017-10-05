<?php

namespace Api\Endpoints\Authentication\Controllers;

use Api\Controller;
use Api\Responses\OkResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AuthenticationController extends Controller
{

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     * @return ResponseInterface
     */
    public function login(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        return OkResponse::send($response, ['Hello, welcome on the API']);
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function logout(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function passwordForget(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function passwordReset(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }
}
