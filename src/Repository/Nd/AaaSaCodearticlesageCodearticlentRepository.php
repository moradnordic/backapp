<?php

namespace App\Repository\Nd;

use App\Entity\Nd\AaaSaCodearticlesageCodearticlent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AaaSaCodearticlesageCodearticlent>
 *
 * @method AaaSaCodearticlesageCodearticlent|null find($id, $lockMode = null, $lockVersion = null)
 * @method AaaSaCodearticlesageCodearticlent|null findOneBy(array $criteria, array $orderBy = null)
 * @method AaaSaCodearticlesageCodearticlent[]    findAll()
 * @method AaaSaCodearticlesageCodearticlent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AaaSaCodearticlesageCodearticlentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AaaSaCodearticlesageCodearticlent::class);
    }

//    /**
//     * @return AaaSaCodearticlesageCodearticlent[] Returns an array of AaaSaCodearticlesageCodearticlent objects
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

//    public function findOneBySomeField($value): ?AaaSaCodearticlesageCodearticlent
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
