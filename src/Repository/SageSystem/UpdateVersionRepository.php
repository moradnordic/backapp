<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\UpdateVersion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UpdateVersion>
 *
 * @method UpdateVersion|null find($id, $lockMode = null, $lockVersion = null)
 * @method UpdateVersion|null findOneBy(array $criteria, array $orderBy = null)
 * @method UpdateVersion[]    findAll()
 * @method UpdateVersion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UpdateVersionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UpdateVersion::class);
    }

//    /**
//     * @return UpdateVersion[] Returns an array of UpdateVersion objects
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

//    public function findOneBySomeField($value): ?UpdateVersion
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
