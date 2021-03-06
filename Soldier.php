<?php
/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:13 AM
 */

class Soldier extends Fighter
{
    /**
     * Soldier constructor.
     */
    public function __construct(Weapon $weapon,Armor $armor)
    {
        $this->setAgility(100 + $armor->getWeight()*2 + $weapon->getQuality()*3);
        $this->setAttack(200 + $weapon->getDamage()*3);
        $this->setDefense(300 + $armor->getProtection()*4);
        $this->setLife(6000 + $this->getAgility()*rand(1,5));
    }

    function attackProduce()
    {
        $damage = $this->getAttack() + $this->getAgility()*rand(3,7);
        return $damage;
    }

    function defenseRating()
    {
        $protection = $this->getDefense() + $this->getAgility()*rand(3,7);
        return $protection;
    }
}