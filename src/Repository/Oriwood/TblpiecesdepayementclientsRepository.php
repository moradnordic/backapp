<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblpiecesdepayementclients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblpiecesdepayementclients>
 *
 * @method Tblpiecesdepayementclients|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblpiecesdepayementclients|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblpiecesdepayementclients[]    findAll()
 * @method Tblpiecesdepayementclients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblpiecesdepayementclientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblpiecesdepayementclients::class);
    }

//    /**
//     * @return Tblpiecesdepayementclients[] Returns an array of Tblpiecesdepayementclients objects
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

//    public function findOneBySomeField($value): ?Tblpiecesdepayementclients
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
