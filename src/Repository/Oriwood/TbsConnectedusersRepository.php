<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsConnectedusers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsConnectedusers>
 *
 * @method TbsConnectedusers|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsConnectedusers|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsConnectedusers[]    findAll()
 * @method TbsConnectedusers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsConnectedusersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsConnectedusers::class);
    }

//    /**
//     * @return TbsConnectedusers[] Returns an array of TbsConnectedusers objects
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

//    public function findOneBySomeField($value): ?TbsConnectedusers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
