<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TabBanque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TabBanque>
 *
 * @method TabBanque|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabBanque|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabBanque[]    findAll()
 * @method TabBanque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabBanqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabBanque::class);
    }

//    /**
//     * @return TabBanque[] Returns an array of TabBanque objects
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

//    public function findOneBySomeField($value): ?TabBanque
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
