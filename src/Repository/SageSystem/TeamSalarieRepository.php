<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\TeamSalarie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TeamSalarie>
 *
 * @method TeamSalarie|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamSalarie|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamSalarie[]    findAll()
 * @method TeamSalarie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamSalarieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamSalarie::class);
    }

//    /**
//     * @return TeamSalarie[] Returns an array of TeamSalarie objects
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

//    public function findOneBySomeField($value): ?TeamSalarie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
