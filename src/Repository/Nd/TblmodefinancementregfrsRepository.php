<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblmodefinancementregfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblmodefinancementregfrs>
 *
 * @method Tblmodefinancementregfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblmodefinancementregfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblmodefinancementregfrs[]    findAll()
 * @method Tblmodefinancementregfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblmodefinancementregfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblmodefinancementregfrs::class);
    }

//    /**
//     * @return Tblmodefinancementregfrs[] Returns an array of Tblmodefinancementregfrs objects
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

//    public function findOneBySomeField($value): ?Tblmodefinancementregfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
