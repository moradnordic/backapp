<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FProjetligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FProjetligne>
 *
 * @method FProjetligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method FProjetligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method FProjetligne[]    findAll()
 * @method FProjetligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FProjetligneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FProjetligne::class);
    }

//    /**
//     * @return FProjetligne[] Returns an array of FProjetligne objects
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

//    public function findOneBySomeField($value): ?FProjetligne
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
