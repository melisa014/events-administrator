<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/event", name="event")
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EventController.php',
        ]);
    }
}
