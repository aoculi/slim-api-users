<?php

namespace Api\Endpoints\Users\Controllers;

use Api\Controller;
use Api\Responses\OkResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     * @return ResponseInterface
     */
    public function index(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        return OkResponse::send($response, ['Hello, welcome on the API']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function store(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * Display a specific resource.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function show(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function update(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function destroy(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * Activate a newly created resource in storage.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function activate(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * Display user where token === token for the user with this id
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function showByIdAndToken(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }

    /**
     * Display specific user thank to the username
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $arguments
     */
    public function showByName(ServerRequestInterface $request, ResponseInterface $response, $arguments)
    {
        //
    }
}
