<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblreglementfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblreglementfrs>
 *
 * @method Tblreglementfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblreglementfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblreglementfrs[]    findAll()
 * @method Tblreglementfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblreglementfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblreglementfrs::class);
    }

//    /**
//     * @return Tblreglementfrs[] Returns an array of Tblreglementfrs objects
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

//    public function findOneBySomeField($value): ?Tblreglementfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
