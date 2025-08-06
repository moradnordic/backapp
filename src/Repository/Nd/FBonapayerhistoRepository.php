<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FBonapayerhisto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FBonapayerhisto>
 *
 * @method FBonapayerhisto|null find($id, $lockMode = null, $lockVersion = null)
 * @method FBonapayerhisto|null findOneBy(array $criteria, array $orderBy = null)
 * @method FBonapayerhisto[]    findAll()
 * @method FBonapayerhisto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FBonapayerhistoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FBonapayerhisto::class);
    }

//    /**
//     * @return FBonapayerhisto[] Returns an array of FBonapayerhisto objects
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

//    public function findOneBySomeField($value): ?FBonapayerhisto
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
