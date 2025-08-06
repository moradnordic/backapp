<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblclientslocaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblclientslocaux>
 *
 * @method Tblclientslocaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblclientslocaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblclientslocaux[]    findAll()
 * @method Tblclientslocaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblclientslocauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblclientslocaux::class);
    }

//    /**
//     * @return Tblclientslocaux[] Returns an array of Tblclientslocaux objects
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

//    public function findOneBySomeField($value): ?Tblclientslocaux
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
