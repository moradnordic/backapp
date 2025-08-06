<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TbsUnites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbsUnites>
 *
 * @method TbsUnites|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbsUnites|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbsUnites[]    findAll()
 * @method TbsUnites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbsUnitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbsUnites::class);
    }

//    /**
//     * @return TbsUnites[] Returns an array of TbsUnites objects
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

//    public function findOneBySomeField($value): ?TbsUnites
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
