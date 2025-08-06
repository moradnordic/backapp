<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblmodepaiementfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblmodepaiementfrs>
 *
 * @method Tblmodepaiementfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblmodepaiementfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblmodepaiementfrs[]    findAll()
 * @method Tblmodepaiementfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblmodepaiementfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblmodepaiementfrs::class);
    }

//    /**
//     * @return Tblmodepaiementfrs[] Returns an array of Tblmodepaiementfrs objects
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

//    public function findOneBySomeField($value): ?Tblmodepaiementfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
