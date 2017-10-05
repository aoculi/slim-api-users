# Slim Api Users

[![Build Status](https://travis-ci.org/aoculi/slim-api-users.svg?branch=master)](https://travis-ci.org/aoculi/slim-api-users) [![License](https://poser.pugx.org/aoculi/slim-api-users/license)](https://packagist.org/packages/aoculi/slim-api-users)

Warning: this package is not ready yet for production.

This package is aimed to be used only with [aoculi/slim-api](https://github.com/aoculi/slim-api).
It add Users and Auth endpoints to your Slim Api project.

## Installing
In your slim api project
```bash
make endpoint users
```

Add the new endpoints on public/index.php
```bash
$app = (new App($config))
    -> ...
    ->addEndpoint(Api\Endpoints\Authentication\Routes\Authentication::class)
    ->addEndpoint(Api\Users\Routes\Users::class); 
```

