<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FFammodele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FFammodele>
 *
 * @method FFammodele|null find($id, $lockMode = null, $lockVersion = null)
 * @method FFammodele|null findOneBy(array $criteria, array $orderBy = null)
 * @method FFammodele[]    findAll()
 * @method FFammodele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFammodeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FFammodele::class);
    }

//    /**
//     * @return FFammodele[] Returns an array of FFammodele objects
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

//    public function findOneBySomeField($value): ?FFammodele
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
