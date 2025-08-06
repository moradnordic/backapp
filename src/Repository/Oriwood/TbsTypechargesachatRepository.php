<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsTypechargesachat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsTypechargesachat>
 *
 * @method TbsTypechargesachat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsTypechargesachat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsTypechargesachat[]    findAll()
 * @method TbsTypechargesachat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsTypechargesachatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsTypechargesachat::class);
    }

//    /**
//     * @return TbsTypechargesachat[] Returns an array of TbsTypechargesachat objects
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

//    public function findOneBySomeField($value): ?TbsTypechargesachat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
