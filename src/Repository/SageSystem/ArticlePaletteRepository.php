<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\ArticlePalette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticlePalette>
 *
 * @method ArticlePalette|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticlePalette|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticlePalette[]    findAll()
 * @method ArticlePalette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlePaletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticlePalette::class);
    }

//    /**
//     * @return ArticlePalette[] Returns an array of ArticlePalette objects
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

//    public function findOneBySomeField($value): ?ArticlePalette
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
