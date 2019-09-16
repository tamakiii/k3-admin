<?php

namespace App\Repository;

use App\Entity\Ordar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ordar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ordar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ordar[]    findAll()
 * @method Ordar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ordar::class);
    }

    // /**
    //  * @return Ordar[] Returns an array of Ordar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ordar
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
