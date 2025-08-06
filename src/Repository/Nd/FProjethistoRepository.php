<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FProjethisto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FProjethisto>
 *
 * @method FProjethisto|null find($id, $lockMode = null, $lockVersion = null)
 * @method FProjethisto|null findOneBy(array $criteria, array $orderBy = null)
 * @method FProjethisto[]    findAll()
 * @method FProjethisto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FProjethistoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FProjethisto::class);
    }

//    /**
//     * @return FProjethisto[] Returns an array of FProjethisto objects
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

//    public function findOneBySomeField($value): ?FProjethisto
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
