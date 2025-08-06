<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\InventaireStaff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InventaireStaff>
 *
 * @method InventaireStaff|null find($id, $lockMode = null, $lockVersion = null)
 * @method InventaireStaff|null findOneBy(array $criteria, array $orderBy = null)
 * @method InventaireStaff[]    findAll()
 * @method InventaireStaff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventaireStaffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InventaireStaff::class);
    }

//    /**
//     * @return InventaireStaff[] Returns an array of InventaireStaff objects
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

//    public function findOneBySomeField($value): ?InventaireStaff
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
