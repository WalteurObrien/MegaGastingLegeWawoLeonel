<?php

namespace App\Repository;

use App\Entity\TYPECONTRAT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TYPECONTRAT>
 *
 * @method TYPECONTRAT|null find($id, $lockMode = null, $lockVersion = null)
 * @method TYPECONTRAT|null findOneBy(array $criteria, array $orderBy = null)
 * @method TYPECONTRAT[]    findAll()
 * @method TYPECONTRAT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TYPECONTRATRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TYPECONTRAT::class);
    }

    public function save(TYPECONTRAT $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TYPECONTRAT $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TYPECONTRAT[] Returns an array of TYPECONTRAT objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TYPECONTRAT
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
