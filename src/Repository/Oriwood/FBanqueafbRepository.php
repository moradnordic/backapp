<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FBanqueafb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FBanqueafb>
 *
 * @method FBanqueafb|null find($id, $lockMode = null, $lockVersion = null)
 * @method FBanqueafb|null findOneBy(array $criteria, array $orderBy = null)
 * @method FBanqueafb[]    findAll()
 * @method FBanqueafb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FBanqueafbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FBanqueafb::class);
    }

//    /**
//     * @return FBanqueafb[] Returns an array of FBanqueafb objects
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

//    public function findOneBySomeField($value): ?FBanqueafb
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
