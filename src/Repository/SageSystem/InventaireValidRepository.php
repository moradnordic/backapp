<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\InventaireValid;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InventaireValid>
 *
 * @method InventaireValid|null find($id, $lockMode = null, $lockVersion = null)
 * @method InventaireValid|null findOneBy(array $criteria, array $orderBy = null)
 * @method InventaireValid[]    findAll()
 * @method InventaireValid[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventaireValidRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InventaireValid::class);
    }

//    /**
//     * @return InventaireValid[] Returns an array of InventaireValid objects
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

//    public function findOneBySomeField($value): ?InventaireValid
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
