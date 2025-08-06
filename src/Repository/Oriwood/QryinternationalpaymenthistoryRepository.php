<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Qryinternationalpaymenthistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Qryinternationalpaymenthistory>
 *
 * @method Qryinternationalpaymenthistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method Qryinternationalpaymenthistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method Qryinternationalpaymenthistory[]    findAll()
 * @method Qryinternationalpaymenthistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QryinternationalpaymenthistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Qryinternationalpaymenthistory::class);
    }

//    /**
//     * @return Qryinternationalpaymenthistory[] Returns an array of Qryinternationalpaymenthistory objects
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

//    public function findOneBySomeField($value): ?Qryinternationalpaymenthistory
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
