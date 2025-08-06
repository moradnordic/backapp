<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FProjetplanning;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FProjetplanning>
 *
 * @method FProjetplanning|null find($id, $lockMode = null, $lockVersion = null)
 * @method FProjetplanning|null findOneBy(array $criteria, array $orderBy = null)
 * @method FProjetplanning[]    findAll()
 * @method FProjetplanning[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FProjetplanningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FProjetplanning::class);
    }

//    /**
//     * @return FProjetplanning[] Returns an array of FProjetplanning objects
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

//    public function findOneBySomeField($value): ?FProjetplanning
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
