<?php

namespace App\Repository;

use App\Entity\Socialnetworks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Socialnetworks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Socialnetworks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Socialnetworks[]    findAll()
 * @method Socialnetworks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocialnetworksRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Socialnetworks::class);
    }

    // /**
    //  * @return Socialnetworks[] Returns an array of Socialnetworks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Socialnetworks
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
