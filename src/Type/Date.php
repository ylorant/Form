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

class Date extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return 'date';
    }

    /**
     * @inheritdoc
     */
    public function getValue(bool $raw = false)
    {
        if ($raw) {
            return parent::getValue($raw);
        }

        return new \DateTime(parent::getValue(true));
    }
}