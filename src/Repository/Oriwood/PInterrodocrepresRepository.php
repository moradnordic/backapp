<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PInterrodocrepres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterrodocrepres>
 *
 * @method PInterrodocrepres|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterrodocrepres|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterrodocrepres[]    findAll()
 * @method PInterrodocrepres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterrodocrepresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterrodocrepres::class);
    }

//    /**
//     * @return PInterrodocrepres[] Returns an array of PInterrodocrepres objects
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

//    public function findOneBySomeField($value): ?PInterrodocrepres
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
