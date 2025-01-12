<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\Paladin\Holy;
use Raid\Champ\Spec\Paladin\Protection;
use Raid\Champ\Spec\Paladin\Retribution;

class Paladin extends Champ
{
    public function __construct()
    {
        $this->name = 'Paladin';
        $this->classColor = [244 , 140, 186];
        $this->specs['Holy'] = new Holy();
        $this->specs['Protection'] = new Protection();
        $this->specs['Retribution'] = new Retribution();
        $this->buffs = [];
    }
}