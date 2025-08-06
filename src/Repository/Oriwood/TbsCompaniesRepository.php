<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsCompanies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsCompanies>
 *
 * @method TbsCompanies|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsCompanies|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsCompanies[]    findAll()
 * @method TbsCompanies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsCompaniesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsCompanies::class);
    }

//    /**
//     * @return TbsCompanies[] Returns an array of TbsCompanies objects
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

//    public function findOneBySomeField($value): ?TbsCompanies
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
