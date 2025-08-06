<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FExtrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FExtrait>
 *
 * @method FExtrait|null find($id, $lockMode = null, $lockVersion = null)
 * @method FExtrait|null findOneBy(array $criteria, array $orderBy = null)
 * @method FExtrait[]    findAll()
 * @method FExtrait[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FExtraitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FExtrait::class);
    }

//    /**
//     * @return FExtrait[] Returns an array of FExtrait objects
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

//    public function findOneBySomeField($value): ?FExtrait
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
