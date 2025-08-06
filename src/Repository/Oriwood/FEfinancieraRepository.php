<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEfinanciera;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEfinanciera>
 *
 * @method FEfinanciera|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEfinanciera|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEfinanciera[]    findAll()
 * @method FEfinanciera[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEfinancieraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEfinanciera::class);
    }

//    /**
//     * @return FEfinanciera[] Returns an array of FEfinanciera objects
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

//    public function findOneBySomeField($value): ?FEfinanciera
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
