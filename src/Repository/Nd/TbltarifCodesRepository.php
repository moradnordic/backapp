<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TbltarifCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbltarifCodes>
 *
 * @method TbltarifCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbltarifCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbltarifCodes[]    findAll()
 * @method TbltarifCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltarifCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbltarifCodes::class);
    }

//    /**
//     * @return TbltarifCodes[] Returns an array of TbltarifCodes objects
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

//    public function findOneBySomeField($value): ?TbltarifCodes
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
