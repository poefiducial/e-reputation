<?php

namespace App\Repository;

use App\Entity\ECommerces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ECommerces|null find($id, $lockMode = null, $lockVersion = null)
 * @method ECommerces|null findOneBy(array $criteria, array $orderBy = null)
 * @method ECommerces[]    findAll()
 * @method ECommerces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ECommercesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ECommerces::class);
    }

    // /**
    //  * @return ECommerces[] Returns an array of ECommerces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ECommerces
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
