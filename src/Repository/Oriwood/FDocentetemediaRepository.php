<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDocentetemedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDocentetemedia>
 *
 * @method FDocentetemedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDocentetemedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDocentetemedia[]    findAll()
 * @method FDocentetemedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDocentetemediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDocentetemedia::class);
    }

//    /**
//     * @return FDocentetemedia[] Returns an array of FDocentetemedia objects
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

//    public function findOneBySomeField($value): ?FDocentetemedia
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
