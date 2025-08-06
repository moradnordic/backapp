<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FComptetinfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptetinfos>
 *
 * @method FComptetinfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptetinfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptetinfos[]    findAll()
 * @method FComptetinfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptetinfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptetinfos::class);
    }

//    /**
//     * @return FComptetinfos[] Returns an array of FComptetinfos objects
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

//    public function findOneBySomeField($value): ?FComptetinfos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
