<?php

namespace App\Repository;

use App\Entity\INTERVIEW;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<INTERVIEW>
 *
 * @method INTERVIEW|null find($id, $lockMode = null, $lockVersion = null)
 * @method INTERVIEW|null findOneBy(array $criteria, array $orderBy = null)
 * @method INTERVIEW[]    findAll()
 * @method INTERVIEW[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class INTERVIEWRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, INTERVIEW::class);
    }

    public function save(INTERVIEW $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(INTERVIEW $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return INTERVIEW[] Returns an array of INTERVIEW objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?INTERVIEW
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
