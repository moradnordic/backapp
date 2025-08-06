<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PCmddetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCmddetail>
 *
 * @method PCmddetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCmddetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCmddetail[]    findAll()
 * @method PCmddetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCmddetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCmddetail::class);
    }

//    /**
//     * @return PCmddetail[] Returns an array of PCmddetail objects
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

//    public function findOneBySomeField($value): ?PCmddetail
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
