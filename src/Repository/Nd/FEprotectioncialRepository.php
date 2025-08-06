<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEprotectioncial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEprotectioncial>
 *
 * @method FEprotectioncial|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEprotectioncial|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEprotectioncial[]    findAll()
 * @method FEprotectioncial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEprotectioncialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEprotectioncial::class);
    }

//    /**
//     * @return FEprotectioncial[] Returns an array of FEprotectioncial objects
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

//    public function findOneBySomeField($value): ?FEprotectioncial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
