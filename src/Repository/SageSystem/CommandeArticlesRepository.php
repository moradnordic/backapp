<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\CommandeArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeArticles>
 *
 * @method CommandeArticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeArticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeArticles[]    findAll()
 * @method CommandeArticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeArticles::class);
    }

//    /**
//     * @return CommandeArticles[] Returns an array of CommandeArticles objects
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

//    public function findOneBySomeField($value): ?CommandeArticles
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
