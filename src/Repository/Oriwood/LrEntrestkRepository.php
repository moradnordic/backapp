<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrEntrestk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrEntrestk>
 *
 * @method LrEntrestk|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrEntrestk|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrEntrestk[]    findAll()
 * @method LrEntrestk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrEntrestkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrEntrestk::class);
    }

//    /**
//     * @return LrEntrestk[] Returns an array of LrEntrestk objects
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

//    public function findOneBySomeField($value): ?LrEntrestk
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
