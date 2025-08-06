<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PResolution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PResolution>
 *
 * @method PResolution|null find($id, $lockMode = null, $lockVersion = null)
 * @method PResolution|null findOneBy(array $criteria, array $orderBy = null)
 * @method PResolution[]    findAll()
 * @method PResolution[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PResolutionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PResolution::class);
    }

//    /**
//     * @return PResolution[] Returns an array of PResolution objects
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

//    public function findOneBySomeField($value): ?PResolution
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
