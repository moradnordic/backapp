<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PRegulr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRegulr>
 *
 * @method PRegulr|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRegulr|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRegulr[]    findAll()
 * @method PRegulr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRegulrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRegulr::class);
    }

//    /**
//     * @return PRegulr[] Returns an array of PRegulr objects
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

//    public function findOneBySomeField($value): ?PRegulr
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
