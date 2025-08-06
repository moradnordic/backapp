<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblsalaires;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblsalaires>
 *
 * @method Tblsalaires|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblsalaires|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblsalaires[]    findAll()
 * @method Tblsalaires[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblsalairesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblsalaires::class);
    }

//    /**
//     * @return Tblsalaires[] Returns an array of Tblsalaires objects
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

//    public function findOneBySomeField($value): ?Tblsalaires
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
