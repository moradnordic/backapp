<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEnumstat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumstat>
 *
 * @method FEnumstat|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumstat|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumstat[]    findAll()
 * @method FEnumstat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumstatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumstat::class);
    }

//    /**
//     * @return FEnumstat[] Returns an array of FEnumstat objects
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

//    public function findOneBySomeField($value): ?FEnumstat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
