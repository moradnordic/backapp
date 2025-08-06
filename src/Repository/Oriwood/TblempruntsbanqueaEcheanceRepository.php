<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblempruntsbanqueaEcheance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblempruntsbanqueaEcheance>
 *
 * @method TblempruntsbanqueaEcheance|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblempruntsbanqueaEcheance|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblempruntsbanqueaEcheance[]    findAll()
 * @method TblempruntsbanqueaEcheance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblempruntsbanqueaEcheanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblempruntsbanqueaEcheance::class);
    }

//    /**
//     * @return TblempruntsbanqueaEcheance[] Returns an array of TblempruntsbanqueaEcheance objects
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

//    public function findOneBySomeField($value): ?TblempruntsbanqueaEcheance
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
