<?php

namespace App\Repository;

use App\Entity\Connectionsocialnetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Connectionsocialnetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method Connectionsocialnetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method Connectionsocialnetwork[]    findAll()
 * @method Connectionsocialnetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConnectionsocialnetworkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Connectionsocialnetwork::class);
    }

    // /**
    //  * @return Connectionsocialnetwork[] Returns an array of Connectionsocialnetwork objects
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
    public function findOneBySomeField($value): ?Connectionsocialnetwork
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
