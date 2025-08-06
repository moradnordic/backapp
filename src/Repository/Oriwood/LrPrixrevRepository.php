<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrPrixrev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrPrixrev>
 *
 * @method LrPrixrev|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrPrixrev|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrPrixrev[]    findAll()
 * @method LrPrixrev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrPrixrevRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrPrixrev::class);
    }

//    /**
//     * @return LrPrixrev[] Returns an array of LrPrixrev objects
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

//    public function findOneBySomeField($value): ?LrPrixrev
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
