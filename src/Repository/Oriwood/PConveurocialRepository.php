<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PConveurocial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PConveurocial>
 *
 * @method PConveurocial|null find($id, $lockMode = null, $lockVersion = null)
 * @method PConveurocial|null findOneBy(array $criteria, array $orderBy = null)
 * @method PConveurocial[]    findAll()
 * @method PConveurocial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PConveurocialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PConveurocial::class);
    }

//    /**
//     * @return PConveurocial[] Returns an array of PConveurocial objects
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

//    public function findOneBySomeField($value): ?PConveurocial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
