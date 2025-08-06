<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PDevise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PDevise>
 *
 * @method PDevise|null find($id, $lockMode = null, $lockVersion = null)
 * @method PDevise|null findOneBy(array $criteria, array $orderBy = null)
 * @method PDevise[]    findAll()
 * @method PDevise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PDeviseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PDevise::class);
    }

//    /**
//     * @return PDevise[] Returns an array of PDevise objects
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

//    public function findOneBySomeField($value): ?PDevise
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
