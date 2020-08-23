<?php

namespace App\Repository;

use App\Entity\PresentationHome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PresentationHome|null find($id, $lockMode = null, $lockVersion = null)
 * @method PresentationHome|null findOneBy(array $criteria, array $orderBy = null)
 * @method PresentationHome[]    findAll()
 * @method PresentationHome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PresentationHomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PresentationHome::class);
    }

    // /**
    //  * @return PresentationHome[] Returns an array of PresentationHome objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PresentationHome
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
