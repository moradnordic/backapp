<?php

namespace App\Repository\Nd;

use App\Entity\Nd\SuiviKilometrageVehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SuiviKilometrageVehicule>
 *
 * @method SuiviKilometrageVehicule|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuiviKilometrageVehicule|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuiviKilometrageVehicule[]    findAll()
 * @method SuiviKilometrageVehicule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuiviKilometrageVehiculeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuiviKilometrageVehicule::class);
    }

//    /**
//     * @return SuiviKilometrageVehicule[] Returns an array of SuiviKilometrageVehicule objects
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

//    public function findOneBySomeField($value): ?SuiviKilometrageVehicule
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
