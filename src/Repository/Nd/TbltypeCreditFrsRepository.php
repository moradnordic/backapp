<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TbltypeCreditFrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbltypeCreditFrs>
 *
 * @method TbltypeCreditFrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbltypeCreditFrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbltypeCreditFrs[]    findAll()
 * @method TbltypeCreditFrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltypeCreditFrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbltypeCreditFrs::class);
    }

//    /**
//     * @return TbltypeCreditFrs[] Returns an array of TbltypeCreditFrs objects
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

//    public function findOneBySomeField($value): ?TbltypeCreditFrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
