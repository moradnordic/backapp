<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArticle>
 *
 * @method FArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArticle[]    findAll()
 * @method FArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArticle::class);
    }

//    /**
//     * @return FArticle[] Returns an array of FArticle objects
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

//    public function findOneBySomeField($value): ?FArticle
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
