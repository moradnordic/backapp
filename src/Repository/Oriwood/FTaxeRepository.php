<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FTaxe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FTaxe>
 *
 * @method FTaxe|null find($id, $lockMode = null, $lockVersion = null)
 * @method FTaxe|null findOneBy(array $criteria, array $orderBy = null)
 * @method FTaxe[]    findAll()
 * @method FTaxe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FTaxeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FTaxe::class);
    }

//    /**
//     * @return FTaxe[] Returns an array of FTaxe objects
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

//    public function findOneBySomeField($value): ?FTaxe
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
