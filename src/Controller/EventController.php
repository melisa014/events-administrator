<?php

namespace App\Controller;

use App\Entity\Product;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class EventController extends BaseFOSRestController
{
    /**
     * @Rest\Get("/event", name="event")
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $product = new Product();
        $product->setName('name');
        $product->setQuantity(12);
        $product->setPrice(45000);

        $this->em->persist($product);
        $this->em->flush();

        $productData = $this->serializer->serialize($product, 'json');

        // десериализуется в объект, но все поля почему-то нал
        $normalisedProduct = $this->serializer->deserialize(
            $productData,
            Product::class,
            'json',
            // проходит без ошибок, но все поля объекта - нал...
//            [AbstractNormalizer::GROUPS => 'single']
            // должно давать ошибку, тк поле nutrition - null, а оно входит в данную группу
            // но не даёт)
            [AbstractNormalizer::GROUPS => 'withNutrition']
        );

        dump($productData);
        dump($normalisedProduct);
        die;
        return $this->json();
    }

    /**
     * @Rest\Post("/event", name="create_event")
     *
     * @return JsonResponse
     */
    public function createEvent(): JsonResponse
    {
        return $this->json([
            'event_id' => 1,
        ]);
    }
}
