<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrParameter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrParameter>
 *
 * @method LrParameter|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrParameter|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrParameter[]    findAll()
 * @method LrParameter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrParameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrParameter::class);
    }

//    /**
//     * @return LrParameter[] Returns an array of LrParameter objects
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

//    public function findOneBySomeField($value): ?LrParameter
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
