<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Profilepage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Profilepage>
 *
 * @method Profilepage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Profilepage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Profilepage[]    findAll()
 * @method Profilepage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfilepageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Profilepage::class);
    }

//    /**
//     * @return Profilepage[] Returns an array of Profilepage objects
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

//    public function findOneBySomeField($value): ?Profilepage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
