<?php
/**
 * Created by PhpStorm.
 * User: pkielt
 * Date: 29.09.2018
 * Time: 13:15
 */

namespace Raid\Champ;

use Raid\Champ\Spec\Shaman\Elemental;
use Raid\Champ\Spec\Shaman\Enhancement;
use Raid\Champ\Spec\Shaman\Restoration;

class Shaman extends Champ
{
    public function __construct()
    {
        $this->name = 'Shaman';
        $this->classColor = [35 , 89, 255];
        $this->specs[] = new Elemental();
        $this->specs[] = new Enhancement();
        $this->specs[] = new Restoration();
        $this->buffs = [];
    }
}