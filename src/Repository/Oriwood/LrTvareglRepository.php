<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrTvaregl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrTvaregl>
 *
 * @method LrTvaregl|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrTvaregl|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrTvaregl[]    findAll()
 * @method LrTvaregl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrTvareglRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrTvaregl::class);
    }

//    /**
//     * @return LrTvaregl[] Returns an array of LrTvaregl objects
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

//    public function findOneBySomeField($value): ?LrTvaregl
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
