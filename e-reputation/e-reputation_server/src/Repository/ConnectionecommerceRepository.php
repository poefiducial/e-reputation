<?php

namespace App\Repository;

use App\Entity\Connectionecommerce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Connectionecommerce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Connectionecommerce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Connectionecommerce[]    findAll()
 * @method Connectionecommerce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConnectionecommerceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Connectionecommerce::class);
    }

    // /**
    //  * @return Connectionecommerce[] Returns an array of Connectionecommerce objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Connectionecommerce
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
