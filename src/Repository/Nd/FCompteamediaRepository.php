<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCompteamedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCompteamedia>
 *
 * @method FCompteamedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCompteamedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCompteamedia[]    findAll()
 * @method FCompteamedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCompteamediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCompteamedia::class);
    }

//    /**
//     * @return FCompteamedia[] Returns an array of FCompteamedia objects
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

//    public function findOneBySomeField($value): ?FCompteamedia
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
