<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FDocenteteinfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDocenteteinfos>
 *
 * @method FDocenteteinfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDocenteteinfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDocenteteinfos[]    findAll()
 * @method FDocenteteinfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDocenteteinfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDocenteteinfos::class);
    }

//    /**
//     * @return FDocenteteinfos[] Returns an array of FDocenteteinfos objects
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

//    public function findOneBySomeField($value): ?FDocenteteinfos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
