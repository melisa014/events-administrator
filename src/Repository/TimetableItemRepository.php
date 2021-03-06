<?php

namespace App\Repository;

use App\Entity\TimetableItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TimetableItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimetableItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimetableItem[]    findAll()
 * @method TimetableItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimetableItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimetableItem::class);
    }

    // /**
    //  * @return TimetableItem[] Returns an array of TimetableItem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TimetableItem
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
