<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Clientarticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clientarticle>
 *
 * @method Clientarticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clientarticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clientarticle[]    findAll()
 * @method Clientarticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientarticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clientarticle::class);
    }

//    /**
//     * @return Clientarticle[] Returns an array of Clientarticle objects
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

//    public function findOneBySomeField($value): ?Clientarticle
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
