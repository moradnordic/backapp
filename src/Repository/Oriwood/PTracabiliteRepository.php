<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PTracabilite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PTracabilite>
 *
 * @method PTracabilite|null find($id, $lockMode = null, $lockVersion = null)
 * @method PTracabilite|null findOneBy(array $criteria, array $orderBy = null)
 * @method PTracabilite[]    findAll()
 * @method PTracabilite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PTracabiliteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PTracabilite::class);
    }

//    /**
//     * @return PTracabilite[] Returns an array of PTracabilite objects
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

//    public function findOneBySomeField($value): ?PTracabilite
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
