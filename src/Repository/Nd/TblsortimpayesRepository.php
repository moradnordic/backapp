<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblsortimpayes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblsortimpayes>
 *
 * @method Tblsortimpayes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblsortimpayes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblsortimpayes[]    findAll()
 * @method Tblsortimpayes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblsortimpayesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblsortimpayes::class);
    }

//    /**
//     * @return Tblsortimpayes[] Returns an array of Tblsortimpayes objects
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

//    public function findOneBySomeField($value): ?Tblsortimpayes
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
