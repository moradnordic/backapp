<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Sysdiagrams;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sysdiagrams>
 *
 * @method Sysdiagrams|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sysdiagrams|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sysdiagrams[]    findAll()
 * @method Sysdiagrams[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SysdiagramsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sysdiagrams::class);
    }

//    /**
//     * @return Sysdiagrams[] Returns an array of Sysdiagrams objects
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

//    public function findOneBySomeField($value): ?Sysdiagrams
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
