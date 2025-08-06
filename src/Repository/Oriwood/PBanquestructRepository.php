<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PBanquestruct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PBanquestruct>
 *
 * @method PBanquestruct|null find($id, $lockMode = null, $lockVersion = null)
 * @method PBanquestruct|null findOneBy(array $criteria, array $orderBy = null)
 * @method PBanquestruct[]    findAll()
 * @method PBanquestruct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PBanquestructRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PBanquestruct::class);
    }

//    /**
//     * @return PBanquestruct[] Returns an array of PBanquestruct objects
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

//    public function findOneBySomeField($value): ?PBanquestruct
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
