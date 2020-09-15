<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class PersonController extends BaseFOSRestController
{
    /**
     * @Rest\Get("/person", name="person")
     *
     * @return JsonResponse
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PersonController.php',
        ]);
    }

    /**
     * @Rest\Post("/person", name="create_person")
     *
     * @return JsonResponse
     */
    public function createPerson()
    {



        return $this->json([
            'person_id' => 1,
        ]);
    }
}
