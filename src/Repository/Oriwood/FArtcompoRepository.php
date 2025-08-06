<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtcompo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtcompo>
 *
 * @method FArtcompo|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtcompo|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtcompo[]    findAll()
 * @method FArtcompo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtcompoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtcompo::class);
    }

//    /**
//     * @return FArtcompo[] Returns an array of FArtcompo objects
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

//    public function findOneBySomeField($value): ?FArtcompo
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
