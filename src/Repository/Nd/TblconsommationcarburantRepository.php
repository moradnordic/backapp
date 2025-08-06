<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblconsommationcarburant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblconsommationcarburant>
 *
 * @method Tblconsommationcarburant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblconsommationcarburant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblconsommationcarburant[]    findAll()
 * @method Tblconsommationcarburant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblconsommationcarburantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblconsommationcarburant::class);
    }

//    /**
//     * @return Tblconsommationcarburant[] Returns an array of Tblconsommationcarburant objects
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

//    public function findOneBySomeField($value): ?Tblconsommationcarburant
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
