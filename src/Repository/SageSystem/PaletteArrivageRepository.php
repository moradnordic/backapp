<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\PaletteArrivage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaletteArrivage>
 *
 * @method PaletteArrivage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaletteArrivage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaletteArrivage[]    findAll()
 * @method PaletteArrivage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaletteArrivageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaletteArrivage::class);
    }

//    /**
//     * @return PaletteArrivage[] Returns an array of PaletteArrivage objects
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

//    public function findOneBySomeField($value): ?PaletteArrivage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
