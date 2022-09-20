<?php

namespace App\User\Api\V1\Actions;

use App\User\Domain\UserRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use GuzzleHttp\Psr7\Response;

class GetUsersAction
{
    private UserRepository $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function __invoke(Request $request, ResponseInterface $response, array $args)
    {
        
        return new Response();
    }
}