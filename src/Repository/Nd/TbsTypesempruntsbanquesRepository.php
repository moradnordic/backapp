<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TbsTypesempruntsbanques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsTypesempruntsbanques>
 *
 * @method TbsTypesempruntsbanques|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsTypesempruntsbanques|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsTypesempruntsbanques[]    findAll()
 * @method TbsTypesempruntsbanques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsTypesempruntsbanquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsTypesempruntsbanques::class);
    }

//    /**
//     * @return TbsTypesempruntsbanques[] Returns an array of TbsTypesempruntsbanques objects
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

//    public function findOneBySomeField($value): ?TbsTypesempruntsbanques
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
