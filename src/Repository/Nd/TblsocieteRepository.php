<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblsociete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblsociete>
 *
 * @method Tblsociete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblsociete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblsociete[]    findAll()
 * @method Tblsociete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblsocieteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblsociete::class);
    }

//    /**
//     * @return Tblsociete[] Returns an array of Tblsociete objects
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

//    public function findOneBySomeField($value): ?Tblsociete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
