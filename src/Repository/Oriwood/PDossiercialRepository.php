<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PDossiercial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PDossiercial>
 *
 * @method PDossiercial|null find($id, $lockMode = null, $lockVersion = null)
 * @method PDossiercial|null findOneBy(array $criteria, array $orderBy = null)
 * @method PDossiercial[]    findAll()
 * @method PDossiercial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PDossiercialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PDossiercial::class);
    }

//    /**
//     * @return PDossiercial[] Returns an array of PDossiercial objects
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

//    public function findOneBySomeField($value): ?PDossiercial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
