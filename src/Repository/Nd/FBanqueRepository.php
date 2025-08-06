<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FBanque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FBanque>
 *
 * @method FBanque|null find($id, $lockMode = null, $lockVersion = null)
 * @method FBanque|null findOneBy(array $criteria, array $orderBy = null)
 * @method FBanque[]    findAll()
 * @method FBanque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FBanqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FBanque::class);
    }

//    /**
//     * @return FBanque[] Returns an array of FBanque objects
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

//    public function findOneBySomeField($value): ?FBanque
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
