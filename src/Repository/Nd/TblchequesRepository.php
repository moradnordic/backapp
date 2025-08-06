<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblcheques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblcheques>
 *
 * @method Tblcheques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblcheques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblcheques[]    findAll()
 * @method Tblcheques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchequesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblcheques::class);
    }

//    /**
//     * @return Tblcheques[] Returns an array of Tblcheques objects
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

//    public function findOneBySomeField($value): ?Tblcheques
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
