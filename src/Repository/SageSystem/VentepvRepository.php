<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Ventepv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ventepv>
 *
 * @method Ventepv|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ventepv|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ventepv[]    findAll()
 * @method Ventepv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentepvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ventepv::class);
    }

//    /**
//     * @return Ventepv[] Returns an array of Ventepv objects
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

//    public function findOneBySomeField($value): ?Ventepv
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
