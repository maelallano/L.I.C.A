<?php

namespace App\Repository;

use App\Entity\Alien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Alien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alien[]    findAll()
 * @method Alien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlienRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Alien::class);
    }

//    /**
//     * @return Alien[] Returns an array of Alien objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Alien
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
