<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblchargesachat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblchargesachat>
 *
 * @method Tblchargesachat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblchargesachat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblchargesachat[]    findAll()
 * @method Tblchargesachat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchargesachatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblchargesachat::class);
    }

//    /**
//     * @return Tblchargesachat[] Returns an array of Tblchargesachat objects
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

//    public function findOneBySomeField($value): ?Tblchargesachat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
