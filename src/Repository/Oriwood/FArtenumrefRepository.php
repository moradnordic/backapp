<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtenumref;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtenumref>
 *
 * @method FArtenumref|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtenumref|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtenumref[]    findAll()
 * @method FArtenumref[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtenumrefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtenumref::class);
    }

//    /**
//     * @return FArtenumref[] Returns an array of FArtenumref objects
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

//    public function findOneBySomeField($value): ?FArtenumref
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
