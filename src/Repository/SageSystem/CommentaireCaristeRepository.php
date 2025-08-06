<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\CommentaireCariste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommentaireCariste>
 *
 * @method CommentaireCariste|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentaireCariste|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentaireCariste[]    findAll()
 * @method CommentaireCariste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentaireCaristeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentaireCariste::class);
    }

//    /**
//     * @return CommentaireCariste[] Returns an array of CommentaireCariste objects
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

//    public function findOneBySomeField($value): ?CommentaireCariste
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
