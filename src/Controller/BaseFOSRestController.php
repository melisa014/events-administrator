<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

class BaseFOSRestController extends AbstractController
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @param SerializerInterface    $serializer
     * @param EntityManagerInterface $em
     */
    public function __construct(
        SerializerInterface $serializer,
        EntityManagerInterface $em
    ) {
        $this->serializer = $serializer;
        $this->em = $em;
    }
}
