<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FPieceg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FPieceg>
 *
 * @method FPieceg|null find($id, $lockMode = null, $lockVersion = null)
 * @method FPieceg|null findOneBy(array $criteria, array $orderBy = null)
 * @method FPieceg[]    findAll()
 * @method FPieceg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FPiecegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FPieceg::class);
    }

//    /**
//     * @return FPieceg[] Returns an array of FPieceg objects
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

//    public function findOneBySomeField($value): ?FPieceg
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
