<?php

namespace App\Repository\Nd;

use App\Entity\Nd\LrBanque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrBanque>
 *
 * @method LrBanque|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrBanque|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrBanque[]    findAll()
 * @method LrBanque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrBanqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrBanque::class);
    }

//    /**
//     * @return LrBanque[] Returns an array of LrBanque objects
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

//    public function findOneBySomeField($value): ?LrBanque
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
