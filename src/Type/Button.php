<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2017 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

namespace Berlioz\Form\Type;

use Berlioz\Form\AbstractType;

class Button extends AbstractType
{
    public function __construct(array $options = [])
    {
        parent::__construct(array_replace_recursive(['required' => false,
                                                     'mapped'   => false], $options));
    }

    public function getType(): string
    {
        return 'button';
    }
}