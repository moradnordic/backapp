<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEextraitlib;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEextraitlib>
 *
 * @method FEextraitlib|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEextraitlib|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEextraitlib[]    findAll()
 * @method FEextraitlib[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEextraitlibRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEextraitlib::class);
    }

//    /**
//     * @return FEextraitlib[] Returns an array of FEextraitlib objects
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

//    public function findOneBySomeField($value): ?FEextraitlib
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
