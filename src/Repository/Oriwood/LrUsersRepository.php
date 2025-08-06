<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrUsers>
 *
 * @method LrUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrUsers[]    findAll()
 * @method LrUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrUsers::class);
    }

//    /**
//     * @return LrUsers[] Returns an array of LrUsers objects
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

//    public function findOneBySomeField($value): ?LrUsers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
