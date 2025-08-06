<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrSortiestk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrSortiestk>
 *
 * @method LrSortiestk|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrSortiestk|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrSortiestk[]    findAll()
 * @method LrSortiestk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrSortiestkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrSortiestk::class);
    }

//    /**
//     * @return LrSortiestk[] Returns an array of LrSortiestk objects
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

//    public function findOneBySomeField($value): ?LrSortiestk
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
