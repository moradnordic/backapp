<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAboenteteinfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAboenteteinfos>
 *
 * @method FAboenteteinfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAboenteteinfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAboenteteinfos[]    findAll()
 * @method FAboenteteinfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAboenteteinfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAboenteteinfos::class);
    }

//    /**
//     * @return FAboenteteinfos[] Returns an array of FAboenteteinfos objects
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

//    public function findOneBySomeField($value): ?FAboenteteinfos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
