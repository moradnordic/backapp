<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FProtectioncial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FProtectioncial>
 *
 * @method FProtectioncial|null find($id, $lockMode = null, $lockVersion = null)
 * @method FProtectioncial|null findOneBy(array $criteria, array $orderBy = null)
 * @method FProtectioncial[]    findAll()
 * @method FProtectioncial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FProtectioncialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FProtectioncial::class);
    }

//    /**
//     * @return FProtectioncial[] Returns an array of FProtectioncial objects
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

//    public function findOneBySomeField($value): ?FProtectioncial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
