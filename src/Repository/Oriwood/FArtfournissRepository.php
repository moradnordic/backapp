<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtfourniss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtfourniss>
 *
 * @method FArtfourniss|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtfourniss|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtfourniss[]    findAll()
 * @method FArtfourniss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtfournissRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtfourniss::class);
    }

//    /**
//     * @return FArtfourniss[] Returns an array of FArtfourniss objects
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

//    public function findOneBySomeField($value): ?FArtfourniss
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
