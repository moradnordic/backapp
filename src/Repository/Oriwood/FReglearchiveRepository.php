<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FReglearchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FReglearchive>
 *
 * @method FReglearchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method FReglearchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method FReglearchive[]    findAll()
 * @method FReglearchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FReglearchiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FReglearchive::class);
    }

//    /**
//     * @return FReglearchive[] Returns an array of FReglearchive objects
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

//    public function findOneBySomeField($value): ?FReglearchive
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
