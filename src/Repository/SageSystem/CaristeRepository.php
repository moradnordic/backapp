<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Cariste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cariste>
 *
 * @method Cariste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cariste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cariste[]    findAll()
 * @method Cariste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaristeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cariste::class);
    }

//    /**
//     * @return Cariste[] Returns an array of Cariste objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Cariste
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
