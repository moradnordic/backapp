<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEfinancierec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEfinancierec>
 *
 * @method FEfinancierec|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEfinancierec|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEfinancierec[]    findAll()
 * @method FEfinancierec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEfinancierecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEfinancierec::class);
    }

//    /**
//     * @return FEfinancierec[] Returns an array of FEfinancierec objects
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

//    public function findOneBySomeField($value): ?FEfinancierec
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
