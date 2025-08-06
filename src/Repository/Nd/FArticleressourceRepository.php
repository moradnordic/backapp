<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FArticleressource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArticleressource>
 *
 * @method FArticleressource|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArticleressource|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArticleressource[]    findAll()
 * @method FArticleressource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArticleressourceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArticleressource::class);
    }

//    /**
//     * @return FArticleressource[] Returns an array of FArticleressource objects
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

//    public function findOneBySomeField($value): ?FArticleressource
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
