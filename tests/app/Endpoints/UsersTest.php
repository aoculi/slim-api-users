<?php

namespace Tests\App\Endpoints;

use Tests\SlimFrameworkTestCase;

class UsersTest extends SlimFrameworkTestCase
{

    private static $token = '';

    public function testGetTokens()
    {
        $path = '/v1/token';
        $headers = [
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW' => getenv('ADMIN_PASSWORD')
        ];
        $response = $this->post($path, [], $headers);
        $this->assertEquals(201, $response->getStatusCode());

        $response = json_decode((string)$response->getBody());
        $this->assertNotEmpty($response->token);
        self::$token = $response->token;
    }

    public function testRouteWhithToken()
    {
        $token = self::$token;
        $path = '/v1/users';
        $headers = [
            'HTTP_Authorization' => "Bearer $token"
        ];
        $response = $this->get($path, [], $headers);
        $this->assertEquals(200, $response->getStatusCode());
        $response = json_decode((string)$response->getBody());
    }
}
