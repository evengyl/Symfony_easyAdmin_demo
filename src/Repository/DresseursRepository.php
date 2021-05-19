<?php

namespace App\Repository;

use App\Entity\Dresseurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dresseurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dresseurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dresseurs[]    findAll()
 * @method Dresseurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DresseursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dresseurs::class);
    }

    // /**
    //  * @return Dresseurs[] Returns an array of Dresseurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dresseurs
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
