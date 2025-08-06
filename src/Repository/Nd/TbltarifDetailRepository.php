<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TbltarifDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbltarifDetail>
 *
 * @method TbltarifDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbltarifDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbltarifDetail[]    findAll()
 * @method TbltarifDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltarifDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbltarifDetail::class);
    }

//    /**
//     * @return TbltarifDetail[] Returns an array of TbltarifDetail objects
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

//    public function findOneBySomeField($value): ?TbltarifDetail
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
