<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tbltypecarburant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbltypecarburant>
 *
 * @method Tbltypecarburant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbltypecarburant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbltypecarburant[]    findAll()
 * @method Tbltypecarburant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltypecarburantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbltypecarburant::class);
    }

//    /**
//     * @return Tbltypecarburant[] Returns an array of Tbltypecarburant objects
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

//    public function findOneBySomeField($value): ?Tbltypecarburant
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
