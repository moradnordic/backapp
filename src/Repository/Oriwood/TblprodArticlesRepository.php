<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblprodArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblprodArticles>
 *
 * @method TblprodArticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblprodArticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblprodArticles[]    findAll()
 * @method TblprodArticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblprodArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblprodArticles::class);
    }

//    /**
//     * @return TblprodArticles[] Returns an array of TblprodArticles objects
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

//    public function findOneBySomeField($value): ?TblprodArticles
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
