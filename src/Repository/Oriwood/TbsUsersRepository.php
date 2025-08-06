<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsUsers>
 *
 * @method TbsUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsUsers[]    findAll()
 * @method TbsUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsUsers::class);
    }

//    /**
//     * @return TbsUsers[] Returns an array of TbsUsers objects
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

//    public function findOneBySomeField($value): ?TbsUsers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
